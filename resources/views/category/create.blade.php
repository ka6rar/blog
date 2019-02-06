@extends('layouts.app')

@section('content')

<div class="container">

<div class="alert alert-light" role="alert">

<form action="{{route('caregory.store')}}" method="POST">
{{ csrf_field() }}
  <div class="form-group">
    <label for="name">name</label>
    <input type="text" class="form-control" name="name" >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@if (count($errors) > 0)

@foreach ($errors->all() as $error)
{{$error}}
@endforeach
@endif
</div>
</div>


@endsection