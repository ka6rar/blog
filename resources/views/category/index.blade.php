@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-bordered">

  <thead>
    <tr>

      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Edit</th>
      <th scope="col">Handle</th>
    </tr>
    @foreach ($cat as $ca )

  </thead>
  <tbody>
    <tr>
    <th scope="row">{{$ca->id}}</th>
      <td>{{$ca->name}}</td>
      <td>
   <a class="" href="{{ route('caregory.edit',['id' => $ca->id]) }}">Edit</a>

      </td>
      <td> <a class="" href="{{ route('caregory.delate',['id' => $ca->id]) }}">Delate</a>
      </td>
    </tr>
    @endforeach


  </tbody>
</table>
</div>



@endsection