<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class GroundDeliveryPrice extends Model
{
    protected $fillable = ['auction_id', 'ground_location_id', 'ground_exit_port_id', 'price'];

    public function auctions(){
        return $this->belongsTo(Auction::class,'auction_id','id');
    }

    public function groundLocations(){
        return $this->belongsTo(GroundLocation::class,'ground_location_id','id');
    }

    public function groundExitPorts(){
        return $this->belongsTo(GroundExitPort::class,'ground_exit_port_id','id');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getPriceWithRelationsToSite():Collection
    {
        $result = [];
        $data = $this->with('auctions','groundLocations','groundExitPorts')->get();

        foreach ($data as $item){
            $result[$item->auctions->name][$item->groundLocations->name][$item->groundExitPorts->name] = [
                'price' => $item->price,
                'auctions_id' => $item->auctions->id,
                'groundLocations_id' => $item->groundLocations->id,
                'groundExitPorts_id' => $item->groundExitPorts->id,
            ];
        }

        return collect($result);
    }

    public function deleteItem(array $data):bool
    {
        return (bool) $this->where($data)->delete();
    }

    public function addOrUpdateItem($data):bool
    {
        return (bool) $this->updateOrCreate(
            ['auction_id' => $data['auction_id'], 'ground_location_id' => $data['ground_location_id'], 'ground_exit_port_id' => $data['ground_exit_port_id']],
            ['price' => $data['price']]
        );
    }
}

//App\Models\GroundDeliveryPrice {#3507
//    id: 1,
//     auction_id: 1,
//     ground_location_id: 1,
//     ground_exit_port_id: 1,
//     price: "1550.00",
//     created_at: "2019-03-19 15:21:24",
//     updated_at: "2019-03-19 15:21:24",
//     auctions: App\Models\Auction {#6375
//        id: 1,
//       name: "TEST",
//       created_at: "2019-03-19 15:21:24",
//       updated_at: "2019-03-19 15:21:24",
//     },
//     groundLocations: App\Models\GroundLocation {#4905
//        id: 1,
//       name: "Birmingham",
//       created_at: "2019-03-19 15:21:24",
//       updated_at: "2019-03-19 15:21:24",
//     },
//     groundExitPorts: App\Models\GroundExitPort {#6241
//        id: 1,
//       name: "Chicago",
//       created_at: "2019-03-19 15:21:24",
//       updated_at: "2019-03-19 15:21:24",
//     },
//   }

