<?php

namespace labtectoluca\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Redirect;
use labtectoluca\Section;
use labtectoluca\Http\Requests;
use labtectoluca\Http\Requests\SectionCreateRequest;
use labtectoluca\Http\Controllers\Controller;

class SectionController extends Controller
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
    public function store(SectionCreateRequest $request)
    {
        Section::create([
            'title'=>$request['title'],
            'description'=>$request['description'],
            'start_date'=>$request['start_date'],
            'end_date'=>$request['end_date'],
            'status'=>'A',
            'id_course'=>$request['id'],
        ]);
        $id= $request['id'];
        Session::flash('message', 'Se ha creado la sección correctamente');
//        return Redirect::to('/instructor/' );
        return Redirect::to('instructor/course/'.$request['id']);
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
