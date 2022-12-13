<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('usuarios')->insert([
            'name' => 'a',
            'username' => 'a',
            'email' => Str::random(10) . '@gmail.com',
            'password' => Hash::make('123'),
            'dtnasc' => Carbon::now(),
        ]);

        DB::table('usuarios')->insert([
            'name' => 'claudia',
            'username' => 'kaya',
            'email' => 'kayacordova@gmail.com',
            'password' => Hash::make('admin'),
            'dtnasc' => Carbon::now(),
            'admin' => 1
        ]);
    }
}
