<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductItemSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $now = date('Y-m-d H:i:s');
    DB::table('product_items')->insert([
      [
        'id_product' => 1,
        'description' => 'Plano X para sell',
        'created_at' => $now,
        'updated_at' => $now,
      ],
      [
        'id_product' => 1,
        'description' => 'Plano X para sell',
        'created_at' => $now,
        'updated_at' => $now,
      ],
      [
        'id_product' => 1,
        'description' => 'Plano X para sell',
        'created_at' => $now,
        'updated_at' => $now,
      ],

      [
        'id_product' => 2,
        'description' => 'Plano X para sell',
        'created_at' => $now,
        'updated_at' => $now,
      ],
      [
        'id_product' => 2,
        'description' => 'Plano X para sell',
        'created_at' => $now,
        'updated_at' => $now,
      ],
      [
        'id_product' => 3,
        'description' => 'Plano X para sell',
        'created_at' => $now,
        'updated_at' => $now,
      ],
      [
        'id_product' => 3,
        'description' => 'Plano X para sell',
        'created_at' => $now,
        'updated_at' => $now,
      ],
      [
        'id_product' => 3,
        'description' => 'Plano X para sell',
        'created_at' => $now,
        'updated_at' => $now,
      ],
    ]);
  }
}
