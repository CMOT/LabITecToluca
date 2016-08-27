<?php

namespace labtectoluca\Http\Controllers;

use Illuminate\Http\Request;

use labtectoluca\Http\Requests;
use labtectoluca\Http\Controllers\Controller;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('index');
    }

   
    public function contacto()
    {
        return view('contact');
    }

}
