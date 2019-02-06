@extends('layouts.app')

@section('content')
<div class="container">
  <h3 class="text-center">Users</h3>
    <table class="table table-bordered">

  <thead>
    <tr>

      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Admin</th>
      <th scope="col">Users</th>
    </tr>
    @foreach ($users as $user )

  </thead>
  <tbody>
    <tr>
    <th class="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>
          @if ($user->admin)

           @else
        </td>
        <td>
            <a class="btn btn-success " href="{{ route('users.admin',['id' => $user->id ]) }}">Make Admin</a>
         </td>

        @endif



        @if ($user->admin)
        <a class="btn btn-danger" href="{{ route('users.notAdmin',['id' => $user->id ]) }}">Not admin</a>

         @else
      </td>
      <td>
       </td>

      @endif

    </tr>
    @endforeach


  </tbody>
</table>
</div>



@endsection