<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenusTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $now = date('Y-m-d H:i:s');
    DB::table('menus')->insert([
      [
        'name' => 'Home',
        'position' => 0,
        'reference' => '#home',
        'created_at' => $now,
        'updated_at' => $now,
      ],
      [
        'name' => 'Sobre nós',
        'position' => 1,
        'reference' => '#aboutUs',
        'created_at' => $now,
        'updated_at' => $now,
      ],
      [
        'name' => 'Serviços',
        'position' => 2,
        'reference' => '#products',
        'created_at' => $now,
        'updated_at' => $now,
      ],
      [
        'name' => 'Porfólio',
        'position' => 3,
        'reference' => '#portfolio',
        'created_at' => $now,
        'updated_at' => $now,
      ],
      [
        'name' => 'Contato',
        'position' => 4,
        'reference' => '#contacts',
        'created_at' => $now,
        'updated_at' => $now,
      ],
    ]);
  }
}
