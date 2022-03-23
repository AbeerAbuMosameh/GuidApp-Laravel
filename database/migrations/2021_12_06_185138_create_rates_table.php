<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('rates', function (Blueprint $table) {
                $table->id();
                $table->string('ipaddress')->nullable();
                $table->unsignedBigInteger('Store_id');
                $table->foreign('Store_id')->references('id')->on('stores')->onDelete('cascade');
                $table->integer('stars_rated');
                $table->timestamps();
                $table->softDeletes();
            });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rate');
    }
}
