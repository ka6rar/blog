@extends('layouts.app')

@section('content')

<div class="container">

<div class="alert alert-light" role="alert">

<form action="{{route('caregory.edit' , ['id' => $cat->id] )}}" method="POST">
{{ csrf_field() }}
  <div class="form-group">
  <label for="name">Name {{$cat->name}}</label>

  <input type="text" class="form-control" name="name" value="{{$cat->name}}"  >

  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>
</div>


@endsection