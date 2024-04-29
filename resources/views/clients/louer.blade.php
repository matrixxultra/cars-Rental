@extends('master')
@section('main')
<center><h1 class="mt-5">Bienvenue Pour Continue La Procedure de location</h1></center>
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
<button class="btn btn-primary">Valider</button>
</form>
@endsection