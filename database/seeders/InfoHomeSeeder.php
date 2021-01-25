<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoHomeSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $now = date('Y-m-d H:i:s');
    DB::table('info_homes')->insert([
      [
        'title' => 'Titulo Principal DB 1',
        'text' => 'Text DB 1 testando texto.',
        'icon' => '',
        'created_at' => $now,
        'updated_at' => $now,
      ],
      [
        'title' => 'Missão',
        'text' => 'Missão DB 1 testando texto.',
        'icon' => 'tasks',
        'created_at' => $now,
        'updated_at' => $now,
      ],
      [
        'title' => 'Visão',
        'text' => 'Visão DB 1 testando texto.',
        'icon' => 'chart-line',
        'created_at' => $now,
        'updated_at' => $now,
      ],
      [
        'title' => 'Valores',
        'text' => 'Valores DB 1 testando texto.',
        'icon' => 'heart',
        'created_at' => $now,
        'updated_at' => $now,
      ]
    ]);
  }
}
