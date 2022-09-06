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
        Schema::create('page_table', function(Blueprint $table){
            $table->bigIncrements('id'); 
            $table->longText('post_title');  
            $table->char('catagories', 100);
            $table->longText('post_description');
            $table->longText('post_thumbnail');  
            $table->longText('post_tags');
            $table->char('status', 100); 
            $table->date('public_date'); 
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
