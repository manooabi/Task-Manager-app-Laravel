<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PrioritiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         DB::table('priorities')->insert([
            [
                'priority_name' => 'Low',
            ],
            [
                'priority_name' => 'Medium',
            ],
            [
                'priority_name' => 'High',
            ],
        ]);
    }
}
