<?php

namespace App\Http\Controllers;

use App\Models\studentDetail;
use App\Http\Requests\StorestudentDetailRequest;
use App\Http\Requests\UpdatestudentDetailRequest;

class StudentDetailController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorestudentDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorestudentDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\studentDetail  $studentDetail
     * @return \Illuminate\Http\Response
     */
    public function show(studentDetail $studentDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\studentDetail  $studentDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(studentDetail $studentDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatestudentDetailRequest  $request
     * @param  \App\Models\studentDetail  $studentDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatestudentDetailRequest $request, studentDetail $studentDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\studentDetail  $studentDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(studentDetail $studentDetail)
    {
        //
    }
}
