<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert([
            ['name' => 'John Doe', 'fk_department' => 1, 'fk_designation' => 2, 'phone_number' => '1234567890', 'created_at' => Carbon::now()],
            ['name' => 'Tommy Mark', 'fk_department' => 2, 'fk_designation' => 1, 'phone_number' => '0987654321', 'created_at' => Carbon::now()],
            ['name' => 'Arjun', 'fk_department' => 1, 'fk_designation' => 2, 'phone_number' => '9809801476', 'created_at' => Carbon::now()],
            ['name' => 'Lizan', 'fk_department' => 2, 'fk_designation' => 1, 'phone_number' => '9809801445', 'created_at' => Carbon::now()],
        ]);
    }
}
