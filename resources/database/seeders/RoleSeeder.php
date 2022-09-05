<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'admin',
                'redirect_to' => '/admin'
            ],
            [
                'name' => 'user',
                'redirect_to' => '/home'
            ],
            [
                'name' => 'pegawai',
                'redirect_to' => '/admin'
            ]

        ];

        foreach($roles as $role){
            Role::create($role);
        }
    }
}
