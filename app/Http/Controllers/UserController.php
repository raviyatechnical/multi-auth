<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:ROLE_USER');
    }
    //Index method for User Controller
    public function index()
    {
        return view('user.home');
    }
}
