<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('author_id');
            $table->string('title');
            $table->string('media')->nullable();
            $table->text('content')->nullable();
            $table->unsignedBigInteger('likes')->nullable();
            $table->unsignedBigInteger('dislikes')->nullable();
            /**
             * One user has many posts.
             */
            $table->index('author_id', 'author_idx');
            $table->foreign('author_id', 'post_author_fk')->on('users')->references('id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
