<?php

namespace labtectoluca\Http\Controllers;

use Session;
use Redirect;
use DB;
use labtectoluca\Http\Requests;
use labtectoluca\Http\Requests\UserUpdateRequest;
use labtectoluca\Http\Requests\UserCreateRequest;
use labtectoluca\Http\Controllers\Controller;
use labtectoluca\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class UserController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin');
        $this->beforeFilter('@find', ['only' => ['edit','update', 'destroy']]);
    }
    
    public function find(Route $route){
        $this->user = User::find($route->getParameter('users'));
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();
//        $usr= \labtectoluca\User::with(['posts' => function($query)
//
//            $query->where('title', 'like', '%first%');
//
//        }])->get();
//        $users= User::where('status' ,'A');
//        $users= DB::table('users')->where('status', '=', 'A')->get();
        return view("admin/users/index", compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("admin/users/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(UserCreateRequest $request)
    {
//        User::create($request->all());
        User::create([
            'name'=> $request['name'],
            'first_name'=> $request['first_name'],
            'last_name'=> $request['last_name'],
            'password'=> $request['password'],
            'rol'=>'Instructor',
            'email'=> $request['email'],
            'status'=>'A',
        ]);
        Session::flash('message','EL usuario ha sido creado con exito');
        return Redirect::to('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
//        $user= User::find($id);
         
        return view('admin/users/edit', ['user'=>$this->user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
//        $user= User::find($id);
        $this->user->fill($request->all());
        $this->user->save();
        
        Session::flash('message','EL usuario ha sido actualizado');
        return Redirect::to('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
//        $user  = User::find($id);
//        $this->user->status = 'D';
        $this->user->delete();
//        $user->delete();
//        $this->user->save();
        Session::flash('message', 'El usuario fue eliminado');
        return Redirect::to('/users');
    }
}
