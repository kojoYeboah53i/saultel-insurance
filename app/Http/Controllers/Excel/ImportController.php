<?php

namespace App\Http\Controllers\Excel;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Exports\healthFacilityImport; 
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
  

    public function import() 
    {
        Excel::import(new healthFacilityImport, request()->file('healthFacilitiesGPS'));// 'healthFacilitiesGPS.xlsx');
        
        return view('pages.partner.excel')->with('success', 'All good!');
    }
}
