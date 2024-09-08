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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('titleFa');
            $table->string('titleEn');
            $table->string('slug');
            $table->text('seoDescription')->nullable();
            $table->text('seoKeyboard')->nullable();
            $table->string('image');
            $table->longText('longDescriptionFa');
            $table->longText('longDescriptionEn');
            $table->text('shortDescriptionFa');
            $table->text('shortDescriptionEn');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog');
    }
};
