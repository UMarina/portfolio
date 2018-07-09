<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use File;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio=Portfolio::all();
        
        return view('dashboard.portfolio.index',[
            'portfolio'=>$portfolio
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portfolio=$request->all();
        $this->validate($request,[
             'title' => 'required|max:255',
            'description'=>'required',
            'category'=>'required|max:255',
            'preview'=>'required|mimes:jpeg'
        ]);
        if(!empty($portfolio['preview'])){
            $file=$request->file('preview');
             $hash=md5(microtime());
            $fileName=$hash.$file->getClientOriginalName();
            $file->move('uploads/portfolio',$fileName);
            $portfolio['preview']=$fileName;
        }
        Portfolio::create($portfolio);
        return redirect()->route('portfolio.index');
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
    public function edit(Portfolio $portfolio)
    {
        return view('dashboard.portfolio.edit',[
                   'portfolio'=>$portfolio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
         $data=$request->all();
        $this->validate($request,[
             'title' => 'required|max:255',
            'description'=>'required',
            'category'=>'required|max:255',
        ]);
        $path=public_path('uploads/portfolio/');
        $fullpath=$path.$portfolio->preview;
        if(!empty($data['preview'])){
             $this->validate($request,[
            'preview'=>'mimes:jpeg'
        ]);
            
            $file=$request->file('preview');
            $hash=md5(microtime());
            $fileName=$hash.$file->getClientOriginalName();
            $file->move('uploads/portfolio',$fileName);
            $data['preview']=$fileName;
            if(File::isFile($fullpath)){
            File::delete($fullpath);
            }
        }
            
        
        
        $portfolio->update($data);
         return redirect()->route('portfolio.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(POrtfolio $portfolio)
    {
        if(!empty($portfolio)){
            $path=public_path('uploads/portfolio/');
            $fullpath=$path.$portfolio->preview;
            $portfolio->delete();
            if(File::isFile($fullpath)){
            File::delete($fullpath);
            }
        }
             return redirect()->route('portfolio.index');

    }
}
