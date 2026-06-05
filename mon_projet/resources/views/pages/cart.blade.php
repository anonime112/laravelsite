@extends('layouts.app')

@section('title', 'Iguyzza â€” Panier | Lounge &amp; Ã‰vÃ©nements, Abidjan')

@section('content')
<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url('{{ asset('img/table.jpg') }}');">
		<div class="t-center">
			<a href="{{ route('home') }}" class="logo-section-wrap m-b-20">
				<img src="{{ asset('images/icons/logo.png') }}" alt="Iguyzza" class="logo-section">
			</a>
			<h2 class="tit6 t-center">
				Votre Panier
			</h2>
		</div>
	</section>

	<div class="ig-orange-band"></div>

	<!-- Cart Section -->
	<section class="section-cart bg1-pattern p-t-100 p-b-100">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-8 p-b-30">
					<div class="wrap-cart">
						<h3 class="tit5 t-center m-b-40">Articles dans votre panier</h3>
						
						<div id="cart-items">
							<!-- Cart items will be dynamically added here -->
							<div class="cart-empty t-center">
								<p class="txt23">Votre panier est vide</p>
								<a href="{{ route('menu') }}" class="btn1 flex-c-m size13 txt11 trans-0-4 m-t-20">
									Voir la carte
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-4 p-b-30">
					<div class="wrap-cart-summary bgwhite p-t-30 p-b-30 p-l-30 p-r-30">
						<h3 class="tit5 t-center m-b-30">RÃ©capitulatif</h3>
						
						<div class="cart-summary">
							<div class="flex-w flex-b m-b-20">
								<span class="txt22">Sous-total:</span>
								<span class="txt22" id="cart-subtotal">0 F</span>
							</div>
							
							<div class="flex-w flex-b m-b-20">
								<span class="txt22">Livraison:</span>
								<span class="txt22">Gratuite</span>
							</div>
							
							<div class="flex-w flex-b m-b-30 bo5-b">
								<span class="txt21">Total:</span>
								<span class="txt21 color-orange" id="cart-total">0 F</span>
							</div>
							
							<a href="{{ route('reservation') }}" class="btn1 flex-c-m size13 txt11 trans-0-4 w-full">
								Commander
							</a>
							
							<a href="{{ route('menu') }}" class="btn2 flex-c-m size13 txt11 trans-0-4 w-full m-t-10">
								Continuer mes achats
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
