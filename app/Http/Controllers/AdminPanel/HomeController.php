<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller



{
    public function index() {
        
        return view("admin.index");
    }

   

                            

    public  function setting()
    {
        $data = Setting::first();
        
        if($data==null) {
         
            $data = new Setting();
            
            $data->save();
            $data = Setting::first();
        }
         
        return view("admin.setting",['data'=> $data]);

   
    }



    public  function settingupdate(Request $request)
    {
    
        $id=$request->input('id');

        $data= Setting::find($id);
        $data->string('title')->nullable();
        $data->string('keywords')->nullable();
        $data->string('description')->nullable();
        $data->string('adress')->nullable();
        $data->string('phone')->nullable();
        $data->string('fax')->nullable();
        $data->string('email')->nullable();
        $data->string('smtpserver')->nullable();
        $data->string('smtpemail')->nullable();
        $data->string('smtppasword')->nullable();
        $data->integer('smtpport')->nullable();
        $data->string('facebook')->nullable();
        $data->string('instagram')->nullable();
        $data->string('youtube')->nullable();
        $data->string('twitter')->nullable();
        $data->text('abouts')->nullable();
        $data->text('contact')->nullable();
        //$data->text('icon')->nullable();
        $data->string('status')->nullable()->default('False');
        $data->text('references')->nullable();
        $data->timestamps();
   
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }


}
