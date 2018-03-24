<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewTables20032018 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('first_name')->nullable();
            $table->string('sur_name')->nullable();
            $table->string('title')->nullable();
            $table->string('email')->nullable();
            $table->string('code')->nullable();
            $table->string('issue')->nullable();
            $table->string('subject')->nullable();
            $table->longText('question')->nullable();
            $table->tinyInteger('status')->nullable()->default(0);
        });
        Schema::create('email_log',function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('to')->nullable();
            $table->string('event')->nullable();
            $table->tinyInteger('status')->nullable()->default(0);
            $table->longText('data')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
        Schema::dropIfExists('email_log');
    }
}
