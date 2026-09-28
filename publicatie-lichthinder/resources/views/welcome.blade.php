{{--
    resources/views/components/screenshot-guard.blade.php

    Deterrence layer for pages showing sensitive data. This does NOT and
    CANNOT prevent screenshots (OS-level tools, phone cameras, etc. are
    always outside a webpage's control). What it does:

      1. Burns a traceable watermark (user id/email + timestamp + IP-ish
         session hash) across the page, tiled and low-opacity. If a
         screenshot leaks, you can identify who took it. This is the
         single most useful thing here.
      2. Blurs the protected content when the browser window loses focus
         (e.g. user alt-tabs to Snipping Tool / another app). Stops
         *most* casual screenshot attempts that require switching windows.
         Does NOT stop same-window screenshot extensions or phone cameras.
      3. Disables right-click, text selection, and common
         copy/save/print/devtools shortcuts inside the guarded region.
         Trivially bypassed by anyone who opens devtools or disables JS,
         but stops casual copy-paste / right-click-save.

    USAGE — wrap only the sensitive region, not your whole layout:

        <x-screenshot-guard :user="auth()->user()">
            ... sensitive document / data table ...
        </x-screenshot-guard>

    Register it (Laravel 11/12 auto-discovers components in
    resources/views/components, so no manual registration needed if the
    file lives there).
--}}

@props(['user' => null])

@php
    $watermarkId = $user
        ? ($user->email ?? $user->id ?? 'user')
        : 'guest';
    $sessionTag = substr(sha1(session()->getId()), 0, 8);
    $stamp = now()->format('Y-m-d H:i');
    $watermarkText = "{$watermarkId} · {$sessionTag} · {$stamp}";
@endphp

<div
    x-data="screenshotGuard()"
    x-init="init()"
    :class="{ 'ssg-blurred': isBlurred }"
    class="ssg-wrapper relative"
    oncontextmenu="return false"
    style="user-select:none;-webkit-user-select:none;"
>
    {{-- Tiled watermark overlay --}}
    <div
        class="ssg-watermark pointer-events-none absolute inset-0 z-50 overflow-hidden select-none"
        aria-hidden="true"
    >
        <div class="ssg-watermark-grid">
            @for ($i = 0; $i < 40; $i++)
                <span class="ssg-watermark-item">{{ $watermarkText }}</span>
            @endfor
        </div>
    </div>

    {{-- "Content hidden" cover shown while window is unfocused --}}
    <div
        x-show="isBlurred"
        x-cloak
        class="ssg-cover absolute inset-0 z-40 flex items-center justify-center text-sm text-gray-600 bg-white/90 dark:bg-black/90 dark:text-gray-300"
    >
        Content hidden while window is inactive
    </div>

    {{-- Actual protected content --}}
    <div class="ssg-content">
        <h1>screenshot</h1>
    </div>
</div>

<style>
    .ssg-wrapper { isolation: isolate; }

    .ssg-watermark-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 4rem 2rem;
        transform: rotate(-30deg) scale(1.4);
        width: 140%;
        height: 140%;
        margin-left: -20%;
        margin-top: -20%;
    }
    .ssg-watermark-item {
        font-size: 0.7rem;
        color: rgba(0, 0, 0, 0.06);
        white-space: nowrap;
        font-family: ui-monospace, monospace;
    }
    @media (prefers-color-scheme: dark) {
        .ssg-watermark-item { color: rgba(255, 255, 255, 0.07); }
    }

    .ssg-blurred .ssg-content {
        filter: blur(12px);
        transition: filter 0.15s ease;
    }
    .ssg-content { transition: filter 0.15s ease; }

    [x-cloak] { display: none !important; }
</style>

<script>
    // Requires Alpine.js (ships with Laravel Breeze/Jetstream by default).
    // If you're not using Alpine, tell me and I'll give you a vanilla-JS version.
    function screenshotGuard() {
        return {
            isBlurred: false,
            init() {
                window.addEventListener('blur', () => { this.isBlurred = true; });
                window.addEventListener('focus', () => { this.isBlurred = false; });
                document.addEventListener('visibilitychange', () => {
                    this.isBlurred = document.hidden;
                });

                this.$el.addEventListener('keydown', (e) => {
                    const k = e.key;
                    const blocked =
                        k === 'PrintScreen' ||
                        (e.ctrlKey && ['p', 's', 'u', 'c'].includes(k.toLowerCase())) ||
                        (e.metaKey && ['p', 's'].includes(k.toLowerCase())) ||
                        (e.key === 'F12') ||
                        (e.ctrlKey && e.shiftKey && ['i', 'j', 'c'].includes(k.toLowerCase()));
                    if (blocked) {
                        e.preventDefault();
                        e.stopPropagation();
                    }
                });

                document.addEventListener('copy', (e) => {
                    if (this.$el.contains(e.target)) e.preventDefault();
                });
            },
        };
    }
</script>