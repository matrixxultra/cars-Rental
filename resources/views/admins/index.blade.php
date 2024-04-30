@extends('admins.app')
@section('main')
<center class="mt-5"><h1>Tous les Réservation de Location</h1></center>
<table class="table table-striped container mt-5">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Client Nom Complet</th>
        <th scope="col">Voiture Model</th>
        <th scope="col">Date Debut</th>
        <th scope="col">Date Fin</th>
        <th scope="col">Prix Total</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $key=>$d)
        <tr>
            <td>{{$key}}</td>
            <td>{{$d->name}} {{$d->prenom}}</td>
            <td>{{$d->modele}}</td>
            <td>{{$d->date_debut}}</td>
            <td>{{$d->date_fin}}</td>
            <td>{{$d->prix_total}} MAD</td>
            <td>
                <form action="/admin/delete_location/{{$d->id}}" method="post">
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
