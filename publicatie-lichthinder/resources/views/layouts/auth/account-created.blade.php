

<x-layouts::auth :title="session('account_status') === 'rejected' ? __('Account afgekeurd') : __('Account aangemaakt')">
    <div class="flex flex-col gap-6">
        <div class="flex flex-col text-center">
            <flux:heading size="xl" level="1">
                {{ session('account_status') === 'rejected' ? __('Account afgekeurd') : __('Account aangemaakt') }}
            </flux:heading>
        </div>

        <div class="rounded-lg border border-zinc-200 p-4 text-sm">
            @if (session('account_status') === 'rejected')
                <p class="font-medium text-zinc-900">
                    {{ __('Je account is afgekeurd en je hebt geen toegang tot de applicatie.') }}
                </p>
                <p class="mt-2 text-zinc-600">
                    {{ __('Neem contact op met een beheerder als je vragen hebt.') }}
                </p>
            @else
                <p class="font-medium text-zinc-900">
                    {{ __('Je account is aangemaakt en wacht op goedkeuring.') }}
                </p>
                <p class="mt-2 text-zinc-600">
                    {{ __('Een beheerder moet je account eerst goedkeuren. Je ontvangt een e-mail zodra je account is goedgekeurd.') }}
                </p>
            @endif
        </div>

        <flux:button :href="route('login')" variant="primary" class="w-full" wire:navigate>
            Naar inloggen
        </flux:button>
    </div>
</x-layouts::auth>