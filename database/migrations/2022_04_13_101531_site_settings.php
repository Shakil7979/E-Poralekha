<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('site_settings', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('website_title')->nullable();
            $table->string('website_logo')->nullable();
            $table->string('footer_logo')->nullable();
            $table->string('favicon_icon')->nullable();
            $table->dateTime('update_at');
        });
        // Insert some stuff
        DB::table('site_settings')->insert(
            array(
                'website_title' => 'ePoralekha Website',
                'website_logo' => 'admin-assets/img/logo-dark.png',
                'footer_logo' => 'admin-assets/img/logo-footer.png',
                'favicon_icon' => 'admin-assets/img/favicon.png',
                'update_at' => $dateTime
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
