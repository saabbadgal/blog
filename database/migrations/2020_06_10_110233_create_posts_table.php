<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->string('subtitle',255);
            $table->string('slug',100);
            $table->tinyInteger('status')->default(1);
            
            $table->integer('posted_by');
            $table->text('body');
            $table->string('image',255)->nullable();
            $table->unsignedBigInteger('like')->nullable();
            $table->unsignedBigInteger('dislike')->nullable(); 
            $table->unsignedBigInteger('sort'); 
            $table->string('reading_time',255); 

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
        Schema::dropIfExists('posts');
    }
}
