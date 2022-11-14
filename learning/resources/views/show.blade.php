@extends('master.layout')

@section('title')
{{$post->title}}
@endsection

{{-- {{$hello.' '.$name}}  http://127.0.0.1:8000/Home/yahya  output (hello yahya) --}}



@section('style')
<style>
body{background-color: #eeeeee}


</style>
@endsection


@section('content')
<div class="grid-div mt-4">


    <div class="card " style="width: 60%;">
        <img src={{$post->image}}  class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">{{$post->body}}</p>
        </div>
      </div>

</div>

@endsection




