<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use App\Models\ContactUs;
use Mail;
class ContactUsController extends Controller
{
    /*Controller function starts from here
    --------------------------------------*/

    public function index(){
        // return $value/2;

        return view('Home.contactus');

    }

    public function store(Request $request){

        $messsages = array(
            'name.required'=>'Please enter your name.',
            'email.required'=>'please enter your email.',
            'message.required'=>'please enter your message.',

        );
        $validator = Validator::make($request->all(), [
            'name'    => 'required|string|max:255',
            'email' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string'
        ],$messsages);

        if ($validator->fails()) {
            // return dd();
            return response()->json(['status' =>  json_decode($validator->getMessageBag())]);
        }

        //calling query which will create a row in contactus table
        // $value = ContactUs::storeAndsendMail($request);
        $leadCreated = ContactUs::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'message'=>$request->get('message'),
        ]);

        if ($leadCreated) {

            $response =  $this->sendContactUsAcknowledgement($leadCreated);

            if($response == 'success')
                return response()->json(['status' => 'success']);
            else
                return response()->json(['status' => 'error']);
        }
        else {
            return response()->json(['status' => 'exception']);
        }
    }

    /*compose and send verification email to user
    -------------------------------------------------------*/
    public function sendContactUsAcknowledgement($user){
        try{

            $data = array(
                'name' =>$user->name,
            );

            /*getting value from .env file , please update .env file if not.*/

            $from_name = env("MAIL_USERNAME");
            $from_email = env("MAIL_FROM");

            /*call mail function here with required parameter
            --------------------------------------------------------*/
            Mail::send('Email.send-mail', $data, function ($message) use ($from_name,$from_email,$user) {

                $message->from($from_email, $from_name);

                $message->to($user->email)->subject('Acknowledgement- Lav Ranjan Blog');

            });
            return 'success';

        } catch (Exception $e) {
            return 'unsuccess';
        }
    }

}
