<?php

namespace App\Http\Controllers;
use App\Models\Classes;
use App\Models\ClassMember;
use Auth;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role == 3){
        return view('manageClass')->with('classList', Auth::user()->ClassMembers()->get());
    }else{
        return view('manageClass')->with('classList', Auth::user()->SupClasses()->get());
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
        $classes = new classes;
        $classes->code = $request->code;
        $classes->classes = $request->classes;
        $classes->totalmeets = $request->totalmeets;
        $classes->age_requirement = $request->age_requirement;
        $classes->level_id = $request->level;
        $classes->category_id = $request->category;
        $classes->description = $request->description;
        $classes->application = $request->application;
        $classes->save();
        return redirect('/classess');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('showClass')->with('class',Classes::find($id));
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
