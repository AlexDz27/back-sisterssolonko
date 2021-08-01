<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DressSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('dresses')->insert([
      'name' => 'Платье 1',
      'display_photo' => 'woman-1_1.jpg',
      'second_display_photo' => 'woman-2_3.jpg',
      'photos' => json_encode(['woman-1_1.jpg']),
      'in_stock' => true
    ]);

    DB::table('dresses')->insert([
      'name' => 'Платье 2',
      'display_photo' => 'woman-1_2.jpg',
      'second_display_photo' => 'woman-2_3.jpg',
      'photos' => json_encode(['woman-1_2.jpg']),
      'in_stock' => true
    ]);

    DB::table('dresses')->insert([
      'name' => 'Платье 3',
      'display_photo' => 'woman-1_3.jpg',
      'second_display_photo' => 'woman-2_3.jpg',
      'photos' => json_encode(['woman-1_3.jpg']),
      'in_stock' => true
    ]);

    /* Another woman start */
    DB::table('dresses')->insert([
      'name' => 'Платье 4',
      'display_photo' => 'woman-2_1.jpg',
      'second_display_photo' => 'woman-2_3.jpg',
      'photos' => json_encode(['woman-2_1.jpg']),
      'in_stock' => true
    ]);

    DB::table('dresses')->insert([
      'name' => 'Платье 5',
      'display_photo' => 'woman-2_2.jpg',
      'second_display_photo' => 'woman-2_2_2.jpg',
      'photos' => json_encode(['woman-2_2.jpg']),
      'in_stock' => true
    ]);

    DB::table('dresses')->insert([
      'name' => 'Платье 6',
      'display_photo' => 'woman-2_3.jpg',
      'second_display_photo' => 'woman-2_3.jpg',
      'photos' => json_encode(['woman-2_3.jpg']),
      'in_stock' => false
    ]);
  }
}
