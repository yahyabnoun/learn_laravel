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
    <div class="row mt-4"><h1>Accueil</h1></div>
    <div class="row mt-4">
    <h5> //////////////// Le résultat de produit  ////////////////</h5>    
    @isset($produit)    
         <p>Le produit existe</p>    
    @endisset
    <h5> //////////////// Le résultat de animals  ////////////////</h5>    
    @forelse ($animals as $animal)​
    <li> {{ $animal }} </li>​
@empty     
    <p>Aucun animal existant.</p>  

@endforelse
<button > <a href="home">GO TO Home</a></button>
</div>










</div>
@endsection


{{--pour ajouter le script  --}}
{{--@section('script')
    <script></script>
@endsection--}}