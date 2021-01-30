<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AndressSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // street, number, complement, postalCode, city, municipality, uf
    $now = date('Y-m-d H:i:s');
    DB::table('contacts')->insert([
      [

        'street' => 'rua cabral guimaraes',
        'number' => '52',
        'complement' => 'apt 204',
        'postalCode' => '7888885',
        'city' => 'aguas lindas',
        'municipality' => 'brasilia',
        'uf' => 'df',
        'created_at' => $now,
        'updated_at' => $now,
      ],
    ]);
  }
}
