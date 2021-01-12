<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $image_base64 = "https://miro.medium.com/max/1838/1*mk1-6aYaf_Bes1E3Imhc0A.jpeg";
    $now = date('Y-m-d H:i:s');
    DB::table('products')->insert([
      [
        'name' => 'Plano X',
        'description' => 'Plano X para sell',
        'price' => 19.90,
        'image' => $image_base64,
        'expiration_date' => Carbon::now(),
        'created_at' => $now,
        'updated_at' => $now,
      ],
      [
        'name' => 'Plano Y',
        'description' => 'Plano Y para sell',
        'price' => 29.90,
        'image' => $image_base64,
        'expiration_date' => Carbon::now(),
        'created_at' => $now,
        'updated_at' => $now,
      ],
      [
        'name' => 'Plano Z',
        'description' => 'Plano Z para sell',
        'price' => 500,
        'image' => $image_base64,
        'expiration_date' => Carbon::now(),
        'created_at' => $now,
        'updated_at' => $now,
      ],
    ]);
  }
}
