<?php

namespace labtectoluca\Http\Controllers;

use Illuminate\Http\Request;
use labtectoluca\Group;
use Auth;
use DB;
use labtectoluca\Http\Requests;
use labtectoluca\Http\Controllers\Controller;

class InstructorController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth');
//        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idInstructor= Auth::user()->id;
        $groups = DB::table('groups')->where('id_instructor', '=', $idInstructor )->get();
        return view('instructor.index', compact('groups'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $group = Group::find($id);
            $courses = DB::table('courses')->where('id_group', '=', $id)->get();
    //        $users = DB::table('')
    //        return view('instructor/groups/show', compact( 'group'));
//            return view('admin/groups/show', ['group'=>$group, $courses]);
         return view('instructor.groups.show', ['group'=>$group, 'courses'=>$courses]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         return view('instructor.groups.show');
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
    
    /**
     * Load the group
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function group($id){
        $group = Group::find($id);
        $courses = DB::table('courses')->where('id_group', '=', $id)->get();
    //        $users = DB::table('')
    //        return view('instructor/groups/show', compact( 'group'));
//            return view('admin/groups/show', ['group'=>$group, $courses]);
         return view('instructor.groups.show', ['group'=>$group, 'courses'=>$courses]);
//        return view('instruct or.groups.show');
    }
    
}
