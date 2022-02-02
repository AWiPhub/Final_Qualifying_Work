<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HelloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hellos')->insert([
            'image' => Str::random(10),
            'FIO' => Str::random(10),
            'position' => Str::random(10),
            'description' => Str::random(100),
            'videoURL' => Str::random(100)
        ]);
    }
}
