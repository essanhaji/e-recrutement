<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('postule');
            $table->integer('attachment');
            $table->string('type')->default('page');
            $table->text('message');
            $table->string('active')->default('true');
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
        Schema::dropIfExists('postules');
    }
}
