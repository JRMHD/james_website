<?php

namespace App\Http\Controllers;

use App\Models\Workers;
use Illuminate\Http\Request;

class WorkersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['workers']=Workers::all();
        return view('workers')->with($data);
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
        $data=$request->all();
        // dd( $data);
        $store=Workers::create($data);
        // dd($store);
        // $store=Workers::create(
        //     [
        //         'name' => $request->name,
        //         'place_of_work'=>$request->place_of_work,
        //         'tell'=> $request->tell,
        //         'tribe'=> $request->tribe,
        //         'fee' => $request->fee,
        //         'dob'=> $request->dob,
        //         'county'=> $request->county,
        //         'gender',
        //         'next_of_keen',
        //         'id_no',


        //     ]
        //     );
            return redirect('/workers')->with('message', 'Your Data Was Updated Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Workers  $workers
     * @return \Illuminate\Http\Response
     */
    public function show(Workers $workers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Workers  $workers
     * @return \Illuminate\Http\Response
     */
    public function edit(Workers $workers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Workers  $workers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workers $workers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Workers  $workers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workers $workers)
    {
        //
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
