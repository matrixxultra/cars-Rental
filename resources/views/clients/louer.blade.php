@extends('master')
@section('main')
<center><h1 class="mt-5">Bienvenue Pour Continue La Procedure de location</h1></center>
<div class="container">
    @if ($errors->any())

    @foreach ($errors->all() as $e)

        <div class="alert alert-danger container" role="alert">
            {{$e}}
        </div>
    @endforeach


    @endif
</div>

<form action="/uplouer/{{$voiture->id}}" class="container" method="post">
    @csrf
<label class="form-label">Voiture</label>
<select name="voiture_id" class="form-select form-select-lg mb-3" aria-label="Large select example">
    <option value="{{$voiture->id}}" selected>{{$voiture->marque->name}} {{$voiture->modele}}</option>
</select>
<label class="form-label">Date Début</label>
<input type="date" class="form-control" name="date_debut">
<label class="form-label">Date Fin</label>
<input type="date" class="form-control" name="date_fin"> <br>
@if ($voiture->stock == 0)
    <span class="badge rounded-pill text-bg-danger">Repture de Stock</span>
@else
<button class="btn btn-primary">Valider</button>
@endif
</form>
@endsection
