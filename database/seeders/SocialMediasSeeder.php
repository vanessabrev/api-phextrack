<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialMediasSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $now = date('Y-m-d H:i:s');
    DB::table('social_media')->insert([
      [
        'instagram' => 'https://www.instagram.com/',
        'twitter' => 'https://www.twitter.com/',
        'facebook' => 'https://www.facebook.com/',
        'linkedin' => 'https://www.linkedin.com/',
        'skype' => 'https://www.skype.com/',
        'created_at' => $now,
        'updated_at' => $now,
      ]
    ]);
  }
}
