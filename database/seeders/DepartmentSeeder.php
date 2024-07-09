<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('department')->insert([
            ['name' => 'Sale And Marketing', 'created_at' => Carbon::now()],
            ['name' => 'Application Development', 'created_at' => Carbon::now()],
            ['name' => 'Finance', 'created_at' => Carbon::now()],
        ]);
    }
}
