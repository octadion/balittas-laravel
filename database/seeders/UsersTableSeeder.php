<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $adminUser = [
            'name' => 'Admin',
            'email' => 'admin@app.com',
            'password' => bcrypt('admin'),
        ];

        if(!User::where('email', $adminUser['email'])->exists()){
            User::create($adminUser);
        }
    }
}
