<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Response;
use Validator;

// Models 
use App\Donation;


class MobileWebservice extends Controller
{

    public function Login(Request $request)
    {
        // Rules of validation fields 
        $rules=[
        'email'     => 'required|email',
        'password'  => 'required'
        ];
        // Build validator method 
        $val = Validator::make($request->all(),$rules);
        // Validator check post fields
        
        if($val->fails())
            return \Response::json(["status" => 0]);
        else
        {
            // make remember me variable for remember my username and password in session 
            $remember= true;
            // check auth prossess
            if(auth()->attempt(['email'=>$request->input('email'),'password'=>$request->input('password')],$remember))
                return \Response::json(["status" => 1]);
            else
                return \Response::json(["status" => 0]);
        }
    }

    public function getDonations()
    {
        // Get all donation in $allDonation variable
        $allDonation = Donation::all();
        // Return Donations array
        return \Response::json(["status" => 1, "data" => $allDonation]);
    }

    public function createDonation(Request $r)
    {
        // Rules of validation fields 
        $rules=[
            'name'=>'required',
            'price'=>'required',
            'office_id'=>'required',
            'cat_id'=>'required',
            ];
        // Build validator method 
        $validator= Validator::make($r->all(),$rules);
        // Validator check post fields
        if($validator->fails() )
           return redirect()->back()->withInput()->withErrors($validator);
        else
        {
            // Make new donation 
            $add = new Donation;
            $add->name      = $r->input('name');
            $add->price     = $r->input('price');
            $add->office_id =$r->input('office_id');
            $add->cat_id    =$r->input('cat_id');
            $add->date      = date(DATE_ATOM); 
            $add->payment_method = $r->input('payment_method');
            $add->user_id   = auth()->user()->id;
            // check saving proccess  
            if($add->save())
                return \Response::json(["status" => 1]);
            else
                return \Response::json(["status" => 0]);
        }
    }

}
