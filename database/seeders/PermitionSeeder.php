<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermitionSeeder extends Seeder
{
    public function run(): void
    {
        $controllers = ['Project', 'Task'];

        foreach ($controllers as $controller) {
            $this->createPermissionsForController($controller);
        }
    }

    private function createPermissionsForController($controller)
    {
        $actions = ['index', 'show', 'create', 'store', 'edit', 'update', 'destroy'];

        foreach ($actions as $action) {
            $permissionName = $action . '-' . $controller . 'Controller';
            Permission::create(['name' => $permissionName, 'guard_name' => 'web']);
        }
    }
}