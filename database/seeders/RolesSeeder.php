<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'Super Admin']);
        Role::create(['name' => 'Propietario']);
        Role::create(['name' => 'Cliente']);
        Role::create(['name' => 'Inquilino Cliente']);

        // Asignar permisos al rol de Super Admin
        $admin->givePermissionTo(Permission::all());

        $user = User::find(1);
        $user->assignRole([$admin]);
        $user->givePermissionTo(Permission::all());
    }
}
