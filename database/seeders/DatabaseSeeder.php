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
    $this->call(InfoHomeSeeder::class);
    $this->call(SocialMediasSeeder::class);
    $this->call(AboutSeeder::class);
    $this->call(AboutGallerySeeder::class);
    $this->call(AboutItemSeeder::class);

    //products
    $this->call(ProductsTableSeeder::class);
    $this->call(ProductItemSeeder::class);

    //contacts
    $this->call(PhoneSeeder::class);
    $this->call(EmailSeeder::class);
    $this->call(AddressSeeder::class);
  }
}
