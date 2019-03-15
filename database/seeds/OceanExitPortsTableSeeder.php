<?php

use Illuminate\Database\Seeder;

class OceanExitPortsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ports = [
            "NEW YORK, NJ",
        ];
        collect($ports)->each(function ($item){
            factory(\App\Models\OceanExitPort::class)->create([
                'name' => $item,
            ]);
        });

    }
}
