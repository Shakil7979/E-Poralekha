<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 

        date_default_timezone_set("Asia/Dhaka");
        $dateTime = date("Y-m-d h:i:s");
        Schema::create('team_table', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('image_upload');
            $table->string('email');
            $table->string('facebook_url');
            $table->string('twitter_url');
            $table->string('linkedin_url');
            $table->string('t_member_name');
            $table->string('designation');
            $table->string('desc');   
            $table->dateTime('create_at');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
