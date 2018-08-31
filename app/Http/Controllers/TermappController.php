<?php

namespace App\Http\Controllers;

use App\Termapp;
use App\Project;
use App\Supervisor;
use DB;
use Illuminate\Http\Request;

class TermappController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function home(Request $request){

        $students = Termapp::all();
        $supervisors = Supervisor::all();
        $projects = Project::all();

        $matric = $request['matric'];


        return view('welcome')->withProjects($projects)->withStudents($students)->withSupervisors($supervisors);
    }

    public function dashboard(){

         $students = Termapp::all();
         $supervisors = Supervisor::all();
         $projects = Project::all();
    
        return view('dashboard')->withProjects($projects)->withStudents($students)->withSupervisors($supervisors);

    }

    public function edit(Request $request){


        return view('edit');
    }













    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Termapp  $termapp
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Termapp $termapp)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Termapp  $termapp
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Termapp $termapp)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Termapp  $termapp
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Termapp $termapp)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Termapp  $termapp
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Termapp $termapp)
    // {
    //     //
    // }
}
