@extends('layouts.app')

@section('title', 'Carte — Iguyzza | Restaurant & Lounge, Abidjan')

@section('content')
<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url('{{ asset('images/bg-title-page-01.jpg') }}');">
	<div class="t-center">
		<a href="{{ route('home') }}" class="logo-section-wrap m-b-20">
			<img src="{{ asset('images/icons/logo.png') }}" alt="Iguyzza" class="logo-section">
		</a>
		<h2 class="tit6 t-center">Notre carte</h2>
	</div>
</section>

<div class="ig-orange-band"></div>
<div  class="content-intro bg2-pattern p-t-77 p-b-133">
          <div class="container  ">
				<div class="row">
					<div class="col-md-4 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<a href="#"><img src="{{ asset('img/plats6.jpeg') }}" alt="IMG-INTRO"></a>
							</div>

						</div>
					</div>

					<div class="col-md-4 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<a href="#"><img src="{{ asset('img/plats5.jpeg') }}" alt="IMG-INTRO"></a>
							</div>

							
						</div>
					</div>

					<div class="col-md-4 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<a href="#"><img src="{{ asset('img/plats7.jpeg') }}" alt="IMG-INTRO"></a>
							</div>

						</div>
					</div>

				</div>
			</div>
				<div class="container t-center m-b-5">

	</div>

	@if($categories->isNotEmpty())
		<div class="wrap-label-gallery filter-tope-group size27 flex-w flex-sb-m m-l-r-auto flex-col-c-sm p-l-15 p-r-15 m-b-20">
			<button class="label-gallery txt26 trans-0-4 is-actived" data-filter="*">Tout</button>

			@foreach($categories as $category)
				<button class="label-gallery txt26 trans-0-4" data-filter=".{{ $category->slug }}">
					{{ $category->name }}
				</button>
			@endforeach
		</div>
</div>

			

<!-- Main menu -->
<section class="container section-mainmenu p-t-110 p-b-100 ">


		<div class="wrap-menu p-l-25 p-r-25">
			@foreach($categories as $category)
				@if($category->dishes->isNotEmpty())
					<div class="menu-category m-b-50">
						<h3 class="tit5 t-center m-b-30">{{ $category->name }}</h3>
						<div class="category-divider m-b-30"></div>

						<div class="row wrap-gallery isotope-grid">
							@foreach($category->dishes as $dish)
								<div class="item-gallery isotope-item blo4 flex-w flex-col-l-sm m-b-30 col-md-8 col-lg-6 {{ $category->slug }}">
									<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
										<img src="{{ asset($dish->image_path ?: 'images/our-menu-01.jpg') }}" alt="{{ $dish->name }}">
									</div>

									<div class="text-blo3 size21 flex-col-l-m">
										<h4 class="txt21 m-b-3">{{ $dish->name }}</h4>
										<span class="txt23">{{ $dish->description }}</span>
										<span class="txt22 m-t-20">{{ number_format($dish->price, 0, ',', ' ') }} F</span>
										<button class="btn-add-cart btn2 flex-c-m size13 txt11 trans-0-4 m-t-10" data-name="{{ $dish->name }}" data-price="{{ $dish->price }}">
											<i class="fa fa-plus m-r-5"></i>Ajouter
										</button>
									</div>
								</div>
							@endforeach
						</div>
					</div>
				@endif
			@endforeach
		</div>
	@else
		<div class="cart-empty t-center">
			<p class="txt23">Aucun plat n'est encore enregistré.</p>
		</div>
	@endif
</section>

<!-- Sign up -->
<div class="section-signup bg1-pattern p-t-85 p-b-85">
	<form class="flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5">
		<span class="txt5 m-10">Inscrivez-vous aux offres</span>
		<div class="wrap-input-signup size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10">
			<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email-address" placeholder="Adresse e-mail">
			<i class="fa fa-envelope ab-r-m m-r-18" aria-hidden="true"></i>
		</div>
		<button type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10">S'inscrire</button>
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
