@extends('master')
@section('main')
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center text-center mb-3">
            <div class="col-lg-8 col-xxl-7">
                <span class="text-muted">Let's Talk</span>
                <h2 class="display-5 fw-bold mb-3">Contact Us</h2>
                <p class="lead">Partager Avec Nous Vos Idée Pour Améliorer Notre Agence De Location Et Offrons Une Bonne exprience Utilisateur</p>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <h5 class="fw-semibold mb-3">Envoyer Nous Message</h5>
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input class="form-control bg-light" placeholder="First name" type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input class="form-control bg-light" placeholder="Last name" type="text">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <input class="form-control bg-light" placeholder="Email address" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control bg-light" placeholder="Your message" rows="4"></textarea>
                    </div>
                    <div class="col-md-4 ms-auto">
                        <div class="d-grid">
                            <button class="btn btn-primary" type="submit">Envoyer message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-5 mt-5 mt-lg-0">
                <div class="mb-4">
                    <h5>Address</h5>
                    <p>23 Rue Idriss ,Kénitra</p>
                </div>
                <div class="mb-4">
                    <h5>Phone</h5>
                    <p>+212 06 35 65 98 78</p>
                </div>
                <div class="mb-4">
                    <h5>Email</h5>
                    <p>louer@mycompany.com</p>
                </div>
                <div class="mb-4">
                    <h5>Résaux Sociaux</h5><a class="me-2" href=""><svg class="bi bi-pinterest text-primary" fill="currentColor" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z"></path></svg></a> <a class="me-2" href=""><svg class="bi bi-twitter text-primary" fill="currentColor" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path></svg></a> <a class="me-2" href=""><svg class="bi bi-facebook text-primary" fill="currentColor" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path></svg></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


{{-- <section class="py-5">
	<div class="container">
		<div class="row justify-content-center text-center mb-3">
			<div class="col-lg-8 col-xxl-7">
				<span class="text-muted">Let's Talk</span>
				<h2 class="display-5 fw-bold mb-3">Contact Us</h2>
				<p class="lead">Lorem ipsum dolor, sit amet elit Quamnitm veniam dicta, quos nemo minima nulla ducimus officii nulla ducimus officiis! Lorem ipsum dolor, sit amet elit Quamnitm.</p>
			</div>
		</div>
		<div class="row justify-content-between">
			<div class="col-lg-6">
				<h5 class="fw-semibold mb-3">Send us a message</h5>
				<form>
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3">
								<input class="form-control bg-light" placeholder="First name" type="text">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<input class="form-control bg-light" placeholder="Last name" type="text">
							</div>
						</div>
						<div class="col-12">
							<div class="mb-3">
								<input class="form-control bg-light" placeholder="Email address" type="text">
							</div>
						</div>
					</div>
					<div class="mb-3">
						<textarea class="form-control bg-light" placeholder="Your message" rows="4"></textarea>
					</div>
					<div class="col-md-4 ms-auto">
						<div class="d-grid">
							<button class="btn btn-primary" type="submit">Send message</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-lg-5 mt-5 mt-lg-0">
				<div class="mb-4">
					<h5>Address</h5>
					<p>123 Mountain View, California, United States.</p>
				</div>
				<div class="mb-4">
					<h5>Phone</h5>
					<p>+1 123-456-7890</p>
				</div>
				<div class="mb-4">
					<h5>Email</h5>
					<p>hello@yourdomain.com</p>
				</div>
				<div class="mb-4">
					<h5>Socials</h5><a class="me-2" href=""><svg class="bi bi-pinterest text-primary" fill="currentColor" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
					<path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z"></path></svg></a> <a class="me-2" href=""><svg class="bi bi-twitter text-primary" fill="currentColor" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
					<path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path></svg></a> <a class="me-2" href=""><svg class="bi bi-facebook text-primary" fill="currentColor" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
					<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path></svg></a>
				</div>
			</div>
		</div>
	</div>
</section> --}}
