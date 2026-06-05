@extends('layouts.app')

@section('title', $post->title . ' — Iguyzza')

@section('content')
<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url('{{ asset($post->image_path ?: 'images/bg-title-page-03.jpg') }}');">
	<h2 class="tit6 t-center">{{ $post->title }}</h2>
</section>

<div class="ig-orange-band"></div>

<!-- Content page -->
<section class="bg1-pattern p-t-110 p-b-100">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-9">
				<div class="bgwhite bo-rad-10 p-l-40 p-r-40 p-t-45 p-b-45">
					@if($post->published_at)
						<p class="txt4 m-b-18">{{ $post->published_at->format('d/m/Y') }} par {{ $post->author_name ?: 'Iguyzza' }}</p>
					@endif

					<h3 class="tit5 m-b-25">{{ $post->title }}</h3>
					<p class="m-b-25">{{ $post->excerpt }}</p>

					<div class="txt23" style="line-height: 1.9;">
						{!! nl2br(e($post->content)) !!}
					</div>

					<a href="{{ route('blog') }}" class="txt4 dis-block m-t-35">
						<i class="fa fa-long-arrow-left m-r-10" aria-hidden="true"></i>
						Retour aux actualités
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
