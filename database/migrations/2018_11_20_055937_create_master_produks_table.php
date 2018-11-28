<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_produks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_jenis_produk');
            $table->string('produk');
            $table->string('file_produk');
            $table->enum('status',['0','1']);
            $table->double('harga_produk', 10, 4);
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->foreign('id_jenis_produk')->references('id')->on('master_jenis_produks')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('admin')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('admin')->onUpdate('cascade');
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
        Schema::dropIfExists('master_produks');
    }
}
