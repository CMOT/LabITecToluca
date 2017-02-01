<?php

namespace labtectoluca\Http\Controllers;

use Illuminate\Http\Request;

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
    public function store($idmaterial, $idsection, $idcourse)
    {
         ResourceSection::create([
            'id_resource'=> $idmaterial,
            'id_section'=> $idsection,
        ]);
         echo 'idMaterial: '.$idmaterial;
         echo 'id_section: '.$idsection;
         echo 'idcourse: '.$idcourse;
        Session::flash('message','Se agregó el nuevo material a la sección');
        return Redirect::to('instructor.course.show', ['id'=>$idcourse]);
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
