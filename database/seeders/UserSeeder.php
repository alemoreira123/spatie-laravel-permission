<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var User $userManager */
        $userManager = app(User::class);
        $userManager = $userManager->factory()->create();
        $userManager->assignRole('manager');

        /** @var User $userEmitter */
        $userEmitter = app(User::class);
        $userEmitter = $userEmitter->factory()->create();
        $userEmitter->assignRole('emitter');
    }
}
