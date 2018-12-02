<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Users (index, show, edit, destroy, create)
            'slug'  =>  es el campo mas importante porque defino
                        los permisos sobre una ruta (no sobre un modulo)
        */
        Permission::create([
            'name'          =>  'Navegar usuarios',
            'slug'          =>  'users.index',
            'description'   =>  'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
            'name'          =>  'Ver detalle de usuario',
            'slug'          =>  'users.show',
            'description'   =>  'Ver en detalle cada usuario del sistema',
        ]);

        Permission::create([
            'name'          =>  'Edición de usuarios',
            'slug'          =>  'users.edit',
            'description'   =>  'Editar cualquier dato de un usuario del sistema',
        ]);

        Permission::create([
            'name'          =>  'Eliminar usuario',
            'slug'          =>  'users.destroy',
            'description'   =>  'Eliminar cualquier usuario del sistema',
        ]);

        Permission::create([
            'name'          =>  'Creacion de usuarios',
            'slug'          =>  'users.create',
            'description'   =>  'Crear un determinado usuario',
        ]);

        //Roles (index, show, edit, destroy, create)
        Permission::create([
            'name'          =>  'Navegar roles',
            'slug'          =>  'roles.index',
            'description'   =>  'Lista y navega todos los roles del sistema',
        ]);

        Permission::create([
            'name'          =>  'Ver detalle de rol',
            'slug'          =>  'roles.show',
            'description'   =>  'Ver en detalle cada rol del sistema',
        ]);

        Permission::create([
            'name'          =>  'Edición de roles',
            'slug'          =>  'roles.edit',
            'description'   =>  'Editar cualquier dato de un rol del sistema',
        ]);

        Permission::create([
            'name'          =>  'Eliminar rol',
            'slug'          =>  'roles.destroy',
            'description'   =>  'Eliminar cualquier rol del sistema',
        ]);

        Permission::create([
            'name'          =>  'Creacion de roles',
            'slug'          =>  'roles.create',
            'description'   =>  'Crear un determinado role',
        ]);

        //Pais (index, edit, destroy, create)
        Permission::create([
            'name'          =>  'Navegar paises',
            'slug'          =>  'configuracion.pais.index',
            'description'   =>  'Lista y navega todos los paises del sistema',
        ]);


        Permission::create([
            'name'          =>  'Edición de paises',
            'slug'          =>  'configuracion.pais.edit',
            'description'   =>  'Editar cualquier dato de un pais del sistema',
        ]);

        Permission::create([
            'name'          =>  'Eliminar pais',
            'slug'          =>  'configuracion.pais.destroy',
            'description'   =>  'Eliminar cualquier rol del sistema',
        ]);

        Permission::create([
            'name'          =>  'Creacion de pais',
            'slug'          =>  'configuracion.pais.create',
            'description'   =>  'Crear un determinado pais',
        ]);
        
    }
}
