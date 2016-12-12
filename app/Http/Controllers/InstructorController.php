<?php

namespace labtectoluca\Http\Controllers;

use Illuminate\Http\Request;
use labtectoluca\Group;
use labtectoluca\StudentGroup;
use labtectoluca\User;
use Auth;
use DB;
use Session;
use Redirect;
use labtectoluca\Http\Requests;
use labtectoluca\Http\Requests\CreateStudentRequest;
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
    public function store(CreateStudentRequest $request)
    {
        $user= User::create([
           'email'=>$request['email'],
           'password'=>$request['password'],
           'rol'=>'Student',
           'status'=>'N',
        ]);
        StudentGroup::create([
            'id_student'=>$user['id'],
            'id_group'=>$request['id'],
        ]);
        
        Session::flash('message', 'Alumno agregado al grupo correctamente');
        return $this->show($request['id']);
        
        
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
            $students = DB::table('users')
                    ->join('student_groups', 'users.id', '=', 'student_groups.id_student')
                    ->where('student_groups.id_group', '=', $id)
                    ->select('users.*')
                    ->get();
    //        $users = DB::table('')
    //        return view('instructor/groups/show', compact( 'group'));
//            return view('admin/groups/show', ['group'=>$group, $courses]);
         return view('instructor.groups.show', ['group'=>$group, 'courses'=>$courses, 'students'=>$students]);
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
