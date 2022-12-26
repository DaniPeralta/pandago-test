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
        DB::insert("INSERT INTO use_v (name) VALUES ('reparto');");
        DB::insert("INSERT INTO client_type (name) VALUES ('empresa');");
        DB::insert("INSERT INTO requirement (name) VALUES ('circulación autovía');");
        DB::insert("INSERT INTO vehicle (name, description, type, price, valoration, contract_duration, brand, speed, autonomy, image) VALUES ('PCX 500', 'Buena moto para ciudades pequeñas', 'Motocicleta', '120', '4', '12', 'Honda', '60', '100', '/img/pcx_image.png');");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::table('vehicle')->delete();
        DB::table('use')->delete();
        DB::table('client_type')->delete();
        DB::table('requirement')->delete();

    }
};
