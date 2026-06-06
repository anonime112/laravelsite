@extends('layouts.app')

@section('title', 'Actualités — Iguyzza')

@section('content')
<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url('{{ asset('img/table.jpg') }}');">
	<h2 class="tit6 t-center">Actualités</h2>
</section>

<div class="ig-orange-band"></div>

<!-- Content page -->
<section class="bg1-pattern p-t-110 p-b-100">
	<div class="container">
		<div class="title-section-ourmenu t-center m-b-45">
			<a href="{{ route('home') }}" class="logo-section-wrap m-b-15">
				<img src="{{ asset('images/icons/logo.png') }}" alt="Iguyzza" class="logo-section logo-section--sm">
			</a>
			<span class="tit2 t-center">Actualités</span>
			<h3 class="tit5 t-center m-t-2">Chez Iguyzza</h3>
		</div>

		@if($posts->isNotEmpty())
			<div class="row">
				@foreach($posts as $post)
					<div class="col-md-6 col-lg-4 p-b-35">
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
								<a href="{{ route('blog.detail', $post->slug) }}">
									<img src="{{ asset($post->image_path ?: 'images/blog-01.jpg') }}" alt="{{ $post->title }}">
								</a>

								@if($post->published_at)
									<div class="time-blog">{{ $post->published_at->format('d M Y') }}</div>
								@endif
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a href="{{ route('blog.detail', $post->slug) }}">
									<h4 class="txt5 color0-hov trans-0-4 m-b-13">{{ $post->title }}</h4>
								</a>

								<p class="m-b-20">{{ $post->excerpt }}</p>

								<a href="{{ route('blog.detail', $post->slug) }}" class="txt4">
									Lire la suite
									<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		@else
			<div class="cart-empty t-center">
				<p class="txt23">Aucun article n'est encore publié.</p>
			</div>
		@endif
	</div>
		<div class="header-dinner parallax0 parallax100" style="background-image: url(images/header-menu-02.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					astuce du chef 
				</h2>
			</div>
		</div>

		<div class="container">
			<div class="col-md-10">
	<!-- Block4 -->
						<div class="blo5 p-b-63">
							<div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
								<a href="blog-detail.html">
									<img src="img/plats6.jpeg" alt="IMG-BLOG">
								</a>

								<div class="date-blo4 flex-col-c-m">
									<span class="txt30 m-b-4">
										16
									</span>

									<span class="txt31">
										Dec, 2018
									</span>
								</div>
							</div>

						*


								<!-- - -->
							<div class="text-blo4 p-t-33">
								<h4 class="p-b-16">
									<a href="blog-detail.html" class="tit9">Cooking recipe Cuisine</a>
								</h4>

								<div class="txt32 flex-w p-b-24">
									<span>
										by Admin
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										28 December, 2018
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										Cooking, Food
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										8 commentaires
									</span>
								</div>

								<p>
									Bienvenue dans l'univers Iguyzza, consectetur adipiscing elit. Vivamus eget mi sem. Nulla facilisi. Sed ultricies eros a nibh tempus, in sodales mi vestibulum. Nullam quis dui ac nisl ultrices euismod et sit amet urna. Morbi semper sapien quis ex tempor, sit amet scelerisque eros rhoncus. Cras scelerisque auctor gravida. Nunc fermentum luctus rhoncus. Nulla vulputate fermentum convallis. In quis pellentesque tortor. Cras metus nibh, gravida vitae ante vel, finibus semper tellus. Nulla vel tincidunt magna. Morbi tempor velit lectus, eu commodo quam volutpat vitae.
								</p>
							</div>

								<a href="blog-detail.html" class="dis-block txt4 m-t-30">
									Lire la suite
									<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								</a>
							</div>
						</div>
			</div>
			
		</div>
</section>
@endsection
