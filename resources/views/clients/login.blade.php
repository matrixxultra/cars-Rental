@extends('master')
@section('main')

<center><h1>Authentification</h1></center>
@if (session()->has("success"))
<div class="alert alert-success container" role="alert">
    {{Session::get("success")}} Autentifier S'il Veut Plait !
</div>
@endif
<form action="/verifier" method="POST" class="container">
    @csrf
    <div class="mb-3">
      <label  class="form-label">Email address</label>
      <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">...</div>
    </div>
    <div class="mb-3">
      <label  class="form-label">Password</label>
      <input type="password" class="form-control" name="password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button> <br>
    <a href="/create">Vous n'avez Un Compte , Créer Compte</a>
  </form>
@endsection
