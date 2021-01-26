<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $now = date('Y-m-d H:i:s');
    DB::table('abouts')->insert([
      [
        'title' => 'Titulo do About Us',
        'text' => 'Texto do about Texto do about  Texto do about  Texto do about  ',
        'created_at' => $now,
        'updated_at' => $now,
      ]
    ]);

    // title
    // text
  }
}
