@extends('layouts.app')

@section('title', 'Carte — Iguyzza | Restaurant &amp; Lounge, Abidjan')

@section('content')
<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url('{{ asset('images/bg-title-page-01.jpg') }}');">
		<div class="t-center">
			<a href="{{ route('home') }}" class="logo-section-wrap m-b-20">
				<img src="{{ asset('images/icons/logo.png') }}" alt="Iguyzza" class="logo-section">
			</a>
			<h2 class="tit6 t-center">
				Notre carte
			</h2>
		</div>
	</section>

	<div class="ig-orange-band"></div>

	<!-- Main menu -->
	<section class="container section-mainmenu p-t-110 p-b-70 bg1-pattern">
		<div class="container t-center m-b-50">
			<a href="{{ route('home') }}" class="logo-section-wrap">
				<img src="{{ asset('images/icons/logo.png') }}" alt="Iguyzza" class="logo-section logo-section--sm">
			</a>
		</div>
		<div class="wrap-label-gallery filter-tope-group size27 flex-w flex-sb-m m-l-r-auto flex-col-c-sm p-l-15 p-r-15 m-b-60">
			<button class="label-gallery txt26 trans-0-4 is-actived" data-filter="*">
				Tout
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".entrees">
				Entrées
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".plats">
				Plats
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".boissons">
				Boissons
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".desserts">
				Desserts
			</button>
		</div>

		<div class="wrap-menu p-l-25 p-r-25">
			<!-- Entrées -->
			<div class="menu-category m-b-50">
				<h3 class="tit5 t-center m-b-30" style="color: #F56F3B;">Entrées</h3>
				<div class="category-divider m-b-30" style="height: 3px; background: linear-gradient(90deg, #F56F3B 0%, #FFC857 50%, #F56F3B 100%);"></div>
				
		<div class="row wrap-gallery isotope-grid">
		
						<div class="item-gallery isotope-item blo4 flex-w flex-col-l-sm m-b-30 col-md-8 col-lg-6 entrees">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="{{ asset('img/548330204_122119031846968359_2643696780765774991_n.jpg') }}" alt="Carpaccio de bœuf"></a>
					</div>
					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">Carpaccio de bœuf</a>
						<span class="txt23">Entrée fraîcheur</span>
						<span class="txt22 m-t-20">8 500 F</span>
						<button class="btn-add-cart btn2 flex-c-m size13 txt11 trans-0-4 m-t-10" data-name="Carpaccio de bœuf" data-price="8500">
							<i class="fa fa-plus m-r-5"></i>Ajouter
						</button>
					</div>
				</div>

				<div class="item-gallery isotope-item blo4 flex-w flex-col-l-sm m-b-30 col-md-8 col-lg-6 entrees">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="{{ asset('img/561537983_122125478630968359_5990106595369622758_n.jpg') }}" alt="Salade exotique Iguyzza"></a>
					</div>
					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">Salade exotique Iguyzza</a>
						<span class="txt23">Mélange de fruits frais</span>
						<span class="txt22 m-t-20">6 500 F</span>
						<button class="btn-add-cart btn2 flex-c-m size13 txt11 trans-0-4 m-t-10" data-name="Salade exotique Iguyzza" data-price="6500">
							<i class="fa fa-plus m-r-5"></i>Ajouter
						</button>
					</div>
				</div>
			
				<div class="item-gallery isotope-item blo4 flex-w flex-col-l-sm m-b-30 col-md-8 col-lg-6 entrees">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="{{ asset('img/565655299_122125014536968359_8373653522952522296_n.jpg') }}" alt="Brochettes de crevettes"></a>
					</div>
					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">Brochettes de crevettes</a>
						<span class="txt23">6 pièces, sauce cocktail</span>
						<span class="txt22 m-t-20">7 500 F</span>
						<button class="btn-add-cart btn2 flex-c-m size13 txt11 trans-0-4 m-t-10" data-name="Brochettes de crevettes" data-price="7500">
							<i class="fa fa-plus m-r-5"></i>Ajouter
						</button>
					</div>
				</div>

				<div class="item-gallery isotope-item blo4 flex-w flex-col-l-sm m-b-30 col-md-8 col-lg-6 entrees">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="{{ asset('img/566199314_122125219058968359_6497133020676800954_n.jpg') }}" alt="Velouté du jour"></a>
					</div>
					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">Velouté du jour</a>
						<span class="txt23">Selon le marché</span>
						<span class="txt22 m-t-20">5 500 F</span>
						<button class="btn-add-cart btn2 flex-c-m size13 txt11 trans-0-4 m-t-10" data-name="Velouté du jour" data-price="5500">
							<i class="fa fa-plus m-r-5"></i>Ajouter
						</button>
					</div>
				</div>
			

		</div>
			</div>

			<!-- Plats -->
			<div class="menu-category m-b-50">
				<h3 class="tit5 t-center m-b-30" style="color: #F56F3B;">Plats</h3>
				<div class="category-divider m-b-30" style="height: 3px; background: linear-gradient(90deg, #F56F3B 0%, #FFC857 50%, #F56F3B 100%);"></div>
				<div class="row wrap-gallery isotope-grid">
		<div class="item-gallery isotope-item blo4 flex-w flex-col-l-sm m-b-30 col-md-8 col-lg-6 plats">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="{{ asset('img/567521816_122125478618968359_1312821641899528111_n.jpg') }}" alt="Filet de bœuf grillé"></a>
					</div>
					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">Filet de bœuf grillé</a>
						<span class="txt23">Accompagnement au choix</span>
						<span class="txt22 m-t-20">12 500 F</span>
						<button class="btn-add-cart btn2 flex-c-m size13 txt11 trans-0-4 m-t-10" data-name="Filet de bœuf grillé" data-price="12500">
							<i class="fa fa-plus m-r-5"></i>Ajouter
						</button>
					</div>
				</div>

				<div class="item-gallery isotope-item blo4 flex-w flex-col-l-sm m-b-30 col-md-8 col-lg-6 plats">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="{{ asset('img/571168370_122126454290968359_877040687061528344_n.jpg') }}" alt="Poulet braisé Iguyzza"></a>
					</div>
					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">Poulet braisé Iguyzza</a>
						<span class="txt23">Spécialité de la maison</span>
						<span class="txt22 m-t-20">9 500 F</span>
						<button class="btn-add-cart btn2 flex-c-m size13 txt11 trans-0-4 m-t-10" data-name="Poulet braisé Iguyzza" data-price="9500">
							<i class="fa fa-plus m-r-5"></i>Ajouter
						</button>
					</div>
				</div>

				<div class="item-gallery isotope-item blo4 flex-w flex-col-l-sm m-b-30 col-md-8 col-lg-6 plats">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="{{ asset('img/571284060_122126454374968359_3826126251373686210_n.jpg') }}" alt="Poisson du jour"></a>
					</div>
					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">Poisson du jour</a>
						<span class="txt23">Selon la pêche du jour</span>
						<span class="txt22 m-t-20">11 000 F</span>
						<button class="btn-add-cart btn2 flex-c-m size13 txt11 trans-0-4 m-t-10" data-name="Poisson du jour" data-price="11000">
							<i class="fa fa-plus m-r-5"></i>Ajouter
						</button>
					</div>
				</div>

				<div class="item-gallery isotope-item blo4 flex-w flex-col-l-sm m-b-30 col-md-8 col-lg-6 plats">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="{{ asset('img/572396894_122126454302968359_3627713918198532208_n.jpg') }}" alt="Risotto aux champignons"></a>
					</div>
					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">Risotto aux champignons</a>
						<span class="txt23">Champignons sauvages</span>
						<span class="txt22 m-t-20">8 500 F</span>
						<button class="btn-add-cart btn2 flex-c-m size13 txt11 trans-0-4 m-t-10" data-name="Risotto aux champignons" data-price="8500">
							<i class="fa fa-plus m-r-5"></i>Ajouter
						</button>
					</div>
				</div>

				<div class="item-gallery isotope-item blo4 flex-w flex-col-l-sm m-b-30 col-md-8 col-lg-6 plats">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="{{ asset('img/576239675_122128832876968359_9009437669825423605_n.jpg') }}" alt="Burger lounge"></a>
					</div>
					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">Burger lounge</a>
						<span class="txt23">Bœuf, fromage, frites</span>
						<span class="txt22 m-t-20">7 500 F</span>
						<button class="btn-add-cart btn2 flex-c-m size13 txt11 trans-0-4 m-t-10" data-name="Burger lounge" data-price="7500">
							<i class="fa fa-plus m-r-5"></i>Ajouter
						</button>
					</div>
				</div>

				<div class="item-gallery isotope-item blo4 flex-w flex-col-l-sm m-b-30 col-md-8 col-lg-6 plats">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="{{ asset('img/576644887_122128832888968359_3571891469853851403_n.jpg') }}" alt="Assiette traiteur (2 pers.)"></a>
					</div>
					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">Assiette traiteur (2 pers.)</a>
						<span class="txt23">Assortiment de plats</span>
						<span class="txt22 m-t-20">18 000 F</span>
						<button class="btn-add-cart btn2 flex-c-m size13 txt11 trans-0-4 m-t-10" data-name="Assiette traiteur (2 pers.)" data-price="18000">
							<i class="fa fa-plus m-r-5"></i>Ajouter
						</button>
					</div>
				</div>

				</div>

		

			</div>

			<!-- Boissons -->
			<div class="menu-category m-b-50">
				<h3 class="tit5 t-center m-b-30" style="color: #F56F3B;">Boissons</h3>
				<div class="category-divider m-b-30" style="height: 3px; background: linear-gradient(90deg, #F56F3B 0%, #FFC857 50%, #F56F3B 100%);"></div>
				<div class="row wrap-gallery isotope-grid">
	<div class="item-gallery isotope-item blo4 flex-w flex-col-l-sm m-b-30 col-md-8 col-lg-6 boissons">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="{{ asset('img/576956323_122128832702968359_9044786545599895536_n.jpg') }}" alt="Cocktail Iguyzza"></a>
					</div>
					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">Cocktail Iguyzza</a>
						<span class="txt23">Signature du barman</span>
						<span class="txt22 m-t-20">6 000 F</span>
						<button class="btn-add-cart btn2 flex-c-m size13 txt11 trans-0-4 m-t-10" data-name="Cocktail Iguyzza" data-price="6000">
							<i class="fa fa-plus m-r-5"></i>Ajouter
						</button>
					</div>
				</div>

				<div class="item-gallery isotope-item blo4 flex-w flex-col-l-sm m-b-30 col-md-8 col-lg-6 boissons">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="{{ asset('img/577450349_122128832690968359_4123692393177002918_n.jpg') }}" alt="Mojito passion"></a>
					</div>
					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">Mojito passion</a>
						<span class="txt23">Rhum, menthe, fruits de la passion</span>
						<span class="txt22 m-t-20">5 500 F</span>
						<button class="btn-add-cart btn2 flex-c-m size13 txt11 trans-0-4 m-t-10" data-name="Mojito passion" data-price="5500">
							<i class="fa fa-plus m-r-5"></i>Ajouter
						</button>
					</div>
				</div>

				<div class="item-gallery isotope-item blo4 flex-w flex-col-l-sm m-b-30 col-md-8 col-lg-6 boissons">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="{{ asset('img/577568176_122128832720968359_1788353490942081131_n.jpg') }}" alt="Vin rouge / blanc (verre)"></a>
					</div>
					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">Vin rouge / blanc (verre)</a>
						<span class="txt23">Sélection du sommelier</span>
						<span class="txt22 m-t-20">4 500 F</span>
						<button class="btn-add-cart btn2 flex-c-m size13 txt11 trans-0-4 m-t-10" data-name="Vin rouge / blanc (verre)" data-price="4500">
							<i class="fa fa-plus m-r-5"></i>Ajouter
						</button>
					</div>
				</div>

				<div class="item-gallery isotope-item blo4 flex-w flex-col-l-sm m-b-30 col-md-8 col-lg-6 boissons">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="{{ asset('img/577906330_122128832738968359_4663214213154748486_n.jpg') }}" alt="Champagne (coupe)"></a>
					</div>
					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">Champagne (coupe)</a>
						<span class="txt23">Champagne brut</span>
						<span class="txt22 m-t-20">9 500 F</span>
						<button class="btn-add-cart btn2 flex-c-m size13 txt11 trans-0-4 m-t-10" data-name="Champagne (coupe)" data-price="9500">
							<i class="fa fa-plus m-r-5"></i>Ajouter
						</button>
					</div>
				</div>
				
				</div>
			
			</div>

			<!-- Desserts -->
			<div class="menu-category m-b-50">
				<h3 class="tit5 t-center m-b-30" style="color: #F56F3B;">Desserts</h3>
				<div class="category-divider m-b-30" style="height: 3px; background: linear-gradient(90deg, #F56F3B 0%, #FFC857 50%, #F56F3B 100%);"></div>
				
