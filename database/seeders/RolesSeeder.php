<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RolesSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        /* @var Role $roleManager */
        $roleManager = Role::query()->updateOrCreate(['name' => 'manager']);
        $roleManager->givePermissionTo(Permission::all());

        /* @var Role $roleEmitter */
        $roleEmitter = Role::query()->updateOrCreate(['name' => 'emitter']);
        $roleEmitter->givePermissionTo(['publish articles', 'unpublish articles']);
    }
}
