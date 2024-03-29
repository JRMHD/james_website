<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $data['teachers']=Teachers::all();
            return view('teachers')->with($data);
        }
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
        $store=Teachers::create($data);
//  $store=Teachers::create([
//     'name'=>$request->name,
//     'dob'=>$request->dob,
//     'tribe'=>$request->tribe,
//     'salary'=>$request->salary,
//     'phone'=>$request->phone,
//     'id_no'=>$request->id_no, 
//     'county'=>$request->county,
//     'doe'=>$request->doe,
//     'next_of_keen'=>$request->next_of_keen,
//     'academic_level'=>$request->academic_level,
//     'marital_status'=>$request->marital_status,
//     'spouse_name'=>$request->spouse_name
// ]);
return redirect('/teachers')->with('message', 'Your Data Was Updated Succesfully');
        // dd($store);
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
    public function __construct()
    {
        $this->middleware('auth');
    }
}
