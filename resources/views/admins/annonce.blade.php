@extends('admins.app')
@section('main')
<center><h1 class="mt-5">Annoncer Quelque Chose</h1></center>
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
<form action="/admin/store_annonce" method="post" class="container mt-5">
    @csrf
    <div class="input-group">
        <span class="input-group-text">Annoncer</span>
        <textarea class="form-control" aria-label="With textarea" name="contenu" ></textarea>
      </div> <br>
    <button class="btn btn-primary">Envoyer</button>
</form>
@endsection
