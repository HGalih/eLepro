<?php

namespace App\Http\Controllers;

use App\Models\employeeDetail;
use App\Http\Requests\StoreemployeeDetailRequest;
use App\Http\Requests\UpdateemployeeDetailRequest;

class EmployeeDetailController extends Controller
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
     * @param  \App\Http\Requests\StoreemployeeDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreemployeeDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employeeDetail  $employeeDetail
     * @return \Illuminate\Http\Response
     */
    public function show(employeeDetail $employeeDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employeeDetail  $employeeDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(employeeDetail $employeeDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateemployeeDetailRequest  $request
     * @param  \App\Models\employeeDetail  $employeeDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateemployeeDetailRequest $request, employeeDetail $employeeDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employeeDetail  $employeeDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(employeeDetail $employeeDetail)
    {
        //
    }
}
