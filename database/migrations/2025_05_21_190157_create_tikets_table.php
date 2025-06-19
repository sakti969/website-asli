<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiketsTable extends Migration
{
    public function up()
    {
        Schema::create('tikets', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pertandingan');
            $table->date('tanggal');
            $table->integer('stock')->default(0);
            $table->bigInteger('harga');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tikets');
    }
}
