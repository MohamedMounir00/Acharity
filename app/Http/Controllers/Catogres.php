<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Catogrey;
use Validator;

class Catogres extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Catogrey::paginate(10);
        return view(ad.'.catogres.index',['title'=>trans('admin.catogres'),'all'=>$all]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(ad.'.catogres.create',['title'=>trans('admin.newcatogres')]);
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
        'cat_name'=>'required|'
        
    ];
    $validator= Validator::make($r->all(),$rules);
    $validator->setAttributeNames(['cat_name'=>trans('admin.namecat') ]);
        if($validator->fails() )
        {
           return redirect()->back()->withInput()->withErrors($validator);
        }
        else{

            $add= new Catogrey;
            $add->cat_name = $r->input('cat_name');
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit= Catogrey::find($id);
        return view(ad.'.catogres.edit',['title'=>$edit->cat_name,'edit'=>$edit]);
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
        'cat_name'=>'required|alpha'
        
    ];
    $validator= Validator::make($r->all(),$rules);
    $validator->setAttributeNames(['cat_name'=>trans('admin.namecat') ]);
        if($validator->fails() )
        {
           return redirect()->back()->withInput()->withErrors($validator);
        }
        else{

            $add=  Catogrey::find($id);
            $add->cat_name = $r->input('cat_name');
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
        Catogrey::find($id)->delete();
        session()->flash('success',trans('admin.deleted'));
                return redirect()->back();

    }
}
