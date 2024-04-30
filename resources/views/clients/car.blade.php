@extends('master')
@section('main')
<section class="py-5">
	<div class="container">
		<div class="row justify-content-center text-center mb-2 mb-lg-4">
			<div class="col-12 col-lg-8 col-xxl-7 text-center mx-auto">
				<h2 class="display-5 fw-bold">Bonjour Chez Nous</h2>
				<p class="lead">Nous Espérons Une Bonne Expériance Utilisateur</p>
			</div>
		</div>
		<div class="row py-3 align-items-center">
			<div class="col-md-6 mt-md-0 mt-4">
				<div class="mb-5 mb-lg-3"><img class="img-fluid" src="{{asset($voiture->pictures->first()->pics)}}"></div>
			</div>
			<div class="col-md-6 ps-md-5">
				<div class="mb-5 mb-lg-3">
					<h4>{{$voiture->marque->name}} {{$voiture->modele}}</h4>
                    <p>Année : {{$voiture->année}}</p>
					<p>Couleur : {{$voiture->color}}</p>
                    <p>Categorie : {{$voiture->categorie->gamme}}</p>
                    <p>Stock : {{$voiture->stock}}</p>
                    <p>Prix Location Par Jour : {{$voiture->prix_location_jour}} MAD</p>

					<p>Trés Bon Qualité</p>
                    @if ($voiture->stock == 0)
                    <span class="badge rounded-pill text-bg-danger">Repture de Stock</span>

                    @else
                    <a class="btn btn-lg btn-info" href="/louer/{{$voiture->id}}">Louer</a>

                    @endif
				</div>
			</div>
		</div>
		<div class="row mt-2">
            @foreach ($voiture->pictures as $p)
            <div class="col-lg-3 col-md-6">
				<div class="mb-3 mb-lg-0"><img alt="" class="img-fluid" src="{{asset($p->pics)}}"></div>
			</div>
            @endforeach


		</div>
	</div>
</section>
@endsection
