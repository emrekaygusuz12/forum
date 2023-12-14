<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('threads', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('content');
            $table->bigInteger('user_id')->unsigned(); //holds the user id for thread
            $table->bigInteger('category_id')->unsigned(); //holds the category id for thread
            // $table->bigInteger('post_id')->unsigned(); //holds the category id for thread
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')
            ->onDelete('cascade');
            // $table->foreign('post_id')->references('id')->on('posts')
            // ->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('threads');
    }
};
