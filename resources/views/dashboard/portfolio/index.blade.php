@extends('layouts.dashboard')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Portfolio page</h1>
</div>
 <div class="nav-button">
     <a href="{{url('/dashboard/portfolio/create')}}" class="btn btn-success" >Добавить</a>
     <br>
     <br>
 </div>
  <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>URL</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
               @foreach($portfolio as $p)
                <tr>
                  <td>{{ $p->id }}</td>
                  <td>{{ $p->title }}</td>
                  <td>{{ $p->url }}</td>
                  <td><a href="{{ route('portfolio.edit',$p->id)}}" class="btn btn-info">Edit</a></td>
                  <td>delete</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>

@endsection