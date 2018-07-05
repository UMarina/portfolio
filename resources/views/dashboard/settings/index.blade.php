@extends('layouts.dashboard')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Settings page</h1>
</div>

<form class="form-inline" method="post">
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail3">Email address</label>
    <input id="email" type="email" name="email"  value="{{$setting->email}}" class="form-control" id="exampleInputEmail3" placeholder="Email">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Password</label>
    <input type="text" name="tel" value="{{$setting->tel}}" class="form-control" id="tel" placeholder="tel">
  </div>
   {{ csrf_field()}}
  <button type="submit" class="btn btn-default">Save</button>
</form>
@endsection