@extends('layouts.app')

@section('title', 'À propos')

@section('content')
<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url('{{ asset('img/table.jpg') }}');">
		<div class="t-center">
			<a href="{{ route('home') }}" class="logo-section-wrap m-b-20">
				<img src="{{ asset('images/icons/logo.png') }}" alt="Iguyzza" class="logo-section">
			</a>
			<h2 class="tit6 t-center">
				À propos
			</h2>
		</div>
	</section>


	<!-- Notre histoire -->
	<section class="bg2-pattern p-t-116 p-b-110 t-center p-l-15 p-r-15">
		<a href="{{ route('home') }}" class="logo-section-wrap m-b-25">
			<img src="{{ asset('images/icons/logo.png') }}" alt="Iguyzza" class="logo-section logo-section--sm">
		</a>
		<span class="tit2 t-center">
			Qui sommes-nous ?
		</span>

		<h3 class="tit3 t-center m-b-35 m-t-5">
			Notre histoire
		</h3>

		<p class="t-center size32 m-l-r-auto">
			Iguyzza est un concept lounge &amp; événementiel implanté à Riviera Palmeraie, Cocody, Abidjan. Nous réunissons sous un même toit un restaurant raffiné, un bar lounge, un espace dédié aux événements privés et professionnels, ainsi qu'un service traiteur pour vos réceptions en Côte d'Ivoire.
		</p>
	</section>


	<!-- Video -->
	<section class="section-video parallax100" style="background-image: url('{{ asset('img/bg22.jpeg') }}');">
		<div class="content-video t-center p-t-225 p-b-250">
			<span class="tit2 p-l-15 p-r-15">
				Découvrez
			</span>

			<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
				Notre univers
			</h3>

			<div class="btn-play ab-center size16 hov-pointer m-l-r-auto m-t-43 m-b-33" data-toggle="modal" data-target="#modal-video-01">
				<div class="flex-c-m sizefull bo-cir bgwhite color1 hov1 trans-0-4">
					<i class="fa fa-play fs-18 m-l-2" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</section>


	<!-- Cuisine & Ambiance-->
	<section class="bg1-pattern p-t-120 p-b-105">
		<div class="container">
			<!-- Cuisine -->
			<div class="row">
				<div class="col-md-6 p-t-45 p-b-30">
					<div class="wrap-text-delicious t-center">
						<span class="tit2 t-center">
							Cuisine
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-5">
							SAVEURS
						</h3>

						<p class="t-center m-b-22 size3 m-l-r-auto">
							Une cuisine généreuse et créative, des produits sélectionnés et une présentation soignée pour ravir vos convives à chaque passage en salle.
						</p>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<div class="wrap-pic-delicious size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img src="{{ asset('images/our-story-01.jpg') }}" alt="IMG-OUR">
					</div>
				</div>
			</div>


			<!-- Ambiance -->
			<div class="row p-t-170">
				<div class="col-md-6 p-b-30">
					<div class="wrap-pic-romantic size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img src="{{ asset('img/lounge.jpeg') }}" alt="IMG-OUR">
					</div>
				</div>

				<div class="col-md-6 p-t-45 p-b-30">
					<div class="wrap-text-romantic t-center">
						<span class="tit2 t-center">
							Ambiance
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-5">
							Lounge
						</h3>

						<p class="t-center m-b-22 size3 m-l-r-auto">
							Lumières tamisées, musique lounge et service attentionné : Iguyzza est l'adresse idéale pour vos soirées à Abidjan.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Banner -->
	<div class="parallax0 parallax100" style="background-image: url('{{ asset('img/bg11.jpeg') }}');">
		<div class="overlay0-parallax t-center size33"></div>
	</div>


	<!-- équipe -->
	<section class="section-chef bgwhite p-t-115 p-b-95">
		<div class="container t-center">
			<span class="tit2 t-center">
				Notre
			</span>

			<h3 class="tit5 t-center m-b-50 m-t-5">
				équipe
			</h3>

			<div class="row">
				<div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
					<!-- -Block5 -->
					<div class="blo5 pos-relative p-t-60">
						<div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
							<a href="#"><img src="{{ asset('images/avatar-02.jpg') }}" alt="IGM-AVATAR"></a>
						</div>

						<div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
							<a href="#" class="txt34 dis-block p-b-6">
								Équipe Iguyzza
							</a>

							<span class="dis-block t-center txt35 p-b-25">
								équipe
							</span>

							<p class="t-center">
								Cuisine créative et service attentionné pour sublimer chaque moment passé chez Iguyzza.
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
					<!-- -Block5 -->
					<div class="blo5 pos-relative p-t-60">
						<div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
							<a href="#"><img src="{{ asset('images/avatar-03.jpg') }}" alt="IGM-AVATAR"></a>
						</div>

						<div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
							<a href="#" class="txt34 dis-block p-b-6">
								Service traiteur
							</a>

							<span class="dis-block t-center txt35 p-b-25">
								équipe
							</span>

							<p class="t-center">
								Buffets, cocktails et menus sur mesure pour vos mariages, séminaires et réceptions.
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
					<!-- -Block5 -->
					<div class="blo5 pos-relative p-t-60">
						<div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
							<a href="#"><img src="{{ asset('images/avatar-05.jpg') }}" alt="IGM-AVATAR"></a>
						</div>

						<div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
							<a href="#" class="txt34 dis-block p-b-6">
								Équipe Iguyzza
							</a>

							<span class="dis-block t-center txt35 p-b-25">
								équipe
							</span>

							<p class="t-center">
								Phasellus aliquam libero a nisi varius, vitae placerat sem aliquet. Ut at velit nec ipsum iaculis posuere quis in sapien
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Sign up -->
	<div class="section-signup bg1-pattern p-t-85 p-b-85">
		<form class="flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5">
			<span class="txt5 m-10">
				Inscrivez-vous aux offres
			</span>

			<div class="wrap-input-signup size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10">
				<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email-address" placeholder="Adresse e-mail">
				<i class="fa fa-envelope ab-r-m m-r-18" aria-hidden="true"></i>
			</div>

			<!-- Button3 -->
			<button type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10">
				S'inscrire
			</button>
		</form>
	</div>
@endsection
