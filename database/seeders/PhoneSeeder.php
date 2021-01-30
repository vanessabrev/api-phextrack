<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhoneSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $now = date('Y-m-d H:i:s');
    DB::table('phones')->insert([
      [
        'phone' => '1199998888',
        'created_at' => $now,
        'updated_at' => $now,
      ],
      [
        'phone' => '6599995858',
        'created_at' => $now,
        'updated_at' => $now,
      ],
    ]);
  }
}
