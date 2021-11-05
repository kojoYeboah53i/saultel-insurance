<?php

namespace App\Exports;

use App\Models\healthFacilities;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class healthFacilityImport implements ToModal
{


       /**
     * @param array $row
     *
     * @return healthFacilities|null
     */
    public function model(array $row)
    {
       // return healthFacilities::all();
       return new healthFacilities([
        'region'     => $row[0],
        'district'    => $row[1], 
        'facility_name'    => $row[2], 
        'facility_type'    => $row[3], 
        'town'    => $row[4], 
        'ownership'    => $row[5], 
        'lat'    => $row[6], 
        'long'    => $row[7], 
     ]);
    }

 
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

}
