<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('designation')->insert([
            ['name' => 'Marketing Manager', 'created_at' => Carbon::now()],
            ['name' => 'Mobile Apllication Dev', 'created_at' => Carbon::now()],
            ['name' => 'Designer', 'created_at' => Carbon::now()],
        ]);
    }
}
