<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoMainsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    // title, subtitle, image
    Schema::create('info_mains', function (Blueprint $table) {
      $table->id();
      $table->string('title')->nullable();
      $table->string('subtitle')->nullable();
      $table->string('image')->nullable();
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
    Schema::dropIfExists('info_mains');
  }
}
