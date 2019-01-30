<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\ContactUs;
use Auth;

class AdminController extends Controller
{
    /*Controller function starts from here
   --------------------------------------*/

    public function login(){
//         return 'true';
        return view('Admin.login');

    }

    public function dashboard(){
//         return 'true';

        if(!Auth::User()){
            return redirect()->route('admin')->with('session','session expired');
        }


        // return dd(Auth::user()->question);
        $questions = Question::take(5)->orderBy('id','desc')->get();
        $leads =ContactUs::take(5)->orderBy('id','desc')->get();

        // return view('Home.new-index');

        return view('Admin.dashboard')
            ->with(compact('questions','leads'));

    }



}