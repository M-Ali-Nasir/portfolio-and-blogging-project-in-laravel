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
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('cat_id')->constrained('post_categories')->onDelete('cascade');
            $table->foreignId('cat_id');
            $table->foreign('cat_id')->references('id')->on('post_categories')->onDelete('cascade');
            $table->string('title');
            $table->string('description');

            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
