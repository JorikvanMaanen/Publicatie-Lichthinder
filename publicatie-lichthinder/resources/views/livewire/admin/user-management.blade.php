<div class="mx-auto w-full max-w-6xl p-4 sm:p-6">
    <div class="mb-6">
        <flux:heading size="xl">{{ __('Gebruikersbeheer') }}</flux:heading>
        <flux:subheading>{{ __('Bekijk gebruikers en wijzig hun rol.') }}</flux:subheading>
    </div>

    <div class="overflow-hidden rounded-xl border border-zinc-200 bg-white shadow-sm dark:border-zinc-700 dark:bg-zinc-900">
        <div class="overflow-x-auto">
            <table class="min-w-[900px] w-full text-left text-sm">
                <thead class="bg-zinc-50 text-zinc-600 dark:bg-zinc-800 dark:text-zinc-300">
                    <tr>
                        <th scope="col" class="whitespace-nowrap px-4 py-3 font-medium">{{ __('Naam') }}</th>
                        <th scope="col" class="whitespace-nowrap px-4 py-3 font-medium">{{ __('E-mailadres') }}</th>
                        <th scope="col" class="whitespace-nowrap px-4 py-3 font-medium">{{ __('Rol') }}</th>
                        <th scope="col" class="whitespace-nowrap px-4 py-3 font-medium">{{ __('Goedkeuring') }}</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-zinc-200 dark:divide-zinc-800">
                    @foreach ($users as $user)
                        <tr
                            wire:key="user-{{ $user->id }}"
                            class="transition-colors hover:bg-zinc-50/70 dark:hover:bg-zinc-800/50"
                        >
                            <td class="whitespace-nowrap px-4 py-2 font-medium text-zinc-900 dark:text-zinc-100">
                                {{ $user->name }}
                            </td>

                            <td class="whitespace-nowrap px-4 py-2 text-zinc-600 dark:text-zinc-400">
                                {{ $user->email }}
                            </td>

                            <td class="px-4 py-2">
                                <select
                                    wire:model="roles.{{ $user->id }}"
                                    wire:change="requestRoleChange({{ $user->id }}, $event.target.value)"
                                    aria-label="{{ __('Rol voor :name', ['name' => $user->name]) }}"
                                    class="w-36 rounded-lg border-zinc-300 bg-white px-3 py-2 text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:border-zinc-600 dark:bg-zinc-800"
                                >
                                    <option value="user">{{ __('Gebruiker') }}</option>
                                    <option value="admin">{{ __('Beheerder') }}</option>
                                </select>

                                @error("roles.{$user->id}")
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </td>

                            <td class="px-4 py-2">
                                <select
                                    wire:model="approvals.{{ $user->id }}"
                                    wire:change="requestApprovalChange({{ $user->id }}, $event.target.value)"
                                    aria-label="{{ __('Goedkeuringsstatus voor :name', ['name' => $user->name]) }}"
                                    class="w-40 rounded-lg border-zinc-300 bg-white px-3 py-2 text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:border-zinc-600 dark:bg-zinc-800"
                                >
                                    <option value="approved">{{ __('Goedgekeurd') }}</option>
                                    <option value="pending">{{ __('In afwachting') }}</option>
                                    <option value="rejected">{{ __('Afgekeurd') }}</option>
                                </select>

                                @error("approval.{$user->id}")
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <flux:modal
        name="confirm-approval-change"
        class="space-y-6"
        wire:close="cancelApprovalChange"
    >
        <div class="space-y-2">
            <flux:heading size="lg">
                {{ __('Goedkeuring wijzigen') }}
            </flux:heading>

            @if ($pendingApprovalUser && $pendingApproval)
                <flux:text>
                    {{ __('Je staat op het punt de goedkeuringsstatus van :name te wijzigen naar :status.', [
                        'name' => $pendingApprovalUser->name,
                        'status' => match ($pendingApproval) {
                            'approved' => __('Goedgekeurd'),
                            'rejected' => __('Afgekeurd'),
                            default => __('In afwachting'),
                        },
                    ]) }}
                </flux:text>

                <flux:text>
                    {{ match ($pendingApproval) {
                        'approved' => __('Deze gebruiker krijgt toegang tot de applicatie.'),
                        'rejected' => __('Deze gebruiker wordt afgekeurd en krijgt geen toegang tot de applicatie.'),
                        default => __('Deze gebruiker blijft wachten op goedkeuring en heeft geen toegang tot de applicatie.'),
                    } }}
                </flux:text>
            @endif

            @if ($pendingApprovalUserId)
                @error("approval.{$pendingApprovalUserId}")
                    <p class="text-sm text-red-600 dark:text-red-400">
                        {{ $message }}
                    </p>
                @enderror
            @endif
        </div>

        <div class="flex justify-end gap-2">
            <flux:modal.close>
                <flux:button variant="ghost" wire:click="cancelApprovalChange">
                    {{ __('Annuleren') }}
                </flux:button>
            </flux:modal.close>

            <flux:button variant="primary" wire:click="confirmApprovalChange">
                {{ __('Goedkeuring wijzigen') }}
            </flux:button>
        </div>
    </flux:modal>

    <flux:modal
        name="confirm-role-change"
        class="space-y-6"
        wire:close="cancelRoleChange"
    >
        <div class="space-y-2">
            <flux:heading size="lg">
                {{ __('Rolwijziging bevestigen') }}
            </flux:heading>

            @if ($pendingRoleUser && $pendingRole)
                <flux:text>
                    {{ __('Je staat op het punt de rol van :name te wijzigen naar :role.', [
                        'name' => $pendingRoleUser->name,
                        'role' => $pendingRole === 'admin' ? __('Beheerder') : __('Gebruiker'),
                    ]) }}
                </flux:text>

                <flux:text>
                    {{ $pendingRole === 'admin'
                        ? __('Een beheerdersrol geeft toegang tot gebruikersbeheer en gevoelige instellingen.')
                        : __('Deze wijziging trekt de beheerdersrechten van deze gebruiker in.') }}
                </flux:text>
            @endif

            @if ($pendingRoleUserId)
                @error("roles.{$pendingRoleUserId}")
                    <p class="text-sm text-red-600 dark:text-red-400">
                        {{ $message }}
                    </p>
                @enderror
            @endif
        </div>

        <div class="flex justify-end gap-2">
            <flux:modal.close>
                <flux:button variant="ghost" wire:click="cancelRoleChange">
                    {{ __('Annuleren') }}
                </flux:button>
            </flux:modal.close>

            <flux:button variant="primary" wire:click="confirmRoleChange">
                {{ __('Rol wijzigen') }}
            </flux:button>
        </div>
    </flux:modal>

    <div class="mt-5">
        {{ $users->links() }}
    </div>
</div>