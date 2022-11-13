{{--pour extends all section from mastar.layout --}}
@extends('master.layout')

{{--pour ajouter title  --}}
@section('title')
    Accueil
@endsection

{{--pour ajouter style  --}}
@section('style')
<style>body{background-color: #eeeeee}</style>
@endsection

{{--pour ajouter content de la page  --}}
@section('content')
    {{-- <div class="row mt-4"><h1>Accueil</h1></div> --}}
    {{-- <div class="row mt-4">
    <h5> //////////////// Le résultat de produit  ////////////////</h5>    
    @isset($produit)    
         <p>Le produit existe</p>    
    @endisset
    <h5> //////////////// Le résultat de animals  ////////////////</h5>    
    @forelse ($animals as $animal)​
    <li> {{ $animal }} </li>​ --}}
{{-- @empty     
    <p>Aucun animal existant.</p>               
@endforelse --}}
{{-- </div> --}}


<div class="row mt-5"><h1 class="mb-5">Accueil</h1>



@foreach ($posts as $post)
<div class="card mx-2" style="width: 18rem;">
    <img src="https://picsum.photos/200/300?grayscale" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$post['title']}}</h5>
      <p class="card-text">{{$post['body']}}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
@endforeach



</div>
@endsection


{{--pour ajouter le script  --}}
{{--@section('script')
    <script></script>
@endsection--}}