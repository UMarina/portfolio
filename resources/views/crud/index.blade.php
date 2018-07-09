@extends('layouts.dashboard')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ ucfirst($model) }} page</h1>
</div>

 <div class="nav-button">
     <a href="{{ url('/dashboard/'.$model.'/create') }}" class="btn btn-success" >Добавить</a>
     <br>
     <br>
 </div>
 
<div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                 @foreach ($fields as $field)
                 <th>{{ $field }}</th>
                 @endforeach
                 
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
              @foreach($data as $d)
              <tr>
                  @foreach($fields as $field)
                  <td>{{ $d->$field }}</td>
                  @endforeach
                  <td><a href="{{ url('/dashboard/'.$model.'/'.$d->id.'/edit')}}" class="btn btn-info">Edit</a></td>
                  <td></td>
              </tr>
              @endforeach
              </tbody>
            </table>
          </div>
@endsection