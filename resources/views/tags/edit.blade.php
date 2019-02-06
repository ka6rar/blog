@extends('layouts.app')

@section('content')

<div class="container">

<div class="alert alert-light" role="alert">

<form action="{{route('tags.update' , ['id' => $tag->id] )}}" method="POST">
{{ csrf_field() }}
  <div class="form-group">
  <label for="name">Name {{$tag->tag}}</label>

  <input type="text" class="form-control" name="tag" value="{{$tag->tag}}"  >

  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>
</div>


@endsection