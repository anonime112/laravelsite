<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="{{ route('home') }}">
							<img src="{{ asset('images/icons/logo.png') }}" alt="Iguyzza — concept lounge &amp; événementiel" data-logofixed="{{ asset('images/icons/logo2.png') }}">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="{{ route('home') }}">Accueil</a>
								</li>

								<li>
									<a href="{{ route('menu') }}">Carte</a>
								</li>

								<li>
									<a href="{{ route('reservation') }}">Réservation</a>
								</li>

								<li>
									<a href="{{ route('gallery') }}">Galerie</a>
								</li>

								<li>
									<a href="{{ route('about') }}">À propos</a>
								</li>

								<li>
									<a href="{{ route('blog') }}">Actualités</a>
								</li>

								<li>
									<a href="{{ route('contact') }}">Contact</a>
								</li>
								<li>
											<a href="{{ route('cart') }}" class="cart-nav-link trans-0-4" aria-label="Voir le panier">
							<i class="fa fa-shopping-cart" aria-hidden="true"></i>
							<span class="cart-count">0</span>
						</a>
								</li>
							</ul>
						</nav>
					</div>

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
					
						<a href="#"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a>
						<a href="{{ route('cart') }}" class="cart-nav-link trans-0-4" aria-label="Voir le panier">
							<i class="fa fa-shopping-cart" aria-hidden="true"></i>
							<span class="cart-count">0</span>
						</a>

						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
					</div>
				</div>
			</div>
		</div>
	</header>