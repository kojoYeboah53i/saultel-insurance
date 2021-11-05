<?php

namespace App\Http\Controllers\Excel;

use App\Models\healthFacilities;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportController extends Controller
{
  

    public function import() 
    {
        Excel::import(new UsersImport, 'users.xlsx');
        
        return redirect('/')->with('success', 'All good!');
    }
}
