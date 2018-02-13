<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Office;
use Validator;

class Users extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offices = [];
        foreach(Office::all() as $officess) {
            $offices[$officess->id] = $officess->city;
        }
        $all= User::paginate(10);
        return view(ad.'.users.index',['title'=>trans('admin.users'),'all'=>$all])->with('offices',$offices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $offices = [];
        foreach(Office::all() as $officess) {
            $offices[$officess->id] = $officess->city;
        }
        return view(ad.'.users.create',['title'=>trans('admin.newusers')])->with('offices',$offices);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $rules=[

            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required',
            'country'=>'required',
            'city'=>'required',
            'address'=>'required',
            'pesonal_id'=>'required',
            'mobile_1'=>'required|numeric',
             'digree'=>'required',
              'level'=>'required',
               'office_id'=>'required'

        ];
        $validator= Validator::make($r->all(),$rules);
    $validator->setAttributeNames([
        'name'=>trans('admin.username'),
        'email'=>trans('admin.email'),
         'password'=>trans('admin.password'),
        'country'=>trans('admin.country'),
        'city'=>trans('admin.city'),
        'address'=>trans('admin.address'),
        'pesonal_id'=>trans('admin.pesonal_id'),
        'mobile_1'=>trans('admin.mobile_1'),
        'digree'=>trans('admin.digree'),
        'level'=>trans('admin.level'),
        'office_id'=>trans('admin.office_id')





     ]);
        if($validator->fails() )
        {
           return redirect()->back()->withInput()->withErrors($validator);
        }
        else
        {
            $add= new User;
            $add->name = $r->input('name');
            $add->password=bcrypt($r->input('password'));
            $add->email = $r->input('email');
            $add->country = $r->input('country');
            $add->pesonal_id = $r->input('pesonal_id');
            $add->mobile_1 = $r->input('mobile_1');
            $add->mobile_2 = $r->input('mobile_2');
            $add->digree = $r->input('digree');
            $add->level = $r->input('level');
            $add->city = $r->input('city');
            $add->address = $r->input('address');
            $add->office_id = $r->input('office_id');
            $add->save();
              session()->flash('success',trans('admin.addsystem'));
                return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $offices = [];
        foreach(Office::all() as $officess) {
            $offices[$officess->id] = $officess->city;
        }
        $edit= User::find($id);
        return view(ad.'.users.edit',['title'=>$edit->name,'edit'=>$edit])->with('offices',$offices);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {
         $rules=[

            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'country'=>'required',
            'city'=>'required',
            'address'=>'required',
            'pesonal_id'=>'required',
            'mobile_1'=>'required|numeric',
             'digree'=>'required',
              'level'=>'required',
               'office_id'=>'required'

        ];
        $validator= Validator::make($r->all(),$rules);
    $validator->setAttributeNames([
        'name'=>trans('admin.username'),
        'email'=>trans('admin.email'),
         'password'=>trans('admin.password'),
        'country'=>trans('admin.country'),
        'city'=>trans('admin.city'),
        'address'=>trans('admin.address'),
        'pesonal_id'=>trans('admin.pesonal_id'),
        'mobile_1'=>trans('admin.mobile_1'),
        'digree'=>trans('admin.digree'),
        'level'=>trans('admin.level'),
        'office_id'=>trans('admin.office_id')





     ]);
        if($validator->fails() )
        {
           return redirect()->back()->withInput()->withErrors($validator);
        }
        else
        {
            $add=  User::find($id);
            $add->name = $r->input('name');
            $add->password=bcrypt($r->input('password'));
            $add->email = $r->input('email');
            $add->country = $r->input('country');
            $add->pesonal_id = $r->input('pesonal_id');
            $add->mobile_1 = $r->input('mobile_1');
            $add->mobile_2 = $r->input('mobile_2');
            $add->digree = $r->input('digree');
            $add->level = $r->input('level');
            $add->city = $r->input('city');
            $add->address = $r->input('address');
            $add->office_id = $r->input('office_id');
            $add->save();
              session()->flash('success',trans('admin.systemupdate'));
                return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         User::find($id)->delete();
        session()->flash('success',trans('admin.deleted'));
                return redirect()->back();
    }
}
