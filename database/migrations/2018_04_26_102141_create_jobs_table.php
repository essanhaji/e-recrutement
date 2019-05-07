<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('title');
            $table->integer('number_post');
            $table->string('city');
            $table->string('type_contract');
            $table->string('experience');
            $table->double('salary_min');
            $table->double('salary_max');
            $table->string('categorie');
            $table->text('description_post');
            $table->text('key_requirement');
            $table->text('our_offer');
            $table->date('end_date');
            $table->string('active')->default('false');
            $table->timestamps();
            $table->datetime('deleted_at')->nullable();

            $table->foreign('user_id')->references('id')->on('user');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
