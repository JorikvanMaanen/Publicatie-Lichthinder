

<x-layouts::auth :title="__('Account aangemaakt')">
    <div class="flex flex-col gap-6">
        <div class="flex flex-col text-center">
            <flux:heading size="xl" level="1">Account aangemaakt</flux:heading>
        </div>

        <div class="rounded-lg border border-zinc-200 p-4 text-sm dark:border-zinc-700">
            <p class="font-medium text-zinc-900 dark:text-zinc-100">Je account is aangemaakt en wacht op goedkeuring.</p>
            <p class="mt-2 text-zinc-600 dark:text-zinc-400">
                Een beheerder moet je account eerst goedkeuren. Je ontvangt een e-mail zodra je account is goedgekeurd.
            </p>
        </div>

        <flux:button :href="route('login')" variant="primary" class="w-full" wire:navigate>
            Naar inloggen
        </flux:button>
    </div>
</x-layouts::auth>