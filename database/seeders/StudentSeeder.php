<?php

namespace Database\Seeders;

use App\Models\StudentProfile;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudentProfile::create([
            'lastname' => 'Labayan',
            'firstname' => 'Albert John',
            'middlename' => 'Baysic',
            'program' => 'BSIT',
            'studentnumber' => '2018140511',
            'email' => 'ajblabayan@mymail.mapua.edu.ph',
            'yearlevel' => '3rd Year',
            'batch' => '2018',
            'contact' => '09776703164'
        ]);

        StudentProfile::create([
            'lastname' => 'Ordinario',
            'firstname' => 'Joanna Marie',
            'middlename' => 'De Vera',
            'gender' => 'female',
            'program' => 'BSIT',
            'studentnumber' => '2018115410',
            'email' => 'jmdordinario@mymail.mapua.edu.ph',
            'yearlevel' => '3rd Year',
            'batch' => '2018',
            'contact' => '09279731028'
        ]);

        StudentProfile::create([
            'lastname' => 'Ramos',
            'firstname' => 'Yvonne Erika',
            'middlename' => 'R',
            'gender' => 'female',
            'program' => 'BSIT',
            'studentnumber' => '2018123456',
            'email' => 'yerramos@mymail.mapua.edu.ph',
            'yearlevel' => '3rd Year',
            'batch' => '2018'
        ]);
    }
}
