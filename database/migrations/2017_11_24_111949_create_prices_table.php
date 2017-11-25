<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('noteword')->nullable();  //这里的用红字表示
            $table->string('day')->default('/');
            $table->string('week')->default('/');
            $table->string('month')->default('/');
            $table->integer('level')->default(0);  //0 不推荐 1 一般 2 推荐 3 特别推荐
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
        Schema::dropIfExists('prices');
    }
}
