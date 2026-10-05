<div class="mx-auto w-full max-w-6xl p-6">
    <div class="mb-6">
        <flux:heading size="xl">{{ __('Gebruikersbeheer') }}</flux:heading>
        <flux:subheading>{{ __('Bekijk gebruikers en wijzig hun rol.') }}</flux:subheading>
    </div>

    <div class="overflow-x-auto rounded-xl border border-zinc-200 dark:border-zinc-700">
        <table class="w-full text-left text-sm">
            <thead class="bg-zinc-50 dark:bg-zinc-900">
                <tr>
                    <th scope="col" class="px-4 py-3 font-medium">{{ __('Naam') }}</th>
                    <th scope="col" class="px-4 py-3 font-medium">{{ __('E-mailadres') }}</th>
                    <th scope="col" class="px-4 py-3 font-medium">{{ __('Rol') }}</th>
                    <th scope="col" class="px-4 py-3 font-medium">{{ __('Actie') }}</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-zinc-200 dark:divide-zinc-700">
                @foreach ($users as $user)
                    <tr wire:key="user-{{ $user->id }}">
                        <td class="px-4 py-3">{{ $user->name }}</td>
                        <td class="px-4 py-3">{{ $user->email }}</td>
                        <td class="px-4 py-3">
                            <select
                                wire:model="roles.{{ $user->id }}"
                                aria-label="{{ __('Rol voor :name', ['name' => $user->name]) }}"
                                class="rounded-md border-zinc-300 bg-white text-sm dark:border-zinc-600 dark:bg-zinc-800"
                            >
                                <option value="user">{{ __('Gebruiker') }}</option>
                                <option value="admin">{{ __('Beheerder') }}</option>
                            </select>
                            @error("roles.{$user->id}")
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </td>
                        <td class="px-4 py-3">
                            <flux:button
                                size="sm"
                                variant="primary"
                                wire:click="updateRole({{ $user->id }})"
                            >
                                {{ __('Opslaan') }}
                            </flux:button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $users->links() }}
    </div>
</div>