<div class="row wrap-gallery isotope-grid">
	<div class=" item-gallery isotope-item blo4 flex-w flex-col-l-sm m-b-30 desserts">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="{{ asset('img/578495933_122128832654968359_1246669782403470621_n.jpg') }}" alt="Fondant au chocolat"></a>
					</div>
					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">Fondant au chocolat</a>
						<span class="txt23">Chocolat noir, cœur coulant</span>
						<span class="txt22 m-t-20">4 500 F</span>
						<button class="btn-add-cart btn2 flex-c-m size13 txt11 trans-0-4 m-t-10" data-name="Fondant au chocolat" data-price="4500">
							<i class="fa fa-plus m-r-5"></i>Ajouter
						</button>
					</div>
				</div>

				<div class="item-gallery isotope-item blo4 flex-w flex-col-l-sm m-b-30 desserts">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="{{ asset('img/578792574_122128832906968359_7952140690595437648_n.jpg') }}" alt="Tarte tatin mangue"></a>
					</div>
					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">Tarte tatin mangue</a>
						<span class="txt23">Mangue fraîche, caramel beurre salé</span>
						<span class="txt22 m-t-20">4 000 F</span>
						<button class="btn-add-cart btn2 flex-c-m size13 txt11 trans-0-4 m-t-10" data-name="Tarte tatin mangue" data-price="4000">
							<i class="fa fa-plus m-r-5"></i>Ajouter
						</button>
					</div>
				</div>

		
</div>

				
			</div>
		</div>
	</section>




	<!-- Dîner -->
	<section class="section-dinner bgwhite">
		<div class="header-dinner parallax0 parallax100" style="background-image: url('{{ asset('images/header-menu-02.jpg') }}');">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Dîner
				</h2>
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

@push('scripts')
<script>
	document.addEventListener('DOMContentLoaded', function () {
		const menuSection = document.querySelector('.section-mainmenu');
		if (!menuSection) return;

		const buttons = menuSection.querySelectorAll('.filter-tope-group button');
		const categories = menuSection.querySelectorAll('.menu-category');

		buttons.forEach((button) => {
			button.addEventListener('click', function () {
				const filter = this.getAttribute('data-filter');

				categories.forEach((category) => {
					const hasMatch = filter === '*' || category.querySelector(filter);
					category.style.display = hasMatch ? '' : 'none';
				});
			});
		});
	});
</script>
@endpush
