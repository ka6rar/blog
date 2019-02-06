<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
           return view('setting.setting')->with('setting' , Setting::first());
    }




    public function update(Request $request)
    {
        $setting = Setting::first();

        $setting->blog_name = $request->blog_name;
        $setting->phone_number = $request->phone_number;
        $setting->blog_email = $request->blog_email;
        $setting->address = $request->address;
        $setting->save();

        return  redirect()->back();
    }


}
