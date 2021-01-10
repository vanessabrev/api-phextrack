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
    DB::table('menus')->insert([
      [
        'name' => 'Home',
        'position' => 0,
        'reference' => '#home',
      ],
      [
        'name' => 'Sobre nós',
        'position' => 1,
        'reference' => '#about',
      ],
      [
        'name' => 'Serviços',
        'position' => 2,
        'reference' => '#services',
      ],
      [
        'name' => 'Porfólio',
        'position' => 3,
        'reference' => '#portfolio',
      ],
      [
        'name' => 'Contato',
        'position' => 4,
        'reference' => '#contact',
      ],
    ]);
  }
}
