<?php

namespace Database\Seeders;

use App\Models\ModelHasPermission;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class ModelHasPermissionsSeeder extends Seeder
{
    public function run()
    {
//        ModelHasPermission::query()->updateOrCreate([
//            'permission_id' => 1,
//            'model_type' => User::class,
//            'model_id' => 1,
//        ]);
    }
}
