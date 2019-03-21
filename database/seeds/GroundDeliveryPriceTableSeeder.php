<?php

use Illuminate\Database\Seeder;

class GroundDeliveryPriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = \Illuminate\Support\Facades\Storage::get('ground.json');
        $contents = collect(json_decode($contents));

        collect($contents)->each(function ($item, $key) {
            if($key){
                $auction = factory(\App\Models\Auction::class)->create(['name' => $key,]);

                collect($item)->each(function ($item, $location) use($auction) {
                    if($location){
                        $groundLocation = \App\Models\GroundLocation::firstOrCreate(['name' => $location,]);

                        collect($item)->each(function ($price, $exitPort) use($auction,$groundLocation) {
                            $exitPortEntity = \App\Models\GroundExitPort::firstOrCreate(['name' => $exitPort,]);

                            factory(\App\Models\GroundDeliveryPrice::class)->create([
                                'auction_id' => $auction->id,
                                'ground_location_id' => $groundLocation->id,
                                'ground_exit_port_id' => $exitPortEntity->id,
                                'price' => (int) $price,
                            ]);
                        });
                    }
                });
            }
        });
    }
}
