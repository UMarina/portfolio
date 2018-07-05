<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Portfolio;

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
        if(!empty($portfolio['preview'])){
            $file=$request->file('preview');
            $file->move('uploads/portfolio',$file->
                       getClientOriginalName());
            $portfolio['preview']=$file->getClientOriginalName();
        }
        Portfolio::create($portfolio);
        return redirect()->route('portfolio');
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
        if(!empty($data['preview'])){
            $file=$request->file('preview');
            $file->move('uploads/portfolio',$file->
                       getClientOriginalName());
            $data['preview']=$file->getClientOriginalName();
        }
        $portfolio->update($data);
         return redirect()->route('portfolio');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
