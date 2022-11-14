@extends('master.layout')

@section('title')
create
@endsection

{{-- {{$hello.' '.$name}}  http://127.0.0.1:8000/Home/yahya  output (hello yahya) --}}



@section('style')
<style>
body{background-color: #eeeeee}


</style>
@endsection


@section('content')
<div class="card bg-light  rounded  mx-auto mt-4">
    
    <div class="card-header">
         
         <h5 class=" ">Ajouter un post </h5>
      </div>
    <div class="card-body">
    <form>
        <div class="my-4">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title" >
        </div>
        <div class="my-4">
            <input type="file" class="form-control" name="image">
        </div>
        <div class="my-4">

            <label for="body" class="form-label">Description</label>
            <textarea type="text" class="form-control" name="body" placeholder="Description"></textarea>  
 
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>
</div>

@endsection




