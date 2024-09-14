<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userId')->unsigned();
            $table->foreign('userId')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->bigInteger('provincesId')->unsigned();
            $table->foreign('provincesId')
                ->references('id')->on('provinces')
                ->onDelete('cascade');
            $table->bigInteger('cityId')->unsigned();
            $table->foreign('cityId')
                ->references('id')->on('cities')
                ->onDelete('cascade');
            $table->text('details')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('addresses');
    }
}
