<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageWidthHeightFieldInPostParagraphTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('post_paragraph', function (Blueprint $table) {
           
              $table->string('width',11)->nullable();
              $table->string('height',11)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('post_paragraph', function (Blueprint $table) {
            //
        });
    }
}
