<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    //    \App\Models\User::factory(10)->create();
    User::create([
        'email' => 'marpaung@gmail.com',
        'namagereja' =>'HKBP Hutatinggi',
        'pendeta' => 'Pdt.Marpaung',
        'alamatgereja' =>'Tarutung Ujung',
        'username' => 'marpaung',
        'password'=>bcrypt('12345'),
    ]);
    }
}