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
            'category_name' => 'service-providers',
            'page_name' => 'view-service-providers',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
    
        ];
        return view('serviceProvider.view', compact('facilities'))->with($data);
        // resources\views\ServiceProvider\view.blade.php
    }

    // edit facility
    public function update($id)
    {
        $facility = healthFacilities::findOrFail($id);
        $facility->update($request->all());
        return redirect()->back()->with('success', 'Facility updated successfully');
        // return view('service_provider.facilities.edit', compact('facility'));
    }

    //delete facility
    public function delete($id)
    {
        $facility = healthFacilities::find($id);

        if ($facility->delete()) {
            return redirect()->back()->with('success', 'Facility deleted successfully');
        }

    }
        



}
