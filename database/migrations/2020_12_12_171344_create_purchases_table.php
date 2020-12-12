<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
          $table->id();
          $table->text("name");
          $table->text("mmu_id");
          $table->text("extension_number")->nullable();
          $table->text("faculty");
          $table->text("format");
          $table->text("campus");
          $table->text("category");
          $table->text("library");
          $table->text("title");
          $table->text("isbn");
          $table->text("author");
          $table->text("publisher");
          $table->text("subject_code");
          $table->integer("quantity");
          $table->integer("total_students")->nullable();
          $table->double('price', 8, 2)->nullable();
          $table->longText('remark')->nullable();
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
        Schema::dropIfExists('purchases');
    }
}
