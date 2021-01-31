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

    //home e header
    $this->call(MenusTableSeeder::class);
    $this->call(InfoMainSeeder::class);
    //  $this->call(ThemeColorHomeSeeder::class); // TODO: criar model, migration e seeder e chamar no endpoint /info-main

    //info home
    $this->call(InfoHomeSeeder::class);

    //about
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

    //footer
    $this->call(SocialMediasSeeder::class);
  }
}
