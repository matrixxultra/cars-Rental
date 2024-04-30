@extends('admins.app')
@section('main')
<center><h3 class="mt-5">Gérer les Images de Voiture  <span class="text-primary">{{$voiture->marque->name}} {{$voiture->modele}}</span> </h3></center>
@if (session()->has("success"))
<div class="alert alert-success container" role="alert">
    {{Session::get("success")}}
</div>
@endif
<div class="container">
    @if ($errors->any())

    @foreach ($errors->all() as $e)

        <div class="alert alert-danger container" role="alert">
            {{$e}}
        </div>
    @endforeach


    @endif
</div>
<form action="/admin/store_images/{{$voiture->id}}" method="post" class="container mt-5" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="formFileLg" class="form-label">les Images De Voiture</label>
        <input class="form-control form-control-lg" id="formFileLg" type="file" multiple name="pics[]">
      </div> <br>
      <button class="btn btn-primary">Ajouter Images</button>
</form>
<br>
<div class="container card">
    <div class="card-header">les Images de Voiture</div>
    @foreach ($voiture->pictures as $i)
        <form action="/admin/delete_images/{{$i->id}}" method="post">
        @csrf
        @method("delete")


                <img src="{{asset($i->pics)}}" class="img img-responsive" width=200 height=100>
                <button class="btn btn-danger">Delete</button>




        </form>
        <br>
    @endforeach
</div>
@endsection
