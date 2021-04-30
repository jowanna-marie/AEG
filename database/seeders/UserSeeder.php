<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Super Admin, DEAN, ICEP Director, ILRAD(?) Director
        //Admins
        User::create([
            'role_id' => 2,
            'department_id' => 7,
            'name' => 'DEAN',
            'email' => 'dean@mapua.edu.ph',
            'password' => Hash::make('#mapua2021')
        ]);

        User::create([
            'role_id' => 2,
            'department_id' => 7,
            'name' => 'ILRAD Director',
            'email' => 'idirector@mapua.edu.ph',
            'password' => Hash::make('#mapua2021')
        ]);
    }
}
