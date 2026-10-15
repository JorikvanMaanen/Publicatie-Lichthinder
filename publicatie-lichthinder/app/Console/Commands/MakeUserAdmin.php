<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class MakeUserAdmin extends Command
{
    protected $signature = 'users:make-admin {email : The email address of the user to promote}';

    protected $description = 'Promote an existing user to administrator';

    public function handle(): int
    {
        $user = User::query()->where('email', $this->argument('email'))->first();

        if (! $user) {
            $this->error(__('Geen gebruiker gevonden met dit e-mailadres.'));

            return self::FAILURE;
        }

        $user->forceFill(['role' => User::ROLE_ADMIN])->save();

        $this->info(__(':name is nu beheerder.', ['name' => $user->name]));

        return self::SUCCESS;
    }
}
