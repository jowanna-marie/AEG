<?php

namespace Database\Seeders;

use App\Models\Role;
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
            'name' => 'Admin'
        ]);
        Role::create([
            'name' => 'Dean'
        ]);
        Role::create([
            'name' => 'ILRAD Director'
        ]);
        Role::create([
            'name' => 'ICEP Staff'
        ]);
    }
}
