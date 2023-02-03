<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::query()->updateOrCreate(['name' => 'edit articles']);
        Permission::query()->updateOrCreate(['name' => 'delete articles']);
        Permission::query()->updateOrCreate(['name' => 'publish articles']);
        Permission::query()->updateOrCreate(['name' => 'unpublish articles']);
    }
}
