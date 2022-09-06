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
        Schema::create('footer_text_table', function(Blueprint $table){
            $table->bigIncrements('id');  
            $table->string('st_day');  
            $table->string('end_day');  
            $table->time('o_start_time')->default('00:00');  
            $table->time('o_end_time')->default('00:00');  
            $table->string('copy_text');
            $table->string('d_by_text');
            $table->string('d_by_url');
            $table->string('hosted_text');
            $table->string('hosted_com');
            $table->string('hosted_url'); 
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
