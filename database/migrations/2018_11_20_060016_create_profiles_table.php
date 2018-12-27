<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_user');
            $table->string('nama_profile');
            $table->string('tempat_lhr_profile');
            $table->date('tgl_lhr_profile');
            $table->string('tlp_profile');
            $table->unsignedInteger('uid_work');
            $table->text('alamat');
            $table->string('foto')->default('default.png');
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('uid_work')->references('id')->on('master_works')->onUpdate('cascade');
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
        Schema::dropIfExists('profiles');
    }
}
