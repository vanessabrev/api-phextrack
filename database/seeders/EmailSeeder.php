<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmailSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $now = date('Y-m-d H:i:s');
    DB::table('emails')->insert([
      [
        'email' => 'teste123@teste.com',
        'created_at' => $now,
        'updated_at' => $now,
      ],
      [
        'email' => 'tasder123@gmail.com',
        'created_at' => $now,
        'updated_at' => $now,
      ],
    ]);
  }
}
