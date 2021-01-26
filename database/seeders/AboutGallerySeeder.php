<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutGallerySeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $now = date('Y-m-d H:i:s');
    DB::table('about_galleries')->insert([
      [
        'name' => 'Image 1',
        'image' => 'https://miro.medium.com/max/10000/0*wZAcNrIWFFjuJA78',
        'created_at' => $now,
        'updated_at' => $now,
      ],
      [
        'name' => 'Image 2',
        'image' => 'https://images.ctfassets.net/hrltx12pl8hq/7yQR5uJhwEkRfjwMFJ7bUK/dc52a0913e8ff8b5c276177890eb0129/offset_comp_772626-opt.jpg?fit=fill&w=800&h=300',
        'created_at' => $now,
        'updated_at' => $now,
      ],
      [
        'name' => 'Image 3',
        'image' => 'https://image.freepik.com/free-photo/image-human-brain_99433-298.jpg',
        'created_at' => $now,
        'updated_at' => $now,
      ]
    ]);
    // name
    // image
  }
}
