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
        Schema::create('home_banner_table', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->longText('welcome_title');
            $table->longText('banner_bg');
            $table->longText('banner_img');
            $table->longText('banner_website_title');
            $table->longText('banner_content');
            $table->longText('button_text');
            $table->longText('button_url');
            $table->dateTime('created_at', $precision = 0);
        });
        DB::table('home_banner_table')->insert(
            array( 
                'welcome_title' => 'Welcome To',
                'banner_bg' => 'bg',
                'banner_img' => 'img',
                'banner_website_title' => 'ePoralekha',
                'banner_content' => 'We offer high quality Daycare Services, contact us or visit us today for more information',
                'button_text' => 'contact us',
                'button_url' => 'contact',
                'created_at' => $dateTime
            )
        );
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
