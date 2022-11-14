@extends('master.layout')

@section('title')
    Home
@endsection

{{-- {{$hello.' '.$name}}  http://127.0.0.1:8000/Home/yahya  output (hello yahya) --}}



@section('style')
<style>
body{background-color: #eeeeee}

.grid-div{
    display: grid;
    grid-template-columns: 
    repeat(auto-fit, minmax(250px, 1fr));
    column-gap: 15px;
    row-gap: 20px;
}
.card-img-top{
    height: 250px;
}
</style>
@endsection


@section('content')
<div class="grid-div mt-4">



@foreach ($posts as $post)
<div class="card  " style="width: 18rem;">
    <img src={{$post->image}}  class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$post->title}}</h5>
      <p class="card-text">{{$post->body}}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
@endforeach
</div>
<div class="d-flex">  {{ $posts->links() }}   </div>

@endsection




{{--@section('script')
    <script></script>
@endsection--}}