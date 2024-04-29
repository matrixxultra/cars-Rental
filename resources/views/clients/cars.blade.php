@extends('master')
@section('main')
<section class="py-5">
	<div class="container">
		<div class="row justify-content-center text-center mb-2 mb-lg-4">
			<div class="col-12 col-lg-8 col-xxl-7 text-center mx-auto">
				<h2 class="display-5 fw-bold text-warning">Promotion Up To 70%</h2>
				<p class="lead">Spécial Offre Ne Rater Pas : ) </p>
			</div>
		</div>
		<div class="row py-3 align-items-center">
			<div class="col-md-6 mt-md-0 mt-4">
				<div class="mb-5 mb-lg-3"><img class="img-fluid" src="{{asset($promotion->pictures->first()->pics)}}"></div>
			</div>
			<div class="col-md-6 ps-md-5">
				<div class="mb-5 mb-lg-3">
					<h4>{{$promotion->marque->name}} {{$promotion->modele}}</h4>
                    <p>Année : {{$promotion->année}}</p>
                    <p>Color : {{$promotion->color}}</p>
                    <p>Stock : {{$promotion->stock}}</p>
                    <p>Prix Location Par Jour : {{$promotion->prix_location_jour}} MAD</p>
                    <a class="btn btn-lg btn-info" href="/louer/{{$promotion->id}}">Louer Maintenant</a>
				</div>
			</div>
		</div>
    </div>
</section>
{{-- -------------------------------------------------- --}}
<section class="py-5">
	<div class="container">
		<div class="row justify-content-center text-center mb-4 mb-md-5">
			<div class="col-xl-9 col-xxl-8">
				<h2 class="display-5 fw-bold">Tous les Voitures</h2>
				<p class="lead">Li Makra mn 3ndna Ytnzh hhhh w Dédicase Lkhouya hamza</p>
			</div>
		</div>
		<div class="row g-5">
            @foreach ($voitures as $v)
            <div class="col-md-4">
				<div class="card h-100" >
					<a href="/showCar/{{$v->id}}"><img  class="img-fluid rounded" src="{{asset($v->pictures->first()->pics)}}" ></a>
					<div class="card-body p-0 text-center mt-4">
						<h5><a class="text-dark text-decoration-none" href="/showCar/{{$v->id}}">{{$v->marque->name}} {{$v->modele}}</a></h5>
						<p class="mt-3">{{$v->prix_location_jour}} MAD / Jour</p>
                        <p></p>
					</div>
				</div>
			</div>

            @endforeach
			
		</div>
	</div>
</section>
@endsection
