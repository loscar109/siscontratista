<?php

use Illuminate\Database\Seeder;
use siscontratista\User;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'  =>  "Carlos Lisandro",
            'email' =>  "charly_groso_64@mail.com",
            'password' =>  bcrypt('charly123456'),
        ]);

 

        Role::create([
            'name'      =>  'Admin',
            'slug'      =>  'admin',
            'special'   =>  'all-access'
        ]);


    }
}
