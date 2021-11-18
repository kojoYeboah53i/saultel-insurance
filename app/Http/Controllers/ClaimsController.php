<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Partner;
use App\Models\Subscriber;

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
        $subscriber = new Partner;
        $subscriber->name = 'Dosh';
        $subscriber->email = 'dosh@mail.com';
        $subscriber->address = '45 Airport, Accra';
        $subscriber->phone = '+2332456000';
        $subscriber->save();
        // $subscribers = Subscriber::all();
        // dd($subscribers);
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
