<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableOnline extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_services', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->tinyInteger('attendingForum')->default(0);
            $table->tinyInteger('presentationForum')->default(0);
            $table->tinyInteger('presentation')->default(0);
            $table->tinyInteger('programBook')->default(0);
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('birthday')->nullable();
            $table->string('title')->nullable();
            $table->string('position')->nullable();
            $table->string('institution')->nullable();
            $table->string('home_phone')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->string('nationality')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('issue_date')->nullable();
            $table->string('expire_date')->nullable();
            $table->string('address1')->nullable();
            $table->string('floor')->nullable();
            $table->string('address2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('date_of_arrival')->nullable();
            $table->string('date_of_departure')->nullable();
            $table->string('other_date_of_arrival')->nullable();
            $table->string('other_date_of_departure')->nullable();
            $table->string('other_time_of_arrival')->nullable();
            $table->string('other_time_of_departure')->nullable();
            $table->string('other_flight_number_arrival')->nullable();
            $table->string('other_flight_number_departure')->nullable();
            $table->string('other_name_airport_arrival')->nullable();
            $table->string('other_name_airport_departure')->nullable();
            $table->text('room')->nullable();
            $table->text('indicate')->nullable();
            $table->tinyInteger('obtain_visa')->default(0);
            $table->tinyInteger('where_visa')->default(0);
            $table->tinyInteger('join_hanoi')->default(0);
            $table->tinyInteger('accompanying_other')->default(0);
            $table->string('accom_first_name')->nullable();
            $table->string('accom_last_name')->nullable();
            $table->string('accom_gender')->nullable();
            $table->string('accom_birthday')->nullable();
            $table->string('accom_nationality')->nullable();
            $table->string('accom_passport_number')->nullable();
            $table->string('accom_issue_date')->nullable();
            $table->string('accom_expire_date')->nullable();
            $table->tinyInteger('accompanying_attend')->default(0);
            $table->tinyInteger('event_1')->default(0);
            $table->tinyInteger('event_2')->default(0);
            $table->tinyInteger('panel_1')->default(0);
            $table->tinyInteger('panel_2')->default(0);
            $table->tinyInteger('panel_3')->default(0);
            $table->tinyInteger('panel_4')->default(0);
            $table->tinyInteger('panel_5')->default(0);
            $table->tinyInteger('event_3')->default(0);
            $table->tinyInteger('accom_obtain_visa')->default(0);
            $table->tinyInteger('accom_where_visa')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('online_services');
    }
}
