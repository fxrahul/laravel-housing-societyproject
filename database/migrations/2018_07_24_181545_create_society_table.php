<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocietyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('societydetails', function (Blueprint $table) {
            $table->integer('user_id')->unsigned(); 
            $table->foreign('user_id')->references('id')->on('societyusers'); 
            $table->integer('s_id',10);
            $table->string('s_name',50);
            $table->string('s_email',50);
            $table->string('s_address',150);
            $table->string('s_account_no',50);
            $table->string('pan_card',50);
            $table->string('c_tel_no',50);
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
        Schema::dropIfExists('societydetails');
    }
}
