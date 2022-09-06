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
        Schema::create('banner_item_table', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->longText('image_upload'); 
            $table->longText('care_title'); 
            $table->longText('care_short_desc'); 
            $table->longText('care_sec_title'); 
            $table->longText('care_sec_desc'); 
            $table->longText('care_btn_text');  
            $table->longText('care_btn_url'); 
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
