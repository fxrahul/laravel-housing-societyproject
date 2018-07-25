<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberdetails', function (Blueprint $table) {
            $table->increments('m_id');
            $table->integer('soc_id'); 
            $table->foreign('soc_id')->references('s_id')->on('societydetails'); 
            $table->string('m_maint_no',50);
            $table->string('m_name',50);
            $table->string('m_email',50);
            $table->string('m_password',150);
            $table->string('m_wing',10);
            $table->string('m_flat_no',10);
            $table->string('m_address',150);
            $table->string('m_pan_card',50);
            $table->string('m_cel_no',10);
            $table->string('m_parking_charge',10);
            $table->string('m_gas_charge',10);
            $table->string('m_water_charge',10);
            $table->string('m_light_charge',10);
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
        Schema::dropIfExists('memberdetails');
    }
}
