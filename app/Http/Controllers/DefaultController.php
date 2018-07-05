<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function index()
    {
        $setting=Setting::find(1);
        return view('default.index',[
            'setting'=>$setting
        ]);
    }
}
