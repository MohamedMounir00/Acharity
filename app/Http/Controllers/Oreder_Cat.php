<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Order_cat;
use Validator;

class Oreder_Cat extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Order_cat::paginate(10);
        return view(ad.'.order_cat.index',['title'=>trans('admin.order_cat'),'all'=>$all]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view(ad.'.order_cat.create',['title'=>trans('admin.newcatogres')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
         $rules= [
        'name'=>'required|'
        
    ];
    $validator= Validator::make($r->all(),$rules);
    $validator->setAttributeNames(['name'=>trans('admin.namecat') ]);
        if($validator->fails() )
        {
           return redirect()->back()->withInput()->withErrors($validator);
        }
        else{

            $add= new Order_cat;
            $add->name = $r->input('name');
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
        $edit= Order_cat::find($id);
        return view(ad.'.order_cat.edit',['title'=>$edit->name,'edit'=>$edit]);
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
       $rules= [
        'name'=>'required|alpha'
        
    ];
    $validator= Validator::make($r->all(),$rules);
    $validator->setAttributeNames(['name'=>trans('admin.namecat') ]);
        if($validator->fails() )
        {
           return redirect()->back()->withInput()->withErrors($validator);
        }
        else{

            $add=  Order_cat::find($id);
            $add->name = $r->input('name');
            $add->save();
              session()->flash('success',trans('admin.addsystem'));
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
        Order_cat::find($id)->delete();
        session()->flash('success',trans('admin.deleted'));
                return back();
    }
}
