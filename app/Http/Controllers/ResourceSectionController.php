<?php

namespace labtectoluca\Http\Controllers;

use Illuminate\Http\Request;
use labtectoluca\Course;
use labtectoluca\ResourceSection;
use labtectoluca\Http\Requests;
use labtectoluca\Http\Controllers\Controller;

class ResourceSectionController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
//        ,$idmaterial, $idsection, $idcourse
         ResourceSection::create([
            'id_resource'=> $request['idmatetial'],
            'id_section'=> $request['idsection'],
        ]);
        Session::flash('message','Se agregó el nuevo material a la sección');
        return view('instructor.courses.show');
    }
    
    private function backto($idcourse){
        $course = Course::find($idcourse);
        $sections = DB::table('sections')->where('id_course', '=', $id)->get();
        $practices = DB::table('practices')->get();
        $materials = DB::table('resources')->get();
        foreach($sections as $sec){
           $resources = DB::table('resources')
                ->join('resource_sections', 'resources.id', '=', 'resource_sections.id_resource')
                ->where('resource_sections.id_section', '=', $sec->id)
                ->get();
           $sec->resources=$resources;
           $sec->practices= $practices;
        }
         
//        $practices = DB::table('practices')->where('id_course', '=', $id)->get();
        
        
        return view('instructor.courses.show',['course'=>$course, 'sections'=>$sections, 'materials'=>$materials]);
        
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
