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
        Schema::create('home_feature_table', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->longText('feature_sec_title'); 
            $table->longText('feature_sec_desc'); 
            $table->longText('f_item_1_icon'); 
            $table->longText('f_item_1_title'); 
            $table->longText('f_item_1_desc'); 
            $table->longText('f_item_2_icon'); 
            $table->longText('f_item_2_title'); 
            $table->longText('f_item_2_desc'); 
            $table->longText('f_item_3_icon'); 
            $table->longText('f_item_3_title'); 
            $table->longText('f_item_3_desc'); 
            $table->longText('f_item_4_icon'); 
            $table->longText('f_item_4_title'); 
            $table->longText('f_item_4_desc'); 
            $table->longText('feature_img');  
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
