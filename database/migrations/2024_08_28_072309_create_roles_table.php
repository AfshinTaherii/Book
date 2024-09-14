<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('users');
            $table->integer('groups');
            $table->integer('product');
            $table->integer('slider');
            $table->integer('role');
            $table->integer('blog');
            $table->softDeletes();
            $table->timestamps();
        });
        DB::table('roles')->insert(
            array(
                'title' => 'مشتری',
                'report' => 0,
                'users' => 0,
                'groups' => 0,
                'brand' => 0,
                'product' => 0,
                'questions' => 0,
                'slider' => 0,
                'about' => 0,
                'contact' => 0,
                'role' => 0,
                'order' => 0,
                'blogGroup' => 0,
                'blog' => 0,
                'settingContact' => 0,
                'productComments' => 0,
                'support' => 0,
                'province' => 0,
                'city' => 0,
            )
        );
        DB::table('roles')->insert(
            array(
                'title' => 'سوپر ادمین',
                'report' => 1,
                'users' => 1,
                'groups' => 1,
                'brand' => 1,
                'product' => 1,
                'questions' => 1,
                'slider' => 1,
                'about' => 1,
                'contact' => 1,
                'role' => 1,
                'order' => 1,
                'blogGroup' => 1,
                'blog' => 1,
                'settingContact' => 1,
                'productComments' => 1,
                'support' => 1,
                'province' => 1,
                'city' => 1,
            )
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
