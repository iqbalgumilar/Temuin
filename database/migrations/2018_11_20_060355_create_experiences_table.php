<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_profile');
            $table->unsignedInteger('uid_work');
            $table->string('from_experience');
            $table->date('date_first_experience');
            $table->date('date_last_experience');
            $table->foreign('id_profile')->references('id')->on('profiles')->onUpdate('cascade');
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
        Schema::dropIfExists('experiences');
    }
}
