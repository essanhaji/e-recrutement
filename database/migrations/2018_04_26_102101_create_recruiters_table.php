<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruiters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('logo');
            $table->string('name_entreprise');
            $table->text('description_entreprise');
            $table->string('speciality');
            $table->string('address');
            $table->string('email');
            $table->string('website');
            $table->string('phone_number');
            $table->string('facebook')->nullable();
            $table->string('insagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('google_plus')->nullable();
            $table->string('linkedin')->nullable();
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
        Schema::dropIfExists('recruiters');
    }
}
