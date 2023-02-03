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
        $userManager = User::query()->updateOrCreate([
            'name' => fake()->name,
            'email' => fake()->email,
            'password' => fake()->password(),
        ]);
        $userManager->assignRole('manager');

        /** @var User $userEmitter */
        $userEmitter = User::query()->updateOrCreate([
            'name' => fake()->name,
            'email' => fake()->email,
            'password' => fake()->password(),
        ]);
        $userEmitter->assignRole('emitter');
    }
}
