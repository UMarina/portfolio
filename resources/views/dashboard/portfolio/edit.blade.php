@extends('layouts.dashboard')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Portfolio create</h1>
</div>
<div class="row">
   <div class="col-md-5">
    <form method="POST" action="{{ route('portfolio.update',$portfolio->id)}}" enctype="multipart/form-data">
     {{ method_field('PUT') }}
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $portfolio->title }}">
         @if ($errors->has('title'))
        <span class="help-block"><strong>{{ $errors->first('title') }}</strong></span>
        @endif
      </div>
      <div class="form-group">
        <label for="url">URL</label>
        <input type="text" name="url" class="form-control" id="url" placeholder="URL" value="{{ $portfolio->url }}">
      </div>
       <div class="form-group">
        <label for="category">URL</label>
        <input type="text" name="category" class="form-control" id="category" placeholder="Category" value="{{ $portfolio->category }}">
         @if ($errors->has('category'))
        <span class="help-block"><strong>{{ $errors->first('category') }}</strong></span>
        @endif
      </div>
      <div class="form-group">
        <label for="file">File input</label>
        <input type="file" name="preview" id="file">
      </div>
         @if ($errors->has('preview'))
        <span class="help-block"><strong>{{ $errors->first('preview') }}</strong></span>
        @endif
      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control"name="description" id="description">{{ $portfolio->description }}</textarea> 
        @if ($errors->has('description'))
        <span class="help-block"><strong>{{ $errors->first('description') }}</strong></span>
        @endif 
      </div>
      <button type="submit" class="btn btn-default">Save</button>
      {{ csrf_field() }}
</form>
    </div>
    <div class="col-md-7"></div>
</div>
@endsection