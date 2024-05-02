@extends('admins.app')
@section('main')
<center class="mt-5"><h1>Gérer Les Voitures</h1></center>
@if (session()->has("success"))
<div class="alert alert-success container" role="alert">
    {{Session::get("success")}} 
</div>
@endif
<div class="container"><a class="btn btn-primary" href="/admin/ajouter_voiture">Ajouter Voiture</a></div>
<table class="table table-secondary container mt-5">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Marque</th>
        <th scope="col">Model</th>
        <th scope="col">Coleur</th>
        <th scope="col">Images</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($voitures as $v)
        <tr>
            <th scope="row">{{$v->id}}</th>
            <td>{{$v->marque->name}}</td>
            <td>{{$v->categorie->gamme}}</td>
            <td>{{$v->color}}</td>
            <td> <a href="/admin/ajouter_images/{{$v->id}}" class="btn btn-info">Ajouter / Gérer les Images</a> </td>
            <td class="d-flex gap-2">
                <a href="/admin/edit_voiture/{{$v->id}}" class="btn btn-warning">Modifier</a>
                <form action="/admin/delete_voiture/{{$v->id}}" method="post">
                    @csrf
                    @method("delete")
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>

        </tr>
        @endforeach

    </tbody>
  </table>
@endsection
