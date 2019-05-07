<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('title');
            $table->string('facebook');
            $table->string('insagram');
            $table->string('twitter');
            $table->string('google_plus');
            $table->string('linkedin');
            $table->string('address');
            $table->double('salary');
            $table->integer('age');
            $table->string('active')->default('false');
            $table->string('phone_number');
            $table->string('email');
            $table->string('experience');
            $table->string('etude');
            $table->text('about_me');
            $table->timestamps();
            $table->datetime('deleted_at')->nullable();

            $table->foreign('user_id')->references('id')->on('user');
            $table->unique('user_id', 'recruiters_user_id_uniq');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cvs');
    }
}
