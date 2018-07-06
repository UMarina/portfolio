@extends('layouts.dashboard')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">About page</h1>
</div>
<div class="row">
    <div class="col-md-8">
       <form  method="post">
          <div class="form-group">
            <label class="sr-only" for="title">Title</label>
            <input id="title" type="text" name="title"  value="{{$about->title}}" class="form-control" id="title" placeholder="Title">
          </div>
          <div class="form-group">
            <label class="sr-only" for="exampleInputPassword3">Description</label>
            <textarea class="form-control" name="description" id="description" rows="10">{{ $about->description }}</textarea>
          </div>
           {{ csrf_field()}}
          <button type="submit" class="btn btn-default">Save</button>
        </form> 
    </div>
    <div class="col-md-4"></div>
</div>

@endsection