@extends('master')
@section('main')
<center><h1>Créer Un Compte</h1></center> <br>
<div class="container">
    @if ($errors->any())

    @foreach ($errors->all() as $e)

        <div class="alert alert-danger container" role="alert">
            {{$e}}
        </div>
    @endforeach


    @endif
</div>
<form action="/store" class="container " method="POST">
    @csrf
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Nom</span>
        <input type="text" class="form-control" aria-label="Sizing example input" name="name" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Prenom</span>
        <input type="text" class="form-control" aria-label="Sizing example input" name="prenom" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
        <input type="email" class="form-control" aria-label="Sizing example input" name="email" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Passowrd</span>
        <input type="password" class="form-control" aria-label="Sizing example input" name="password" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Cin</span>
        <input type="text" class="form-control" aria-label="Sizing example input" name="cin" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Numéro Téléphone</span>
        <input type="text" class="form-control" aria-label="Sizing example input" name="phone_number" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Adresse :</label>
        <textarea class="form-control" id="exampleFormControlTextarea1"  rows="3" name="addresse"></textarea>
      </div>
   <button class="btn btn-primary">Créer Compte</button>
</form>
@endsection
