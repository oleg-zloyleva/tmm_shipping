<?php

use App\Models\Auction;
use App\Models\GroundExitPort;
use App\Models\GroundLocation;
use Illuminate\Database\Seeder;
use Illuminate\Filesystem\Filesystem;

class GroundDeliveryPriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function run()
    {
//        \DB::beginTransaction();

        $uniqueLocation = [ ];

        $contents = json_decode((new Filesystem())->get(storage_path('ground.json')));

        foreach ($contents as $auction => $auction_data) {
            $auction = factory(Auction::class)->create(['name' => $auction]);

            foreach ($auction_data as $exit_port => $exit_port_data) {
                $exit_port = factory(GroundExitPort::class)->create(['name' => $exit_port]);

                foreach ($exit_port_data as $location => $price) {
                    if (isset($uniqueLocation[$location])) {
                        $location = $uniqueLocation[$location];
                    } else {
                        $location = $uniqueLocation[$location] = factory(GroundLocation::class)->create(['name' => $location]);
                    }

                    factory(App\Models\GroundDeliveryPrice::class)->create([
                        'auction_id' => $auction->id,
                        'ground_location_id' => $location->id,
                        'ground_exit_port_id' => $exit_port->id,
                        'price' => $price,
                    ]);
                }
            }
        }

//        \DB::rollBack();
    }
}
