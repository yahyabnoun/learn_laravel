@extends('master.layout')

@section('title')
    Home
@endsection

{{-- {{$hello.' '.$name}}  http://127.0.0.1:8000/Home/yahya  output (hello yahya) --}}



@section('style')
<style>body{background-color: #bdffb7}</style>
@endsection


@section('content')
<div class="row mt-4"><h1>Home</h1></div>
@endsection




{{--@section('script')
    <script></script>
@endsection--}}