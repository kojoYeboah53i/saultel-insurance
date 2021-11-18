<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Partner;
use App\Models\Subscriber;
use App\Models\ServiceProvider;

use Illuminate\Http\Request;

class ClaimsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //new subscriber
        $subscriber = new Subscriber;
        $subscriber->name = 'John Doe';
        $subscriber->email = 'mante.candace@example.net';
        $subscriber->partner_id = 1;
        $subscriber->save();
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $subscriber = new Subscriber;
        $subscriber->name = 'Jane Doe';
        $subscriber->email = 'fannie88@example.com';
        $subscriber->partner_id = 1;
        $subscriber->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $user = auth()->user();

        $data = [
            'category_name' => 'claim',
            'page_name' => 'new claim',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
        ];
        $subscribers = Subscriber::where('partner_id', 1)->get();
        $partners = Partner::all();
        $serviceProviders = ServiceProvider::all();
        return view('service.claimr', compact('user', 'subscribers', 'partners', 'serviceProviders'))->with($data);
        /*
        $search = $request->search;
        $users = User::where('name', 'LIKE', '%'.$search.'%')->get();
        $partners = Partner::where('name', 'LIKE', '%'.$search.'%')->get();
        $subscribers = Subscriber::where('name', 'LIKE', '%'.$search.'%')->get();
        return view('claims.search', compact('users', 'partners', 'subscribers'));
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
