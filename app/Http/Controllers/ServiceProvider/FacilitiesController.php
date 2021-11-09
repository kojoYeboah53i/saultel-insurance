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
        // $request->session()->forget('success');

        $data = [
            'category_name' => 'service-providers',
            'page_name' => 'view-service-providers',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
    
        ];

        return view('serviceProvider.view', compact('facilities'))->with($data);

    }

    // edit facility
    public function update(Request $request, $id)
    {
        $facility = healthFacilities::findOrFail($id);
        // dd($facility);
        $facility->update($request->all());
        if($facility){
            $request->session()->flash('success', 'Facility updated successfully');//->flash('type', 'success');
        }
        $facilities = healthFacilities::all()->paginate();
        $data = [
            'category_name' => 'service-providers',
            'page_name' => 'view-service-providers',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
    
        ];

        return view('serviceProvider.view', compact('facilities'))->with($data);
    }

    //delete facility
    public function delete($id)
    {
        $facility = healthFacilities::find($id);

        if ($facility->delete()) {
            return redirect()->back()->with('success', 'Facility deleted successfully');
        }

    }

    public function editSpecific($id){
   
        $data = [
            'category_name' => 'service-providers',
            'page_name' => 'edit-service-providers',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',

        ];

        $facility= healthFacilities::findOrFail($id);

        return view('serviceProvider.edit', compact('facility'))->with($data);

    }
        



}
