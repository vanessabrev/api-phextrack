<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {

    $this->call(UsersTableSeeder::class);


    /*
    |--------------------------------------------------------------------------
    | Seeders Referentes ao SITE
    |--------------------------------------------------------------------------
    */
    $this->call(MenusTableSeeder::class);
    $this->call(ProductsTableSeeder::class);
    $this->call(SocialMediasSeeder::class);
  }
}
