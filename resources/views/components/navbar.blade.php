<section class="py-5">
	<nav class="navbar navbar-expand-md bg-light">
		<div class="container">
			<a class="navbar-brand" href="/"><h1>Mon<span class="text-primary">Voiture</span></h1></a> <button aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent2" data-bs-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent2">
				<ul class="navbar-nav ms-auto my-2 my-md-0">
					<li class="nav-item ms-md-4">
						<a class="nav-link fw-bold" href="/">Home</a>
					</li>
					<li class="nav-item ms-md-4">
						<a class="nav-link fw-bold" href="/cars">Voitures</a>
					</li>
					<li class="nav-item ms-md-4">
						<a class="nav-link fw-bold" href="/about">About</a>
					</li>
					<li class="nav-item ms-md-4">
						<a class="nav-link fw-bold" href="/contact">Contact</a>
					</li>
                    @if (auth()->guard("web")->check())
                    <li class="nav-item ms-md-4 d-none d-md-block">
                        <form action="/deconnect" method="post">
                            @csrf
                            <button class="btn btn-danger">Log Out</button>
                        </form>
					</li>
                    @else
                    <li class="nav-item ms-md-4 d-none d-md-block">
						<a class="btn btn-primary" href="/login">Log In</a>
					</li>
                    @endif

				</ul>
			</div>
		</div>
	</nav>
</section>

