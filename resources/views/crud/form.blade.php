@extends('layouts.dashboard')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">           
    <h1 class="h2">{{ ucfirst($model).' '.$title }}</h1>
</div>

<form method="post" action="{{ empty($data)? '/dashboard/'.$model : '/dashboard/'.$model.'/'.$data->id }}">
  
   @foreach ($fields as $field)
   
    <div class="form-group">
        <label for="{{$field}}">{{$field!='id'? ucfirst($field):''}}</label>
        <input type="{{$field=='id'? 'hidden':'text'}}" name="{{$field}}" class="form-control" id="{{$field}}" placeholder="{{ucfirst($field)}}" value="{{{$data->$field or null}}}">
    </div>
      
    @endforeach
    
    {{ csrf_field() }}
    {{ !empty($data)? method_field('PATCH'): method_field('POST')}}
    
    <button type="submit" class="btn btn-default">Save</button>
</form>

@endsection