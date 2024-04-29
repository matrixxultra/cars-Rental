@extends('admins.app')
@section('main')
<center class="mt-5"><h1>Gérer Les Marques</h1></center>
<div class="container"><a class="btn btn-primary" href="">Ajouter Marque</a></div>

<table class="table table-warning container mt-5">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Marque</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
@endsection
