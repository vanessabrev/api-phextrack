<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $now = date('Y-m-d H:i:s');
    DB::table('users')->insert([
      [
        'name' => 'Josiel Faria',
        'email' => 'developerjosiel@gmail.com',
        'email_verified_at' => $now,
        'password' => '$2y$10$sdyi9WPf1UNbFrGoGcpW.uL.ua5sDrWOF2YQLpqbip1i5iKUsghky',
        'remember_token' =>  Str::random(10),
        'created_at' => $now,
        'updated_at' => $now,
      ],
      [
        'name' => 'Teste Teste',
        'email' => 'teste@teste.com',
        'email_verified_at' => $now,
        'password' => '$2y$10$sdyi9WPf1UNbFrGoGcpW.uL.ua5sDrWOF2YQLpqbip1i5iKUsghky',
        'remember_token' => Str::random(10),
        'created_at' => $now,
        'updated_at' => $now,
      ],
    ]);
  }
}
