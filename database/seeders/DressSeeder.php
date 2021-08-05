<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DressSeeder extends Seeder
{
  const DESCRIPTION = <<<TEXT_BLOCK
Платье свободного кроя, 2 яруса воланов. Рукав втачной.
Ткань эластичная, струящаяся, чёрного цвета, в белый окрашенный горошек.
Тонкая, но не просвечивается.
TEXT_BLOCK
;

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
      'photos' => ['woman-1_1.jpg'],

      'description' => self::DESCRIPTION,
      'details' => json_encode([
        'season' => 'все сезоны',
        'style' => 'на каждый день',
        'composition' => 'вискоза 80%, полиэстер 20%',
        'color' => 'чёрный в белый горошек'
      ]),
      'params' => json_encode([
        'size' => ['42', '44', '46', '48'],
        'height' => '165 см'
      ]),

      'in_stock' => true
    ]);

    DB::table('dresses')->insert([
      'name' => 'Платье 2',
      'display_photo' => 'woman-1_2.jpg',
      'second_display_photo' => 'woman-2_3.jpg',
      'photos' => json_encode(['woman-1_2.jpg']),

      'description' => self::DESCRIPTION,
      'details' => json_encode([
        'season' => 'все сезоны',
        'style' => 'на каждый день',
        'composition' => 'вискоза 80%, полиэстер 20%',
        'color' => 'чёрный в белый горошек'
      ]),
      'params' => json_encode([
        'size' => ['42', '44', '46', '48'],
        'height' => '165 см'
      ]),

      'in_stock' => true
    ]);

    DB::table('dresses')->insert([
      'name' => 'Платье 3',
      'display_photo' => 'woman-1_3.jpg',
      'second_display_photo' => 'woman-2_3.jpg',
      'photos' => json_encode(['woman-1_3.jpg']),

      'description' => self::DESCRIPTION,
      'details' => json_encode([
        'season' => 'все сезоны',
        'style' => 'на каждый день',
        'composition' => 'вискоза 80%, полиэстер 20%',
        'color' => 'чёрный в белый горошек'
      ]),
      'params' => json_encode([
        'size' => ['42', '44', '46', '48'],
        'height' => '165 см'
      ]),

      'in_stock' => true
    ]);

    /* Another woman start */
    DB::table('dresses')->insert([
      'name' => 'Платье 4',
      'display_photo' => 'woman-2_1.jpg',
      'second_display_photo' => 'woman-2_3.jpg',
      'photos' => json_encode(['woman-2_1.jpg']),

      'description' => self::DESCRIPTION,
      'details' => json_encode([
        'season' => 'все сезоны',
        'style' => 'на каждый день',
        'composition' => 'вискоза 80%, полиэстер 20%',
        'color' => 'чёрный в белый горошек'
      ]),
      'params' => json_encode([
        'size' => ['42', '44', '46', '48'],
        'height' => '165 см'
      ]),

      'in_stock' => true
    ]);

    DB::table('dresses')->insert([
      'name' => 'Платье 5',
      'display_photo' => 'woman-2_2.jpg',
      'second_display_photo' => 'woman-2_2_2.jpg',
      'photos' => json_encode(['woman-2_2.jpg']),

      'description' => self::DESCRIPTION,
      'details' => json_encode([
        'season' => 'все сезоны',
        'style' => 'на каждый день',
        'composition' => 'вискоза 80%, полиэстер 20%',
        'color' => 'чёрный в белый горошек'
      ]),
      'params' => json_encode([
        'size' => ['42', '44', '46', '48'],
        'height' => '165 см'
      ]),

      'in_stock' => true
    ]);

    DB::table('dresses')->insert([
      'name' => 'Платье 6',
      'display_photo' => 'woman-2_3.jpg',
      'second_display_photo' => 'woman-2_3.jpg',
      'photos' => json_encode(['woman-2_3.jpg']),

      'description' => self::DESCRIPTION,
      'details' => json_encode([
        'season' => 'все сезоны',
        'style' => 'на каждый день',
        'composition' => 'вискоза 80%, полиэстер 20%',
        'color' => 'чёрный в белый горошек'
      ]),
      'params' => json_encode([
        'size' => ['42', '44', '46', '48'],
        'height' => '165 см'
      ]),

      'in_stock' => false
    ]);
  }
}
