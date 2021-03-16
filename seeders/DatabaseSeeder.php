<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'name' =>'Leonardo Wijaya',
            'email' => 'leonardo.wijaya003@binus.ac.id',
            'password' => Hash::make('123456'),
        ]);
    }
}
