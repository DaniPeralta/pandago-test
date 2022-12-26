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
        DB::insert("INSERT INTO use_v (name) VALUES ('paseo');");
        DB::insert("INSERT INTO use_v (name) VALUES ('farmacia');");
        DB::insert("INSERT INTO use_v (name) VALUES ('supermercados');");
        DB::insert("INSERT INTO client_type (name) VALUES ('autónomo');");
        DB::insert("INSERT INTO client_type (name) VALUES ('particular');");
        DB::insert("INSERT INTO requirement (name) VALUES ('conducir sin carnet');");
        DB::insert("INSERT INTO vehicle (name, description, type, price, valoration, contract_duration, brand, speed, autonomy, image) VALUES ('Horwin EK3 DS', 'Moto eléctrica inteligente para facilitar el transporte.', 'Motocicleta', '153', '5', '24', 'Horwin', '60', '100', '/img/horwin_image.png');");
        DB::insert("INSERT INTO vehicle (name, description, type, price, valoration, contract_duration, brand, speed, autonomy, image) VALUES ('Super Soco CPX', 'Una moto eléctrico que destaca por su bajo mantenimiento', 'Motocicleta', '120', '3', '12', 'Super_Soco', '70', '90', '/img/soco_image.png');");
        DB::insert("INSERT INTO vehicle (name, description, type, price, valoration, contract_duration, brand, speed, autonomy, image) VALUES ('Seat MO', 'Muévete con nuestra moto eléctrica y disfruta de la ciudad sin ruidos', 'Motocicleta', '166', '3', '12', 'SEAT', '90', '85', '/img/seat_image.png');");

        DB::insert("INSERT INTO vehicle_client_type (vehicle_id, client_type_id) VALUES (2,1);");
        DB::insert("INSERT INTO vehicle_client_type (vehicle_id, client_type_id) VALUES (2,2);");
        DB::insert("INSERT INTO vehicle_client_type (vehicle_id, client_type_id) VALUES (3,2);");
        DB::insert("INSERT INTO vehicle_client_type (vehicle_id, client_type_id) VALUES (3,3);");
        DB::insert("INSERT INTO vehicle_client_type (vehicle_id, client_type_id) VALUES (4,3);");
        DB::insert("INSERT INTO vehicle_requirements (vehicle_id, requirement_id) VALUES (2,1);");
        DB::insert("INSERT INTO vehicle_requirements (vehicle_id, requirement_id) VALUES (2,3);");
        DB::insert("INSERT INTO vehicle_requirements (vehicle_id, requirement_id) VALUES (3,1);");
        DB::insert("INSERT INTO vehicle_requirements (vehicle_id, requirement_id) VALUES (4,2);");
        DB::insert("INSERT INTO vehicle_use (vehicle_id, use_id) VALUES (2,1);");
        DB::insert("INSERT INTO vehicle_use (vehicle_id, use_id) VALUES (2,2);");
        DB::insert("INSERT INTO vehicle_use (vehicle_id, use_id) VALUES (2,4);");
        DB::insert("INSERT INTO vehicle_use (vehicle_id, use_id) VALUES (3,1);");
        DB::insert("INSERT INTO vehicle_use (vehicle_id, use_id) VALUES (3,3);");
        DB::insert("INSERT INTO vehicle_use (vehicle_id, use_id) VALUES (4,2);");
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
