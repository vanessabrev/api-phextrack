<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoMainSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // title, subtitle, image
    $now = date('Y-m-d H:i:s');
    DB::table('info_mains')->insert([
      [
        'title' => 'Titulo principal da Home',
        'subtitle' => 'Subititle principal da home com descrição do site.',
        'image' => 'https://josiel27.github.io/phex-dev/assets/img/background/background-home.jpg',
        'created_at' => $now,
        'updated_at' => $now,
      ],
    ]);
  }
}
