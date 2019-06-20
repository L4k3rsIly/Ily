<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type_object')->nullable();
            $table->integer('price')->nullable();
            $table->string('type_price')->nullable();
            $table->string('type_wall')->nullable();
            $table->string('number_rooms')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('phone')->nullable();
            $table->string('information')->nullable();
            $table->string('status')->default(\App\Models\Offer::REMEMBER_FALSE)->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
