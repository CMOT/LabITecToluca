<?php

namespace labtectoluca\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use labtectoluca\Http\Requests;
use labtectoluca\Http\Controllers\Controller;
use labtectoluca\User;

class FrontController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth', ['only'=>'admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('index');
    }

   
    public function admin()
    {
        return view('admin/index');
    }

}
