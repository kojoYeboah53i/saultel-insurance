<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Partner;
use App\Models\Subscriber;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        if (!auth()->check()) {
            return redirect('/login');
        }

         $user = auth()->user();
        //  dd($user->name, $user->role_id);

        if (auth()->user()->role_id == 1) {
            $data = [
                'category_name' => 'sales',
                'page_name' => 'sales',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',
            ];
            return view('dashboard', compact('user'))->with($data);
        } 
        if (auth()->user()->role_id == 2) {
            $data = [
                'category_name' => 'partner',
                'page_name' => 'partner',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',
            ];
            return view('partner.index', compact('user'))->with($data);
        } 

        if (auth()->user()->role_id == 3) {
            $data = [
                'category_name' => 'pages',
                'page_name' => 'service provider',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',
            ];
            return view('servicepovider.index', compact('user'))->with($data);
        } 
    }


    public function partners(){
        $user = auth()->user();

        if(auth()->user()->role_id == 1){
            $data = [
                'category_name' => 'partner',
                'page_name' => 'partner',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',
            ];
            $partners = User::where('role_id', 2)->get();
            // $subscribers = Subscriber::all();//where('partner_id', 1)->get();
             $subscribers = Subscriber::where('partner_id', 1)->count();//->subscribers()->get();
            //  $part = Partner::findOrFail(1)->subscriber();//where('partner_id', 1)->count();//->subscribers()->get();
            return view('partner.admin', compact('user',  'partners', 'subscribers'))->with($data);
        }
        else redirect('/login');

    }

    public function createPartner(){
        $user = auth()->user();

        if(auth()->user()->role_id == 1){
            $data = [
                'category_name' => 'partner',
                'page_name' => ' create partner',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',
            ];
            return view('partner.create', compact('user'))->with($data);
        }
        else redirect('/login');
    }
    
    public function createPartners(Request $request){
        $user = auth()->user();

        if(auth()->user()->role_id == 1){

            dd($request->all());
            $data = [
                'category_name' => 'partner',
                'page_name' => ' create partner',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',
            ];
            return view('partner.admin', compact('user'))->with($data);
        }
        else redirect('/login');
    }
     public function login()
     {
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
