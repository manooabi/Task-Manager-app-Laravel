<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
          DB::table('statuses')->insert([
            [
                'status_name' => 'Pending',
            ],
            [
                'status_name' => 'In Progress',
            ],
            [
                'status_name' => 'Completed',
            ],
        ]);
    }
}
