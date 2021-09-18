<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalsTable extends Migration
{

    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('address');
            $table->string('description');
            $table->string('city');
            $table->string('state');
            $table->string('zip')->nullable();
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->enum('type', ['Hospital', 'Clinic', 'Other'])->default('Hospital')->nullable();
            $table->double('latitude');
            $table->double('longitude');
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('hospitals');
    }
}
