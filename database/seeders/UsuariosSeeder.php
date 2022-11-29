<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'name' => 'a',
            'username' => 'a',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'dtnasc' => Carbon::now(),
        ]);

        DB::table('usuarios')->insert([
            'name' => 'claudia',
            'username' => 'kaya',
            'email' => 'kayacordova@gmail.com',
            'password' => Hash::make('admin'),
            'dtnasc' => Carbon::now(),
        ]);
    }
}
