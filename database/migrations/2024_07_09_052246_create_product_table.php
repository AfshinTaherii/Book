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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('titleFa');
            $table->string('titleEn');
            $table->string('slug');
            $table->string('authorFa');
            $table->string('authorEn');
            $table->text('descriptionFa')->nullable();
            $table->text('descriptionEn')->nullable();
            $table->string('publisherFa');
            $table->string('publisherEn');
            $table->string('cover_image');
            $table->dateTime('published_at');
            $table->bigInteger('categoryId');
            $table->string('priceBook');
            $table->integer('offPercent')->nullable()->default(0);
            $table->integer('offPrice')->nullable()->default(0);
            $table->bigInteger('available')->default(0);
            $table->integer('pages')->nullable();
            $table->string('isbn')->unique();
            $table->string('language')->default('fa');
            $table->text('seoDescription')->nullable();
            $table->text('seoKeyboard')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book');
    }
};
