<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAndressesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    // 'street', 'number', 'complement', 'postalCode', 'city', 'municipality', 'uf'
    Schema::create('adresses', function (Blueprint $table) {
      $table->id();
      $table->string('street')->nullable();
      $table->string('number')->nullable();
      $table->string('complement')->nullable();
      $table->string('postalCode')->nullable();
      $table->string('city')->nullable();
      $table->string('municipality')->nullable();
      $table->string('uf')->nullable();
      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('adresses');
  }
}
