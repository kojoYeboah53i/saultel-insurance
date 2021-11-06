<?php

namespace App\Http\Controllers\ServiceProvider;

use App\Http\Controllers\Controller;
use App\Models\healthFacilities;
use Illuminate\Http\Request;

class FacilitiesController extends Controller
{
    //
    public function index()
    {
        $facilities = healthFacilities::where('id', '>', 0,)
        // ->orderBy('id', 'desc')
        ->get()->paginate(25);
        $data = [
            'category_name' => 'health facilities',
            'page_name' => 'health facilities',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
    
        ];
        return view('pages.partner.health', compact($facilities))->with($data);
        // return view('service_provider.facilities.index');
    }
}
