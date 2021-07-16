<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function __construct()
    {  
       $this->middleware('auth'); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classroom=Classroom::all();
        return view('classroom.index')->with('classroom',$classroom);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buildings=Building::all();
        return view('classroom.create')->with('buildings',$buildings);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'room'=>'required',
            'building'=>'required|exists:buildings,id'
        ]);
        $class=new Classroom;
        $class->insert([
            'room'=>$request->room,
            'building_id'=>$request->building
        ]);
        return redirect()->route('classroom.index')->with("success","Class created Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Classroom $classroom)
    {
        return view('classroom.edit')->with('buildings',Building::all())->with('class',$classroom);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classroom $classroom)
    {
        $this->validate($request,[
            'room'=>'required',
            'building'=>'required|exists:buildings,id'
        ]);
        $classroom->room=$request->room;
        $classroom->building_id=$request->building;
        $classroom->update();
        return redirect()->route('classroom.index')->with("success","Class updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom)
    {
        $classroom->delete();
        return redirect()->route('classroom.index')->with("success","Class deleted Successfully");
    }
}
