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
        //INSERT DUMP DATA TO TEST APP
        DB::insert("INSERT INTO vehicle_client_type (vehicle_id, client_type_id) VALUES (1,1);");
        DB::insert("INSERT INTO vehicle_requirements (vehicle_id, requirement_id) VALUES (1,1);");
        DB::insert("INSERT INTO vehicle_use (vehicle_id, use_id) VALUES (1,1);");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::table('vehicle_client_type')->delete();
        DB::table('vehicle_requirements')->delete();
        DB::table('vehicle_use')->delete();
    }
};
