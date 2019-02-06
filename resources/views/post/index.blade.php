@extends('layouts.app')

@section('content')
<div class="container">
  <h3 class="text-center">Post</h3>
    <table class="table table-bordered">

  <thead>
    <tr>

      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Edit</th>
      <th scope="col">Handle</th>
    </tr>
    @foreach ($posts as $post )

  </thead>
  <tbody>
    <tr>
    <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td><img src="{{$post->featrued}}"></td>
      <td>
        <a class="" href="{{ route('post.edit',['id' => $post->id]) }}">{{'Edit'}}</a>

      </td>
      <td> <a class="" href="{{ route('post.delate',['id' => $post->id]) }}">Delate</a>
      </td>
    </tr>
    @endforeach


  </tbody>
</table>
</div>



@endsection