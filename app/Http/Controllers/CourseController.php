<?php

namespace labtectoluca\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use DB;
use labtectoluca\Course;
use labtectoluca\Http\Requests;
use labtectoluca\Http\Requests\CourseCreateRequest;
use labtectoluca\Http\Controllers\Controller;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('instructor.courses.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('instructor.courses.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseCreateRequest $request)
    {
        Course::create([
            'title'=>$request['title'],
            'description'=>$request['description'],
            'id_group'=>$request['id'],
        ]);
        Session::flash('message', 'Se creó el curso correctamente');
        return Redirect::to('/instructor' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        $sections = DB::table('sections')->where('id_course', '=', $id)->get();
        
        return view('instructor.courses.show',['course'=>$course, 'sections'=>$sections]);
        
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
