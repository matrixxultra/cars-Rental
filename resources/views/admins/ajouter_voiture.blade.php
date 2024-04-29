@extends('admins.app')
@section('main')
<center><h1 class="mt-5">Ajouter Une Voiture</h1></center>
<form action="/admin/store_voiture" method="post"  class="container mt-5">
    @csrf
<label for="" class="form-label">Marque</label>
<select name="marque_id" class="form-select form-select-lg mb-3" aria-label="Large select example">
    <option value="" selected>Choisir Une Marque</option>
    @foreach ($marques as $m)
        <option value="{{$m->id}}">{{$m->name}}</option>
    @endforeach
  </select>
  <label for="" class="form-label">Catégorie</label>
  <select name="categorie_id" class="form-select form-select-lg mb-3" aria-label="Large select example">
    <option value="" selected>Choisir Une Catégorie</option>
    @foreach ($categories as $c)
        <option value="{{$c->id}}">{{$c->gamme}}</option>
    @endforeach
  </select>
  <div class="input-group input-group-lg">
    <span class="input-group-text" id="inputGroup-sizing-lg">Modéle</span>
    <input type="text" class="form-control" name="modele" placeholder="Ex Fiesta , Panamera ...." aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
  </div> <br>
  <div class="input-group input-group-lg">
    <span class="input-group-text" id="inputGroup-sizing-lg">Couleur</span>
    <input type="text" class="form-control" name="color" placeholder="Noir , rouge ..." aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
  </div> <br>
  <div class="input-group input-group-lg">
    <span class="input-group-text" id="inputGroup-sizing-lg">Année</span>
    <input type="number" class="form-control" name="année" placeholder="Ex 2024 , 2015" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
  </div> <br>
  <div class="input-group input-group-lg">
    <span class="input-group-text" id="inputGroup-sizing-lg">Prix Location Par Jour</span>
    <input type="number" class="form-control" name="prix_location_jour" placeholder="Ex 100 , 500 , 3000" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
  </div> <br>
 
   <button class="btn btn-primary">Ajouter Voiture</button>

</form>
@endsection
