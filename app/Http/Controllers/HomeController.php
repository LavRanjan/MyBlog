<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*
    | Home controller Methods starts here
    |-----------------------------------------*/

    public function index(){
        // return 'success';
        return view('Home.index');
    }

    public function showResume(){
        return view('Home.resume');
    }

    public function showProjects(){
        return view('Home.projects');
    }

}
