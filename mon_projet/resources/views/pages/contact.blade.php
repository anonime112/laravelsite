@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url('{{ asset('images/bg-title-page-02.jpg') }}');">
		<div class="t-center">
			<a href="{{ route('home') }}" class="logo-section-wrap m-b-20">
				<img src="{{ asset('images/icons/logo.png') }}" alt="Iguyzza" class="logo-section">
			</a>
			<h2 class="tit6 t-center">
				Contact
			</h2>
		</div>
	</section>
<div class="ig-orange-band"></div>


	<!-- Contact form -->
	<section class="section-contact bg1-pattern p-t-90 p-b-113">
		<!-- Map -->
		<div class="container">
			<div class="map bo8 bo-rad-10 of-hidden">
				<div class="contact-map size37" id="google_map" data-map-x="5.3528" data-map-y="-3.9876" data-pin="images/icons/icon-position-map.png" data-scrollwhell="0" data-draggable="1"></div>
			</div>
		</div>

		<div class="container">
			<h3 class="tit7 t-center p-b-62 p-t-105">
				Envoyez-nous un message
			</h3>

			<form class="wrap-form-reservation size22 m-l-r-auto">
				<div class="row">
					<div class="col-md-4">
						<!-- Nom -->
						<span class="txt9">
							Nom
						</span>

						<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" placeholder="Votre nom">
						</div>
					</div>

					<div class="col-md-4">
						<!-- E-mail -->
						<span class="txt9">
							E-mail
						</span>

						<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" placeholder="E-mail">
						</div>
					</div>

					<div class="col-md-4">
						<!-- Téléphone -->
						<span class="txt9">
							Téléphone
						</span>

						<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone" placeholder="Votre téléphone">
						</div>
					</div>

					<div class="col-12">
						<!-- Message -->
						<span class="txt9">
							Message
						</span>
						<textarea class="bo-rad-10 size35 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-3" name="message" placeholder="Votre message"></textarea>
					</div>
				</div>

				<div class="wrap-btn-booking flex-c-m m-t-13">
					<!-- Button3 -->
					<button type="submit" class="btn3 flex-c-m size36 txt11 trans-0-4">
						Envoyer
					</button>
				</div>
			</form>

			<div class="row p-t-135">
				<div class="col-sm-8 col-md-4 col-lg-4 m-l-r-auto p-t-30">
					<div class="dis-flex m-l-23">
						<div class="p-r-40 p-t-6">
							<img src="{{ asset('images/icons/map-icon.png') }}" alt="IMG-ICON">
						</div>

						<div class="flex-col-l">
							<span class="txt5 p-b-10">
								Adresse
							</span>

							<span class="txt23 size38">
								Riviera Palmeraie, Cocody, Abidjan, Côte d'Ivoire
							</span>
						</div>
					</div>
				</div>

				<div class="col-sm-8 col-md-3 col-lg-4 m-l-r-auto p-t-30">
					<div class="dis-flex m-l-23">
						<div class="p-r-40 p-t-6">
							<img src="{{ asset('images/icons/phone-icon.png') }}" alt="IMG-ICON">
						</div>


						<div class="flex-col-l">
							<span class="txt5 p-b-10">
								Appelez-nous
							</span>

							<span class="txt23 size38">
								+225 07 00 00 00 00
							</span>
						</div>
					</div>
				</div>

				<div class="col-sm-8 col-md-5 col-lg-4 m-l-r-auto p-t-30">
					<div class="dis-flex m-l-23">
						<div class="p-r-40 p-t-6">
							<img src="{{ asset('images/icons/clock-icon.png') }}" alt="IMG-ICON">
						</div>


						<div class="flex-col-l">
							<span class="txt5 p-b-10">
								Horaires d'ouverture
							</span>

							<span class="txt23 size38">
								11h00 – 02h00 <br/>Tous les jours
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
