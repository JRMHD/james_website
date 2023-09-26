<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $data['students']=Students::all();
            // dd($data['students']);
            return view('student')->with($data);
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
        
        $store=Students::create($data);
        // $store = Students::create([
        //     'name' => $request->name,
        //     'course' => $request->course,
        //     'level' => $request->level,
        //     'dob' => $request->dob,
        //     'fee' => $request->fee,
        //     'paid' => $request->paid,
        //     'tribe' => $request->tribe,
        //     'county' => $request->county,
        //     'gender' => $request->gender,
        //     'next_of_keen' => $request->next_of_keen,
        //     'tell' => $request->tell,
        //     'id_no' => $request->id_no
        // ]);
       return redirect('/students')->with('message', 'Your Data Was Updated Succesfully');
        //    dd($store);
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
