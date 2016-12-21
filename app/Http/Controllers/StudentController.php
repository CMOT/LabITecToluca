<?php

namespace labtectoluca\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Redirect;
use labtectoluca\Group;
use Auth;
use labtectoluca\Http\Requests;
use labtectoluca\Http\Controllers\Controller;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $groups = DB::table('groups')
                ->join('student_groups', 'groups.id', '=', 'student_groups.id_group')
                ->join('users', 'groups.id_instructor', '=' , 'users.id')
                ->where('student_groups.id_student', '=', $id)
                ->select('groups.id as idgr', 'groups.title', 'groups.subject' ,'users.*')
                ->get();
        return view('student/index', ['groups'=>$groups]);
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
//        $course = DB::table('courses')->where('id_group', '=', $id);
        $idUser = Auth::user()->id;
        $sections = DB::table('sections')
                    ->join('courses', 'sections.id_course','=','courses.id')
                    ->join('groups', 'courses.id_group', '=', 'groups.id')
                    ->where('id_group', '=', $id)
                    ->select('sections.id', 'sections.title', 'sections.description', 'sections.start_date', 'sections.end_date')
                    ->get();
        foreach($sections as $sect){
            $resources = DB::table('resources')
                ->join('resource_sections', 'resources.id', '=', 'resource_sections.id_resource')
                ->where('resource_sections.id_section', '=', $sect->id)
                ->get();
            $practices = DB::table('practice_details')
                ->join('practice_sections', 'practice_details.id', '=', 'practice_sections.id_practice_detail')
                ->join('practices','practices.id','=','practice_details.id_practice')
                ->where('practice_sections.id_section', '=', $sect->id)
                ->where('practice_sections.id_student','=', $idUser)
                ->select('practice_details.*', 'practices.*', 'practice_details.status as estatus')
                ->orderBy('practice_details.status')
                ->get();
            $sect->resources =$resources;
            $sect->practices =$practices;
        }
        return view('student.groups.show', ['group'=>$group, 'sections'=>$sections ]);
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
