<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class Admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(ad.'.home',['title'=>trans('admin.home')]);
    }

     public function logout(){

        auth()->logout();
        return redirect(ADMIN.'/login');
     }

    public function login(){
        if(auth()->user())
        {
            return redirect(ADMIN);
        }

        return view(ad.'.login',['title'=>trans('admin.login')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postlogin(Request $request)
    {
        $rules=[
        'email'=>'required|email',
        'password'=>'required|min:6'
        ];
        $val = Validator::make($request->all(),$rules);
        $val->setAttributeNames([
            'email'=>trans('admin.email'),
            'password'=>trans('admin.password')

            ]);
        if($val->fails())
        {
            return redirect()->back()->withInput()->withErrors($val);
        }else
        {
                if($request->input('remember')== 1)
                {
                    $remember= true;
                }
                else
                {
                    $remember= false;
                }
                if(auth()->attempt(['email'=>$request->input('email'),'password'=>$request->input('password')],$remember))
                {
                    return redirect(ADMIN);
                }
                else{
                    session()->flash('error',trans('admin.errorlogindata'));
                    return redirect()->back();
                }
        }
    }

   
}
