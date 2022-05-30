<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regent', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->string('address');
            $table->date('date_of_birth');
            $table->string('phone_number');
            $table->tinyInteger('sex');
            $table->tinyInteger('status');
            $table->tinyInteger('show_home_page')->default(0);
            $table->string('email')->nullable();
            $table->string('facebook')->nullable();
            $table->string('skype')->nullable();
            $table->string('twitter')->nullable();
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
        Schema::dropIfExists('regent');
    }
}
