<?php

namespace labtectoluca\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;
use labtectoluca\Group;
use labtectoluca\User;
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
        

//        $users= DB::table('users')->where('status', '=', 'A')->get();
        $users = DB::table('users')->where('rol', '=','Instructor')->get();
//        $groups = Group::all();
        $groups = DB::table('users')
            ->join('groups', 'users.id', '=', 'groups.id_instructor')
            ->select('groups.*', 'users.name', 'users.first_name')
            ->get();
        return view("admin/groups/index",['groups'=>$groups, 'users'=>$users]);
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
        $group = Group::create([
            'title'=>$request['title'],
            'subject'=>$request['subject'],
            'quantity'=>$request['quantity'],
            'id_instructor'=>$request['instructor'],
        ]);
        Session::flash('message','EL grupo ha sido creado con exito');
        return Redirect::to('/groups');
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
