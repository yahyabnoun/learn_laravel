{{--pour extends all section from mastar.layout --}}
@extends('master.layout')

{{--pour ajouter title  --}}
@section('title')
    Accueil
@endsection

{{--pour ajouter style  --}}
@section('style')
<style>body{background-color: #aaf5ff}</style>
@endsection

{{--pour ajouter content de la page  --}}
@section('content')
    <div class="row mt-4"><h1>Accueil</h1></div>
@endsection


{{--pour ajouter le script  --}}
{{--@section('script')
    <script></script>
@endsection--}}