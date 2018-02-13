<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Setting;

class Settings extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function set()
    {
          return Setting::orderBy('id','desc')->first();
    }
    public function main()
    {
      
        return view(ad.'.settings.main',['title'=>trans('admin.settings'),'setting'=>Settings::set()]);
    }

    //`id`, `site_maintenance`, `site_register`, `site_auto_active`, `sitename`, `siteurl`, `sitemail`, `driver`, `message_maintenance`, `site_smtp_host`, `site_smtp_email`, `site_smtp_port`, `site_smtp_pass`, 
    public function mainsave(Request $r)
    {
        $update = Setting::find(Settings::set()->id);
         $update->sitename              =$r->input('sitename');
         $update->siteurl               =$r->input('siteurl');
         $update->sitemail              =$r->input('sitemail');
         $update->site_maintenance      =$r->input('site_maintenance');
         $update->site_register         =$r->input('site_register');
         $update->site_auto_active      =$r->input('site_auto_active');
         $update->site_smtp_host        =$r->input('site_smtp_host');
         $update->driver                =$r->input('driver');
         $update->site_smtp_email       =$r->input('site_smtp_email');
         $update->site_smtp_port        =$r->input('site_smtp_port');
         $update->site_smtp_pass        =$r->input('site_smtp_pass');
         $update->message_maintenance   =$r->input('message_maintenance');
         $update->save();
         session()->flash('success',trans('admin.systemupdate'));
         return redirect()->back();


    }

    }