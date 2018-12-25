<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('themes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_profile');
            $table->unsignedInteger('uid_pb');
            $table->unsignedInteger('uid_cv');
            $table->unsignedInteger('uid_kn');
            $table->foreign('id_profile')->references('id')->on('profiles')->onUpdate('cascade');
            $table->foreign('uid_pb')->references('id')->on('master_produks')->onUpdate('cascade');
            $table->foreign('uid_cv')->references('id')->on('master_produks')->onUpdate('cascade');
            $table->foreign('uid_kn')->references('id')->on('master_produks')->onUpdate('cascade');
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
        Schema::dropIfExists('themes');
    }
}
