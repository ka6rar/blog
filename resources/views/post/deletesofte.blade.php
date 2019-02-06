
@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-bordered">

  <thead>
    <tr>
        @if (count($posts) > 0)

      <th scope="col">#</th>
      <th scope="col">Name Deletd</th>
      <th scope="col">deleted Soft</th>
    </tr>
    @foreach ($posts as $post )


  </thead>
  <tbody>
    <tr>
    <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->deleted_at}}</td>
       <td><img src="{{$post->featrued}}"></td>
       <td>
        <a class="" href="{{ route('post.hdelete',['id' => $post->id]) }}">Delete</a>
       </td>
       <td>
        <a class="" href="{{ route('post.restore',['id' => $post->id]) }}">Restore</a>
       </td>

    </tr>
    @endforeach
    <div class="row">
      <tr>
    @else
    <td>No delete</td>

    @endif
      </tr>
    </div>

  </tbody>
</table>

</div>




@endsection