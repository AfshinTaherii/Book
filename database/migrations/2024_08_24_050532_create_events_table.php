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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('titleFa');
            $table->string('titleEn');
            $table->text('descriptionFa')->nullable();
            $table->text('descriptionEn')->nullable();
            $table->text('seoDescription')->nullable();
            $table->text('seoKeyboard')->nullable();
            $table->dateTime('start_time');
            $table->dateTime('end_time')->nullable();
            $table->unsignedBigInteger('organizer_id'); //برگذار کننده رویداد//
            $table->string('locationFa')->nullable();
            $table->string('locationEn')->nullable();
            $table->string('status')->default('scheduled');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
