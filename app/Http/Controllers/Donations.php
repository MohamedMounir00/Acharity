<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Donation;
use App\Catogrey;
use App\User;
use App\Office;
use Validator;
use App\ArchiveDonation;
use App\Order;


class Donations extends Controller
{

  public function __construct()
  {
    $this->Middleware('IsAdmin', ['only' => ['edit', 'update', 'getDelete','postDelete']]);
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

         $allDonation=[];
         if(auth()->user()->level == 'admin')
         {
          $allDonation= Donation::paginate(10);
         }
         else
         {
          $allDonation=Donation::where('user_id',auth()->user()->id)->paginate(10);

         }


        
        return view(ad.'.donations.index',['title'=>trans('admin.donations'),'all'=>$allDonation]);

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
        $Catogrey = [];
        foreach(Catogrey::all() as $catogrey) {
            $Catogrey[$catogrey->id] = $catogrey->cat_name;
        }

        return view(ad.'.donations.create',['title'=>trans('admin.addnewdonations')])->with('offices',$offices)->with('Catogrey',$Catogrey);
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
        'name'=>'required|',
        'price'=>'required|numeric',
        'office_id'=>'required',
        'cat_id'=>'required',

        ];
          $validator= Validator::make($r->all(),$rules);
    $validator->setAttributeNames([
        'name'=>trans('admin.donationname'),
        'price'=>trans('admin.price'),
        'office_id'=>trans('admin.office_id'),
        'cat_id'=>trans('admin.cat_id'),
        ]);

    if($validator->fails() )
        {
           return redirect()->back()->withInput()->withErrors($validator);
        }
        else
        {
            $add= new Donation;
            $add->name =$r->input('name');
             $add->price =$r->input('price');
              $add->office_id =$r->input('office_id');
               $add->cat_id =$r->input('cat_id');
               $add->date = date('Y-m-d H:i:s');  
               $add->payment_method = $r->input('payment_method');
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

        $orders = [];
        foreach(Order::where('status', 'open')->get() as $order) {
            $orders[$order->id] = $order->id.' - '.$order->title;

        }

        $offices = [];
        foreach(Office::all() as $officess) {
            $offices[$officess->id] = $officess->city;

        }
        $Catogrey = [];
        foreach(Catogrey::all() as $catogrey) {
            $Catogrey[$catogrey->id] = $catogrey->cat_name;
        }
         $edit= Donation::find($id);
        return view(ad.'.donations.edit',['title'=>$edit->name,'edit'=>$edit])->with('offices',$offices)->with('Catogrey',$Catogrey)->with('orders',$orders);
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
        'name'=>'required|alpha',
        'price'=>'required|numeric',
        'office_id'=>'required',
        'cat_id'=>'required',
        'reason'=>'required',
        'order_id'=>'required',

        ];
          $validator= Validator::make($r->all(),$rules);
    $validator->setAttributeNames([
        'name'=>trans('admin.donationname'),
        'price'=>trans('admin.price'),
        'office_id'=>trans('admin.office_id'),
        'cat_id'=>trans('admin.cat_id'),
        ]);

    if($validator->fails() )
        {
           return redirect()->back()->withInput()->withErrors($validator);
        }
        else
        {
            $donation =  Donation::find($id);
            if($donation){
            $addarch = new  ArchiveDonation ;
            $addarch->name = $donation->name;
            $addarch->price = $donation->price;
            $addarch->office_id = $donation->office_id;
            $addarch->cat_id= $donation->cat_id;
            $addarch->date = $donation->date;
            $addarch->user_id = $donation->user_id;
            $addarch->payment_method = $donation->payment_method;
            $addarch->proccess_type = 'edit';
            $addarch->reason = $r->input('reason');
            $addarch->order_id = $r->input('order_id');
            if($addarch->save())
            {
                $order_edit = Order::find($r->input('order_id'));
                $order_edit->status = 'close';
                $order_edit->save();

                $donation->name              = $r->input('name');
                $donation->price             = $r->input('price');
                $donation->office_id         = $r->input('office_id');
                $donation->cat_id            = $r->input('cat_id');
                $donation->date              = date('Y-m-d H:i:s');  
                $donation->payment_method    = $r->input('payment_method');
                $donation->user_id           = auth()->user()->id;
                if($donation->save())
                {
                    session()->flash('success',trans('admin.addsystem'));
                    return redirect()->back();
                }else {
                    session()->flash('error',trans('admin.error')); // خطاء فى ارسال البيانات
                    return redirect()->back();
                }
            } else {
                session()->flash('error',trans('admin.error')); // خطاء فى ارسال البيانات
            return redirect()->back();
            }
            }
            else{

                session()->flash('error',trans('admin.error')); // خطاء فى ارسال البيانات
            return redirect()->back();
            }
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
       
    }

    public function getDelete($id)
    {
         $orders = [];
        foreach(Order::where('status', 'open')->get() as $order) {
            $orders[$order->id] = $order->id.' - '.$order->title;

        }
        $edit= Donation::find($id);
        return view(ad.'.donations.del',['title'=>$edit->name,'edit'=>$edit])->with('orders',$orders);
    }

    public function postDelete(Request $r,$id)
    {
        $deletdonamtion = Donation::find($id);
        if( $deletdonamtion)
        {
         $rules=[
            'reason'=>'required',
            'order_id'=>'required'
        ];
        $validator= Validator::make($r->all(),$rules);
        $validator->setAttributeNames([
            'reason'=>trans('admin.reason'),
            'order_id'=>trans('admin.order_id')
    
        ]);
        if($validator->fails() )
        {
           return redirect()->back()->withInput()->withErrors($validator);
        }
        else
        {
            $donation =  Donation::find($id);
            if($donation){
            $addarch = new  ArchiveDonation ;
            $addarch->name = $donation->name;
            $addarch->price = $donation->price;
            $addarch->office_id = $donation->office_id;
            $addarch->cat_id= $donation->cat_id;
            $addarch->date = $donation->date;
            $addarch->user_id = $donation->user_id;
            $addarch->payment_method = $donation->payment_method;
            $addarch->proccess_type = 'delete';
            $addarch->reason = $r->input('reason');
            $addarch->order_id = $r->input('order_id');
                if($addarch->save()){
                    $order_edit = Order::find($r->input('order_id'));
                    $order_edit->status = 'close';
                    $order_edit->save();

                    $donation->delete();
                    session()->flash('success',trans('admin.deleted'));
                    return redirect('cpanel/donations');

                }
            }
        }

    }

         
    }

    public function printDomation($id)
    {
      $print= Donation::find($id);
        return view(ad.'.donations.voacher',['title'=>$print->name,'print'=>$print]);
    }
}

