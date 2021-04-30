<?php

namespace Database\Seeders;

use App\Models\SgeType;
use Illuminate\Database\Seeder;

class SgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SgeType::create([
            'sgetype' => 'International OJT',
            'description' => 'On-the-job Training with International Company'
        ]);

        SgeType::create([
            'sgetype' => 'Student Exchange Program',
            'description' => 'Opportunity to study abroad with partnered International Schools'
        ]);

        SgeType::create([
            'sgetype' => 'International Plant Visit',
            'description' => 'Internatinal Plant Visitation'
        ]);

        SgeType::create([
            'sgetype' => 'International Summer School/Camp',
            'description' => 'International Summer schooling'
        ]);

        SgeType::create([
            'sgetype' => 'Dual Degree Program',
            'description' => 'Two degree programs'
        ]);
    }
}
