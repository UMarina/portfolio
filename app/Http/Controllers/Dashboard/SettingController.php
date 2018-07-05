<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;

class SettingController extends Controller
{
     public function index()
    {
        $setting=Setting::find(1);
        return view('dashboard.settings.index',[
            'setting'=>$setting
        ]);
    }
    public function store(Request $request)
    {
        $data=$request->all();
        $setting=Setting::find(1);
        $setting->update($data);
        return view('dashboard.settings.index',[
            'setting'=>(object)$data
        ]);
    
    }
}
