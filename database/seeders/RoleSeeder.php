<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            "name" => "Admin"
        ]);
        Role::create([
            "name" => "User"
        ]);
        Role::create([
            "name" => "Player"
        ]);
        Role::create([
            "name" => "Coach"
        ]);
    }
}
