<?php

use Illuminate\Database\Seeder;

class OceanDestinationPortsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ports = [
            "KOTKA, FINLAND / PER VEHICLE",
            "ST.PETERSBURG, RUSSIA / PER VEHICLE",
            "KLAIPEDA, LITHUANIA / PER VEHICLE",
            "RIGA, LATVIA / PER VEHICLE",
            "POTI, GEORGIA / PER VEHICLE",
            "BAKU, AZERBAIJAN / PER VEHICLE",
            "MOSCOW, RUSSIA / PER 40’ HC CONTAINER",
            "ILICHEVSK, ODESSA, UKRAINE / PER VEHICLE",
            "NOVOROSIYSK, RUSSIA / PER VEHICLE",
            "MINSK, BELARUS / PER 40’ HC CONTAINER",
            "MOST EUROPEAN PORTS / PER VEHICLE",
            "DUBAI, U.A.E. / PER VEHICLE",
            "AQABA, JORDAN / PER 40’ HC CONTAINER",
            "GDYNIA, POLAND / PER VEHICLE",
            "COSTANZA, ROMANIA / PER VEHICLE",
            "PANAMA PORT / PER VEHICLE",
            "HOUNDURAS PORT / PER 40’ HC CONTAINER",
            "TEMA, GHANA / PER VEHICLE",
        ];
        collect($ports)->each(function ($item){
            factory(\App\Models\OceanDestinationPort::class)->create([
                'name' => $item,
            ]);
        });

    }
}
