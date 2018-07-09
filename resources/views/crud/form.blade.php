@extends('layouts.dashboard')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ ucfirst($model) }}</h1>
</div>

<form method="post" action="/dashboard/{{ $model }}">
    <div class="form-group">
        <label for="skill">Skill</label>
        <input type="text" name="skill" class="form-control" id="skill" placeholder="Skill">
      </div>
      <div class="form-group">
        <label for="value">Value</label>
        <input type="text" name="value" class="form-control" id="value" placeholder="Value">
      </div>
    {{ csrf_field() }}
    <button type="submit" class="btn btn-default">Save</button>
</form>

@endsection