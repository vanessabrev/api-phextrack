<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutItemSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $now = date('Y-m-d H:i:s');
    DB::table('about_items')->insert([
      [
        'title' => 'Titulo do About Us',
        'text' => 'Texto do about Texto do about  Texto do about  Texto do about  ',
        'icon' => 'arrow_up',
        'created_at' => $now,
        'updated_at' => $now,
      ],
      [
        'title' => 'Titulo do About Us',
        'text' => 'Texto do about Texto do about  Texto do about  Texto do about  ',
        'icon' => 'arrow_bottom',
        'created_at' => $now,
        'updated_at' => $now,
      ],
      [
        'title' => 'Titulo do About Us',
        'text' => 'Texto do about Texto do about  Texto do about  Texto do about  ',
        'icon' => 'arrow_left',
        'created_at' => $now,
        'updated_at' => $now,
      ]
    ]);
    // title
    // text
    // icon
  }
}
