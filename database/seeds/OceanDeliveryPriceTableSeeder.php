<?php

use Illuminate\Database\Seeder;

class OceanDeliveryPriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            "NEW YORK, NJ" => [
                "KOTKA, FINLAND / PER VEHICLE" => 750.00,
                "ST.PETERSBURG, RUSSIA / PER VEHICLE" => 950.00,
                "KLAIPEDA, LITHUANIA / PER VEHICLE" => 900.00,
                "RIGA, LATVIA / PER VEHICLE" => 950.00,
                "POTI, GEORGIA / PER VEHICLE" => 1100.00,
                "BAKU, AZERBAIJAN / PER VEHICLE" => 1700.00,
                "MOSCOW, RUSSIA / PER 40’ HC CONTAINER" => 4500.00,
                "ILICHEVSK, ODESSA, UKRAINE / PER VEHICLE" => 950.00,
                "NOVOROSIYSK, RUSSIA / PER VEHICLE" => 900.00,
                "MINSK, BELARUS / PER 40’ HC CONTAINER" => 4500.00,
                "MOST EUROPEAN PORTS / PER VEHICLE" => 650.00,
                "DUBAI, U.A.E. / PER VEHICLE" => 950.00,
                "AQABA, JORDAN / PER 40’ HC CONTAINER" => 3300.00,
                "GDYNIA, POLAND / PER VEHICLE" => 850.00,
                "COSTANZA, ROMANIA / PER VEHICLE" => 800.00,
                "HOUNDURAS PORT / PER 40’ HC CONTAINER" => 3300.00,
                "TEMA, GHANA / PER VEHICLE" => 1200.00,
            ]
        ];

        collect($data)->each(function ($item, $key){
            $exitPort = factory(\App\Models\OceanExitPort::class)->create([
                'name' => $key,
            ]);
            collect($item)->each(function ($price, $destinationPort) use($exitPort) {
                $destinationPortFinal = factory(\App\Models\OceanDestinationPort::class)->create([
                    'name' => $destinationPort,
                ]);
                factory(\App\Models\OceanDeliveryPrice::class)->create([
                    'ocean_exit_port_id' => $exitPort->id,
                    'ocean_destination_port_id' => $destinationPortFinal->id,
                    'price' => $price,
                ]);
            });
        });
    }
}
