<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\StudentProgress;
use App\Models\StudentDetail;
use App\Models\User;

use App\Http\Requests\StoreStudentProgressRequest;
use App\Http\Requests\UpdateStudentProgressRequest;

class StudentProgressController extends Controller
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
     * @param  \App\Http\Requests\StoreStudentProgressRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = User::find($request->student_id)->StudentDetail;
        $student->increment('point',$request->point);
        $StudentProgress = new StudentProgress;
        $StudentProgress->student_id = $request->student_id;
        $StudentProgress->milestone_id = $request->milestone_id;
        $StudentProgress->save();
        return redirect(url()->previous()."#goHere"); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentProgress  $studentProgress
     * @return \Illuminate\Http\Response
     */
    public function show(StudentProgress $studentProgress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentProgress  $studentProgress
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentProgress $studentProgress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentProgressRequest  $request
     * @param  \App\Models\StudentProgress  $studentProgress
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentProgressRequest $request, StudentProgress $studentProgress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentProgress  $studentProgress
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $studentProgress = StudentProgress::find($id);
        $studentProgress->student->StudentDetail->decrement('point',$studentProgress->milestone->point);
        $studentProgress->delete();
        return redirect(url()->previous()."#goHere");
    }
}
