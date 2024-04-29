@extends('admins.app')
@section('main')
<center class="mt-5"><h1>Gérer Les Marques</h1></center>
@if (session()->has("success"))
<div class="alert alert-success container" role="alert">
    {{Session::get("success")}} Autentifier S'il Veut Plait !
</div>
@endif
<div class="container"><a class="btn btn-primary" href="/admin/ajouter_marque">Ajouter Marque</a></div>
<div class="container">
    @if (session()->has("success"))
           {{Session::get("success")}}
    @endif
</div>
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
        @foreach ($marques as $m)
        <tr>
            <th scope="row">{{$m->id}}</th>
            <td>{{$m->name}}</td>
            {{-- <td>Image</td> --}}
            <td> <img src="{{asset($m->image)}}" class="img img-responsive" width="150" height="100" alt=""> </td>
            <td class="">
                <a href="/admin/edit_marque/{{$m->id}}" class="btn btn-warning">Modifier</a> 
                <form action="/admin/delete_marque/{{$m->id}}" method="post">
                    @csrf
                    @method("delete")
                    <button class="btn btn-danger">Delete</button>

                </form>
            </td>
          </tr>
        @endforeach



    </tbody>
  </table>
  <div class="container">{{$marques->links()}}</div>

@endsection
