@extends('layouts.app')

@section('title', 'Galerie')

@section('content')
<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url('{{ asset('img/table.jpg') }}');">
		<div class="t-center">
			<a href="{{ route('home') }}" class="logo-section-wrap m-b-20">
				<img src="{{ asset('images/icons/logo.png') }}" alt="Iguyzza" class="logo-section">
			</a>
			<h2 class="tit6 t-center">
				Galerie
			</h2>
		</div>
	</section>



	<!-- Galerie -->
	<div class="section-gallery p-t-118 p-b-100">
		<div class="container t-center m-b-40">
			<a href="{{ route('home') }}" class="logo-section-wrap">
				<img src="{{ asset('images/icons/logo.png') }}" alt="Iguyzza" class="logo-section logo-section--sm">
			</a>
		</div>
		<div class="wrap-label-gallery filter-tope-group size27 flex-w flex-sb-m m-l-r-auto flex-col-c-sm p-l-15 p-r-15 m-b-60">
			<button class="label-gallery txt26 trans-0-4 is-actived" data-filter="*">
				Toutes les photos
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".interior">
				Intérieur
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".food">
				Cuisine
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".events">
				Événements
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".guests">
				Invités VIP
			</button>
		</div>

		<div class="wrap-gallery isotope-grid flex-w p-l-25 p-r-25">
			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom events guests">
				<img src="{{ asset('img/548330204_122119031846968359_2643696780765774991_n.jpg') }}" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m flex-col">
					<a class="btn-show-gallery flex-c-m fa fa-search m-b-10" href="{{ asset('img/548330204_122119031846968359_2643696780765774991_n.jpg') }}" data-lightbox="gallery"></a>
					<button class="btn-add-cart btn1 flex-c-m size13 txt11 trans-0-4" data-name="Événement VIP" data-price="50000">
						<i class="fa fa-plus m-r-5"></i>Ajouter
					</button>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom food">
				<img src="{{ asset('img/561537983_122125478630968359_5990106595369622758_n.jpg') }}" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m flex-col">
					<a class="btn-show-gallery flex-c-m fa fa-search m-b-10" href="{{ asset('img/561537983_122125478630968359_5990106595369622758_n.jpg') }}" data-lightbox="gallery"></a>
					<button class="btn-add-cart btn1 flex-c-m size13 txt11 trans-0-4" data-name="Plat signature" data-price="15000">
						<i class="fa fa-plus m-r-5"></i>Ajouter
					</button>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom events">
				<img src="{{ asset('img/565655299_122125014536968359_8373653522952522296_n.jpg') }}" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m flex-col">
					<a class="btn-show-gallery flex-c-m fa fa-search m-b-10" href="{{ asset('img/565655299_122125014536968359_8373653522952522296_n.jpg') }}" data-lightbox="gallery"></a>
					<button class="btn-add-cart btn1 flex-c-m size13 txt11 trans-0-4" data-name="Réservation événement" data-price="30000">
						<i class="fa fa-plus m-r-5"></i>Ajouter
					</button>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom food">
				<img src="{{ asset('img/566199314_122125219058968359_6497133020676800954_n.jpg') }}" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m flex-col">
					<a class="btn-show-gallery flex-c-m fa fa-search m-b-10" href="{{ asset('img/566199314_122125219058968359_6497133020676800954_n.jpg') }}" data-lightbox="gallery"></a>
					<button class="btn-add-cart btn1 flex-c-m size13 txt11 trans-0-4" data-name="Cuisine gourmande" data-price="12000">
						<i class="fa fa-plus m-r-5"></i>Ajouter
					</button>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom food">
				<img src="{{ asset('img/567521816_122125478618968359_1312821641899528111_n.jpg') }}" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m flex-col">
					<a class="btn-show-gallery flex-c-m fa fa-search m-b-10" href="{{ asset('img/567521816_122125478618968359_1312821641899528111_n.jpg') }}" data-lightbox="gallery"></a>
					<button class="btn-add-cart btn1 flex-c-m size13 txt11 trans-0-4" data-name="Dessert artisanal" data-price="8000">
						<i class="fa fa-plus m-r-5"></i>Ajouter
					</button>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom interior guests">
				<img src="{{ asset('img/571168370_122126454290968359_877040687061528344_n.jpg') }}" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m flex-col">
					<a class="btn-show-gallery flex-c-m fa fa-search m-b-10" href="{{ asset('img/571168370_122126454290968359_877040687061528344_n.jpg') }}" data-lightbox="gallery"></a>
					<button class="btn-add-cart btn1 flex-c-m size13 txt11 trans-0-4" data-name="Espace VIP" data-price="40000">
						<i class="fa fa-plus m-r-5"></i>Ajouter
					</button>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom interior">
				<img src="{{ asset('img/571284060_122126454374968359_3826126251373686210_n.jpg') }}" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m flex-col">
					<a class="btn-show-gallery flex-c-m fa fa-search m-b-10" href="{{ asset('img/571284060_122126454374968359_3826126251373686210_n.jpg') }}" data-lightbox="gallery"></a>
					<button class="btn-add-cart btn1 flex-c-m size13 txt11 trans-0-4" data-name="Décoration intérieure" data-price="25000">
						<i class="fa fa-plus m-r-5"></i>Ajouter
					</button>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom interior">
				<img src="{{ asset('img/572396894_122126454302968359_3627713918198532208_n.jpg') }}" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m flex-col">
					<a class="btn-show-gallery flex-c-m fa fa-search m-b-10" href="{{ asset('img/572396894_122126454302968359_3627713918198532208_n.jpg') }}" data-lightbox="gallery"></a>
					<button class="btn-add-cart btn1 flex-c-m size13 txt11 trans-0-4" data-name="Ambiance lounge" data-price="20000">
						<i class="fa fa-plus m-r-5"></i>Ajouter
					</button>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom events">
				<img src="{{ asset('img/576239675_122128832876968359_9009437669825423605_n.jpg') }}" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m flex-col">
					<a class="btn-show-gallery flex-c-m fa fa-search m-b-10" href="{{ asset('img/576239675_122128832876968359_9009437669825423605_n.jpg') }}" data-lightbox="gallery"></a>
					<button class="btn-add-cart btn1 flex-c-m size13 txt11 trans-0-4" data-name="Événement spécial" data-price="35000">
						<i class="fa fa-plus m-r-5"></i>Ajouter
					</button>
				</div>
			</div>
		</div>

		<div class="pagination flex-c-m flex-w p-l-15 p-r-15 m-t-24 m-b-50">
			<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
			<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
			<a href="#" class="item-pagination flex-c-m trans-0-4">3</a>
		</div>
	</div>


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
