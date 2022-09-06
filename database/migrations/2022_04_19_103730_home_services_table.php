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
        Schema::create('home_services_table', function(Blueprint $table){
            $table->bigIncrements('id'); 
            $table->longText('services_cat');  
            $table->longText('services_title');  
            $table->longText('services_desc');  
            $table->longText('services_list1');  
            $table->longText('services_list2');  
            $table->longText('services_list3');  
            $table->longText('button_text');  
            $table->longText('button_url');  
            $table->longText('services_img');  
            $table->integer('active')->default(0); 
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
