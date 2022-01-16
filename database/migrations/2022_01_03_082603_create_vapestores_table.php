<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVapestoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vapestores', function (Blueprint $table) {
            $table->string('id_store');
            $table->double('lat')->nullable();
            $table->double('lng')->nullable();
            $table->string('namatoko')->nullable();
            $table->string('alamat')->nullable();
            $table->string('imgurl')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vapestores');
    }
}
