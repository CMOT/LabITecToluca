<?php

namespace labtectoluca\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use labtectoluca\Group;
use labtectoluca\Http\Requests;
use labtectoluca\Http\Requests\GroupCreateRequest;
use labtectoluca\Http\Controllers\Controller;

class GroupController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin', ['only'=>'index']);
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $groups = Group::all();
        return view("admin/groups/index", compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return "estoy en el create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(GroupCreateRequest $request)
    {
        return $request->title;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $group = Group::find($id);
        $courses = DB::table('courses')->where('id_group', '=', $id)->get();
//        $users = DB::table('')
//        return view('instructor/groups/show', compact( 'group'));
        return view('admin/groups/show', ['group'=>$group, $courses]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
