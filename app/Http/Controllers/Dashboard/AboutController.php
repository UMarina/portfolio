<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $about=About::find(1);
        return view('dashboard.about.index',[
            'about'=>$about
        ]);
    }
    public function store(Request $request)
    {
        $data=$request->all();
        $about=About::find(1);
        $about->update($data);
        return view('dashboard.about.index',[
            'about'=>(object)$data
        ]);
    
    }
}
