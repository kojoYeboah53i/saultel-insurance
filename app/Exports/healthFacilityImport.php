<?php

namespace App\Exports;

use App\Models\healthFacilities;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class healthFacilityImport implements ToModal
{
    /**
    * @return \Illuminate\Database\Eloquent\Collection
    */
   /*   public function model(array $row)
    {
      return new healthFacilities([
            'name' => $row[0],
            'code' => $row[1],
            'type' => $row[2],
            'district_id' => $row[3],
            'subcounty_id' => $row[4],
            'parish_id' => $row[5],
            'village_id' => $row[6],
            'latitude' => $row[7],
            'longitude' => $row[8],
            'created_at' => $row[9],
            'updated_at' => $row[10],
        ]);
    }
}*/

       /**
     * @param array $row
     *
     * @return healthFacilities|null
     */
    public function model(array $row)
    {
       // return healthFacilities::all();
       return new User([
        'region'     => $row[0],
        'district'    => $row[1], 
        'district'    => $row[1], 
        'district'    => $row[1], 
        'district'    => $row[1], 
        'district'    => $row[1], 
        'district'    => $row[1], 
     ]);
    }

 

}
