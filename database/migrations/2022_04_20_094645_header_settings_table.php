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
        Schema::create('header_settings_table', function(Blueprint $table){
            $table->bigIncrements('id'); 
            $table->longText('address');  
            $table->longText('email');  
            $table->longText('phone');  
            $table->longText('facebook_url');  
            $table->longText('twitter_url');  
            $table->longText('instagram_url');   
            $table->longText('new_menu');  
            $table->longText('menu_url');   
            $table->dateTime('created_at', $precision = 0);
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
