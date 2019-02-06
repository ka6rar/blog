@extends('layouts.app')



  @section('content')
  <div class="container">



<div class="alert alert-light" role="alert">
<form  class="" action="{{route('setting.update')}}" method="POST" >
{{ csrf_field() }}
  <div class="form-group">
    <label for="blog_name">blog name</label>
  <input type="text" class="form-control" name="blog_name"   value="{{$setting->blog_name}}">
  </div>

  <div class="form-group">
    <label for="phone_number">phon number</label>
  <input type="text" class="form-control" name="phone_number"  value="{{$setting->phone_number}}"  >
  </div>




     <div class="form-group">
    <label for="blog_email"> blog email</label>
    <input type="text" class="form-control" name="blog_email" value="{{$setting->blog_email}}">
  </div>


      <div class="form-group">
    <label for="address"> address</label>
    <input type="text" class="form-control" name="address"  value="{{$setting->address}}"  >
  </div>


  <button type="submit" class="btn btn-primary">update</button>
</form>
</div>
</div>


@endsection