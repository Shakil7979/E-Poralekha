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
        Schema::create('catagory_table',function(Blueprint $table){
            $table->bigIncrements('id'); 
            $table->string('Name');
            $table->longText('description')->nullable();
            $table->char('status', 100)->default('Published');
            $table->dateTime('created_at', $precision = 0);
        });
          // Insert some stuff
          DB::table('catagory_table')->insert(
            [
                [ 
                    'Name' => 'Daycare',
                    'created_at' => $dateTime
                ],
                [ 
                    'Name' => 'News',
                    'created_at' => $dateTime
                ],
                [ 
                    'Name' => 'Parent Alerts',
                    'created_at' => $dateTime
                ],
                [ 
                    'Name' => 'Our Events',
                    'created_at' => $dateTime
                ],
                
            ]
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
