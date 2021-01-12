<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $now = date('Y-m-d H:i:s');
    DB::table('contacts')->insert([
      [
        'address' => 'rua alves<&>67<&>casa cinza<&>7184544<&>taguatinha<&>brasilia<&>df',
        'phones' => '119999888<&>6599995858',
        'emails' => 'teste@teste.com<&>ter123@gmail.com',
        'created_at' => $now,
        'updated_at' => $now,
      ],
      [
        'address' => 'rua cabral guimaraes<&>52<&>apt 204<&>7888885<&>aguas lindas<&>brasilia<&>df',
        'phones' => '119999888<&>6599995858',
        'emails' => 'teste123@teste.com<&>tasder123@gmail.com',
        'created_at' => $now,
        'updated_at' => $now,
      ],
    ]);

    // ENDERECO
    // street: //rua
    // number:
    // complement:
    // postalCode:  //cep
    // city:
    // municipality:  //bairro
    // uf:
  }
}
