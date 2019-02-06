@extends('layouts.app')


@section('content')
<div class="container">
<div class="alert alert-light" role="alert">
<form action="{{route('post.update', ['id' => $posts->id])}}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
  <div class="form-group">
    <label for="title">title</label>
  <input type="text" class="form-control" name="title"  value="{{$posts->title}}" >
  </div>

  <div class="form-group">
    <label for="content">Descripton</label>
    <input type="text" class="form-control" name="content"  value="{{$posts->content}}" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Category</label>
    <select class="form-control" name="category_id">
      @foreach ($cat as $post )
    @if ($post->id == $posts->category_id)
    <option value="{{$post->id}}" selected > {{$post->name}}</option>

    @else
    <option value="{{$post->id}}">{{$post->name}}</option>

      @endif
      @endforeach
    </select>


    @foreach ($tags as $tag )
    <label for="title">Tag</label>
     <div class="form-check">
    <input type="checkbox" class="form-check-input" name="tags[]" value="{{$tag->id}}"  >
      {{$tag->tag}}
    </label>
        @foreach ($posts->tags   as $ta )
          @if ($tag->id == $ta->id)
          <label class="form-check-label">
              <i class="fas fa-check"></i>checked
          @endif
        @endforeach
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



@if (count($errors) > 0)
@foreach ($errors->all() as $error )
<div class="alert alert-danger">{{$error}}
</div>
@endforeach
@endif
</div>

@endsection