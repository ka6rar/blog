@extends('layouts.app')

@section('content')
<div class="container">
  <h3 class="text-center">Tag</h3>
    <table class="table table-bordered">

  <thead>
    <tr>

      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Edit</th>
      <th scope="col">Handle</th>
    </tr>
    @foreach ($tags as $ta )

  </thead>
  <tbody>
    <tr>
       <td> {{$ta->id}}</td>
      <td>{{$ta->tag}}</td>
      <td>
        <a class="" href="{{ route('tags.destroy',['id' => $ta->id]) }}"><i class="far fa-trash-alt"></i></a><i class="octicon-credit-card"></i>
      </td>

      <td>
        <a class="" href="{{ route('tags.edit',['id' => $ta->id]) }}"><i title="edit" class="far fa-edit"></i></a>
      </td>
    </tr>
    @endforeach


  </tbody>
</table>
</div>



@endsection