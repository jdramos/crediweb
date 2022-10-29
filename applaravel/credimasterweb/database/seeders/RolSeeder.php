<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::create(['name' =>'Admin']);
        $roleSoporte = Role::create(['name' =>'Soporte']);
        $roleGerenteGral = Role::create(['name' =>'GerenteGeneral']);
        $roleGerenteSuc = Role::create(['name' =>'GerenteSucursal']);
        $roleSupervisor = Role::create(['name' =>'Supervisor']);
        $roleCartera = Role::create(['name' =>'Cartera']);

        Permission::create(['name'=> 'clientes.index',
                            'description' => 'Ver clientes'])->syncRoles([$roleAdmin, $roleSoporte, $roleGerenteGral, $roleGerenteSuc, $roleCartera]);
        Permission::create(['name'=> 'clientes.agregar',
                            'description' => 'Agregar clientes'])->syncRoles([$roleAdmin, $roleCartera]);
        Permission::create(['name'=> 'clientes.editar',
                            'description' => 'Editar clientes'])->syncRoles([$roleAdmin, $roleCartera]);
        
        
    }
}

                    