<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Factory\CrudFactory;

class FactoryController extends Controller
{
    private $modelName;
    
    public function __construct(Request $request)
    {
        $this->modelName=$request->route('models');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $factory=new CrudFactory();
      $model=$factory->factoryModel($this->modelName);
      $data=$model->all();
      return view('crud.index',[
            'model' => $this->modelName,
            'fields'=>$model->getFields(),
            'data'=>$data,
        ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       $factory=new CrudFactory();
      $model=$factory->factoryModel($this->modelName);
    return view('crud.form',[
        'model' => $this->modelName,
        'fields'=>$model->getFields(),
        'title'=>'create'
        
    ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        $params=$request->all();
        $factory=new CrudFactory();
        $model=$factory->factoryModel($this->modelName);
        $model->create($params);

        return redirect('/dashboard/'.$this->modelName);
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
    public function edit(Request $request)
    {  
        
        $id=$request->route('model');
        $factory=new CrudFactory();
        $model=$factory->factoryModel($this->modelName);
        $data=$model->find($id);
        return view('crud.form',[
                   'data'=>$data,
                    'model'=>$this->modelName,
                    'fields'=>$model->getFields(),
                    'title'=>$id.' edit'
       
       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       $param=$request->all();
       $id=$request->route('model');
       $factory=new CrudFactory();
       $model=$factory->factoryModel($this->modelName);
       $model->find($id)->update($param);
       return redirect('/dashboard/'.$this->modelName);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id=$request->route('model');
        if(!empty($id)){
             $factory=new CrudFactory();
       $model=$factory->factoryModel($this->modelName);
        $model->find($id)->delete();
            
        }
        return redirect('/dashboard/'.$this->modelName);
    }
}
