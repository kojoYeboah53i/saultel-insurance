<?php

namespace App\Http\Controllers\ServiceProvider;

use App\Http\Controllers\Controller;
use App\Models\Health;
use App\Models\healthFacilities;
use Faker\Extension\Container;
use Illuminate\Http\Request;


class FacilitiesController extends Controller
{
    //
    public function index()
    {

        // return view('service_provider.facilities.index');
    }
    public function getServiceProviders(){
        $facilities = healthFacilities::all()->paginate();
        // dd($facilities);
        $data = [
            'category_name' => 'health facilities',
            'page_name' => 'health facilities',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
    
        ];
        return view('pages.partner.health', compact('facilities'))->with($data);
    }

    // edit facility
    public function update($id)
    {
        $facility = healthFacilities::find($id);
        return view('service_provider.facilities.edit', compact('facility'));
    }

    //delete facility
    public function delete($id)
    {
        $facility = healthFacilities::find($id);
        $facility->delete();
        return redirect()->back();
    }
        



}