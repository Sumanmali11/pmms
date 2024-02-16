<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '1111111111',
            'verified' => 1,
            'password' => bcrypt('Nepal@123'),
            'role_id' => Role::where('name', 'Admin')->first()->id
        ]);
    }
}
