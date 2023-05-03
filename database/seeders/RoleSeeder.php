<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'administrador']);
        $role2 = Role::create(['name' => 'user_interno']);
        $role3 = Role::create(['name' => 'user_externo']);

        $permission1 = Permission::create(['name' => 'admin.home'])->assignRole($role1);
        

        $permission2 = Permission::create(['name' => 'admin.documentos.index'])->assignRole($role1);
        $permission3 = Permission::create(['name' => 'admin.documentos.create'])->assignRole($role1);
        $permission34 = Permission::create(['name' => 'admin.documentos.store'])->assignRole($role1);
        $permission4 = Permission::create(['name' => 'admin.documentos.edit'])->assignRole($role1);
        $permission5 = Permission::create(['name' => 'admin.documentos.destroy'])->assignRole($role1);

        $permission6 = Permission::create(['name' => 'admin.archivosmedia.index'])->assignRole($role1);
        $permission7 = Permission::create(['name' => 'admin.archivosmedia.create'])->assignRole($role1);
        $permission32 = Permission::create(['name' => 'admin.archivosmedia.store'])->assignRole($role1);
        $permission8 = Permission::create(['name' => 'admin.archivosmedia.edit'])->assignRole($role1);
        $permission9 = Permission::create(['name' => 'admin.archivosmedia.destroy'])->assignRole($role1);

        $permission10 = Permission::create(['name' => 'admin.capacitaciones.index'])->assignRole($role1);
        $permission11 = Permission::create(['name' => 'admin.capacitaciones.create'])->assignRole($role1);
        $permission35 = Permission::create(['name' => 'admin.capacitaciones.store'])->assignRole($role1);
        $permission12 = Permission::create(['name' => 'admin.capacitaciones.edit'])->assignRole($role1);
        $permission13 = Permission::create(['name' => 'admin.capacitaciones.destroy'])->assignRole($role1);

        $permission14 = Permission::create(['name' => 'admin.imagenes.index'])->assignRole($role1);
        $permission15 = Permission::create(['name' => 'admin.imagenes.create'])->assignRole($role1);
        $permission33 = Permission::create(['name' => 'admin.imagenes.store'])->assignRole($role1);
        $permission16 = Permission::create(['name' => 'admin.imagenes.edit'])->assignRole($role1);
        $permission17 = Permission::create(['name' => 'admin.imagenes.destroy'])->assignRole($role1);

        $permission18 = Permission::create(['name' => 'admin.users.index'])->assignRole($role1);
        $permission19 = Permission::create(['name' => 'admin.users.create'])->assignRole($role1);
        $permission36 = Permission::create(['name' => 'admin.users.store'])->assignRole($role1);
        $permission20 = Permission::create(['name' => 'admin.users.edit'])->assignRole($role1);
        $permission21 = Permission::create(['name' => 'admin.users.destroy'])->assignRole($role1);

        $permission22 = Permission::create(['name' => 'admin.experiencias.index'])->assignRole($role1);
        $permission23 = Permission::create(['name' => 'admin.experiencias.create'])->assignRole($role1);
        $permission37 = Permission::create(['name' => 'admin.experiencias.store'])->assignRole($role1);
        $permission24 = Permission::create(['name' => 'admin.experiencias.edit'])->assignRole($role1);
        $permission25 = Permission::create(['name' => 'admin.experiencias.destroy'])->assignRole($role1);

        $permission26 = Permission::create(['name' => 'admin.clientes.index'])->assignRole($role1);
        $permission27 = Permission::create(['name' => 'admin.clientes.create'])->assignRole($role1);
        $permission38 = Permission::create(['name' => 'admin.clientes.store'])->assignRole($role1);
        $permission28 = Permission::create(['name' => 'admin.clientes.edit'])->assignRole($role1);
        $permission29 = Permission::create(['name' => 'admin.clientes.destroy'])->assignRole($role1);

        /*$permission39 = Permission::create(['name' => 'admin.users.index'])->assignRole($role1);
        $permission40 = Permission::create(['name' => 'admin.users.create'])->assignRole($role1);
        $permission41 = Permission::create(['name' => 'admin.users.store'])->assignRole($role1);
        $permission42 = Permission::create(['name' => 'admin.users.edit'])->assignRole($role1);
        $permission43 = Permission::create(['name' => 'admin.users.destroy'])->assignRole($role1);*/

        $permission30 = Permission::create(['name' => 'documentos'])->syncRoles([$role1,$role2,$role3]);
        $permission31 = Permission::create(['name' => 'cambio_contraseña'])->syncRoles([$role1,$role2,$role3]);
    }
}
