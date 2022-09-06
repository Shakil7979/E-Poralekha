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
        Schema::create('home_about_us_table', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->longText('about_img');
            $table->longText('about_sec_title');
            $table->longText('about_sec_pra');
            $table->longText('about_title');
            $table->longText('about_content');
            $table->longText('button_text'); 
            $table->longText('button_url');
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
