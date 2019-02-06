@extends('layouts.app')

  @section('content')
  <div class="container">
<div class="alert alert-light" role="alert">
<form action="{{route('tags.store')}}" method="POST" >
{{ csrf_field() }}
  <div class="form-group">
    <label for="title">Tag</label>
  <input type="text" class="form-control" name="tag"  >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>

@if (count($errors) > 0)
@foreach($errors->all() as $error)
{{$error}}
@endforeach()
@endif

@endsection