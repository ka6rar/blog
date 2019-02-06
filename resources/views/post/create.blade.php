@extends('layouts.app')



  @section('content')
  <div class="container">



<div class="alert alert-light" role="alert">
<form  class="" action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
  <div class="form-group">
    <label for="title">title</label>
  <input type="text" class="form-control" name="title"  >
  </div>

  <div class="form-group">
    <label for="content">Descripton</label>
    <input type="text" class="form-control" name="content"  >
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Category</label>
    <select class="form-control" name="category_id">
      @foreach ($cat as $ca )
         <option value="{{$ca->id}}"><i class="far fa-check"></i>{{$ca->name}}</option>
      @endforeach



    </select>


      @foreach ($tags as $tag )
      <label for="title">Tag</label>
    <div class="form-check">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="tag[]" id="" value="{{$tag->id}}" >
        {{$tag->tag}}
      </label>
    </div>

    @endforeach


  </div>
    <div class="form-group">
    <label for="exampleFormControlFile1">Pohte</label>
    <input type="file" class="form-control-file" name="featrued">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>


@endsection