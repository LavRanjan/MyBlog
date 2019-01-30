<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
use Config;
use Artisan;
use Redirect;

class LoginController extends Controller
{
    //

    public function doLogin(Request $request){
        //remove this when "Remember me" field will be added in the UI
        $request->request->add(['remember' => 0]);
        $request->request->add(['email' => 'lavranjankumar@gmail.com']);

        //calling function "loggingIn" in AccountLogin Model
        $loginValue = User::loggingIn(strtolower($request->get('email')), $request->get('password'),$request->get('remember'));

        if ($loginValue['authenticated'] == true) {

            return response()->json(['status' => 'success']);
        }
        else {

            /* unsuccess response */
            return redirect()->back()->with('error','Email Address and Password do not match.');
        }
    }

    public function logout(){
        Auth::logout();

        Session::flush();
        /*
            clearing all cache with permission on logout
        */
        Artisan::call('cache:clear');
        return redirect()->route('admin');
    }
}
