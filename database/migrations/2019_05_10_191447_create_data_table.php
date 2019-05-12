<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->unsignedInteger('admission_level');
            $table->string('track');
            $table->string('previous_school');
            $table->bigInteger('lrn');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('suffix')->nullable();
//            $table->string('full_name');
            $table->string('gender');
            $table->string('social_assistance');

            $table->string('citizenship');
            $table->text('birthplace');
            $table->string('religion');

            $table->integer('birth_month');
            $table->integer('birth_day');
            $table->integer('birth_year');


            $table->string('barangay');
            $table->string('province');
            $table->string('city');
            $table->string('telephone_number')->nullable();
            $table->string('cellphone_number');
            $table->string('email')->nullable();
            $table->string('father_first_name')->nullable();
            $table->string('father_last_name')->nullable();
            $table->string('father_mobile_number')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('mother_first_name')->nullable();
            $table->string('mother_last_name')->nullable();
            $table->string('mother_mobile_number')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('guardian_first_name')->nullable();
            $table->string('guardian_last_name')->nullable();
            $table->string('guardian_mobile_number')->nullable();
            $table->string('guardian_occupation')->nullable();

            $table->string('full_name');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data');
    }
}
