@extends('admins.app')
@section('main')
<center><h1 class="mt-5">Modifier la Marque <span class="text-primary">{{$marque->name}}</span> </h1></center>
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
<form action="/admin/update_marque/{{$marque->id}}" class="container mt-5" method="post" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <div class="input-group input-group-lg">
        <span class="input-group-text" id="inputGroup-sizing-lg">Nom De La Marque</span>
        <input type="text" class="form-control" value="{{$marque->name}}" name="name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
      </div> <br>
      <label for="formFileLg" class="form-label fw-bold">Image</label>
      <input class="form-control form-control-lg" name="image"  type="file">
    </div> <br>
    <button class="btn btn-primary">Ajouter Marque</button>
    </form>
@endsection
