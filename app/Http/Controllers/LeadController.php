<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class LeadController extends Controller
{
    //

    public function index(){

        $Leads = ContactUs::all();
        $newLead = ContactUs::orderBy('id','desc')->first();
        return view('Leads.index')->with(compact('Leads','newLead'));
    }

    public function show($id){

        $lead = ContactUs::findorfail($id);

        return view('Leads.view')->with(compact('lead'));

        // return dd($lead);
    }

    public function create($id){

        $lead = ContactUs::findorfail($id);

        return view('Leads.view')->with(compact('lead'));

        // return dd($lead);
    }
}
