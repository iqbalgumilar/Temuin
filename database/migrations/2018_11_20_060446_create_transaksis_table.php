<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('uid_produk');
            $table->double('harga_transaksi');
            $table->decimal('diskon_transaksi');
            $table->double('total_transaksi');
            $table->enum('status_transaksi',['0','1']);
            $table->string('image_transaksi');
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('uid_produk')->references('id')->on('master_produks')->onUpdate('cascade');
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
        Schema::dropIfExists('transaksis');
    }
}
