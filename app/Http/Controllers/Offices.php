<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Office;
use Validator;

class Offices extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Office::paginate(10);
        return view(ad.'.offices.index',['title'=>trans('admin.offices'),'all'=>$all]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(ad.'.offices.create',['title'=>trans('admin.newcatogres')]);
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
        'country'=>'required|alpha',
        'city'=>'required|alpha',
        'address'=>'required'

        ];
        $validate= Validator::make($r->all(),$rules);
        $validate->setAttributeNames([
            'country'=>trans('admin.country'),
            'city'=>trans('admin.city'),
            'address'=>trans('admin.address'),

            ]);
        if($validate->fails())
        {
            return redirect()->back()->withInput()->withErrors($validate);
        }
        else{
            $add = new Office;
            $add->country =$r->input('country');
            $add->city =$r->input('city');

            $add->address =$r->input('address');
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
        $edit = Office::find($id);
        return view(ad.'.offices.edit',['title'=>$edit->country,'edit'=>$edit]);
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
        'country'=>'required|alpha',
        'city'=>'required|alpha',
        'address'=>'required'

        ];
        $validate= Validator::make($r->all(),$rules);
        $validate->setAttributeNames([
            'country'=>trans('admin.country'),
            'city'=>trans('admin.city'),
            'address'=>trans('admin.address'),

            ]);
        if($validate->fails())
        {
            return redirect()->back()->withInput()->withErrors($validate);
        }
        else{
            $add = Office::find($id);
            $add->country =$r->input('country');
            $add->city =$r->input('city');

            $add->address =$r->input('address');
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
        Office::find($id)->delete();
        session()->flash('success',trans('admin.deleted'));
                return redirect()->back();
    }
}
