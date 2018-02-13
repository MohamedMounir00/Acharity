<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Order;
use Validator;
use App\Order_cat;
use Illuminate\Support\MessageBag;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allorder= [];
        if(auth()->user()->level == 'admin' )
        {
            $allorder= Order::paginate(10);
        }
        else{
            $allorder=Order::where('user_id',auth()->user()->id)->paginate(10);
        }

         
        return view(ad.'.order.index',['title'=>trans('admin.order'),'all'=>$allorder]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {

        $cats = [];
        foreach(Order_cat::all() as $cat) {
            $cats[$cat->id] = $cat->name;

        }
       return view(ad.'.order.create',['title'=>trans('admin.neworders')])->with('cats',$cats);
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
        'title'=>'required',
        'content'=>'required',
        'cat_id'=>'required'

        ];
        $validate= Validator::make($r->all(),$rules);
        $validate->setAttributeNames([
            'title'=>trans('admin.title'),
            'content'=>trans('admin.content'),
            'cat_id'=>trans('admin.cat_id'),

            ]);
        if($validate->fails())
        {
            return redirect()->back()->withInput()->withErrors($validate);
        }
        else{
            $add = new Order;
            $add->title =$r->input('title');
            $add->content =$r->input('content');

            $add->cat_id =$r->input('cat_id');
             $add->user_id = auth()->user()->id;
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
        $cats = [];
        foreach(Order_cat::all() as $cat) {
            $cats[$cat->id] = $cat->name;

        }
    
        $edit = Order::find($id);
        return view(ad.'.order.edit',['title'=>$edit->title,'edit'=>$edit])->with('cats',$cats);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {$rules=[
        'title'=>'required',
        'content'=>'required',
        'cat_id'=>'required'

        ];
        $validate= Validator::make($r->all(),$rules);
        $validate->setAttributeNames([
            'title'=>trans('admin.title'),
            'content'=>trans('admin.content'),
            'cat_id'=>trans('admin.cat_id'),

            ]);
        if($validate->fails())
        {
            return redirect()->back()->withInput()->withErrors($validate);
        }
        else{
            $add =Order::find($id);
            $add->title =$r->input('title');
            $add->content =$r->input('content');

            $add->cat_id =$r->input('cat_id');
             $add->user_id = auth()->user()->id;
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
        Order::find($id)->delete();
        session()->flash('success',trans('admin.deleted'));
                return redirect()->back();
    }
}
