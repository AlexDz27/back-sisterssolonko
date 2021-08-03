<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDressesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('dresses', function (Blueprint $table) {
      $table->id();

      $table->string('name');

      $table->string('display_photo');
      $table->string('second_display_photo');
      $table->json('photos');

      $table->string('description');
      $table->json('details');
      $table->json('params');

      $table->boolean('in_stock');

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('dresses');
  }
}
