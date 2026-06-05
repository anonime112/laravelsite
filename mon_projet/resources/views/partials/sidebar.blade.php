<!-- Sidebar -->
	<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

		<!-- - -->
		<ul class="menu-sidebar p-t-95 p-b-70">
			<li class="t-center m-b-13">
				<a href="{{ route('home') }}" class="txt19">Accueil</a>
			</li>

			<li class="t-center m-b-13">
				<a href="{{ route('menu') }}" class="txt19">Carte</a>
			</li>

			<li class="t-center m-b-13">
				<a href="{{ route('gallery') }}" class="txt19">Galerie</a>
			</li>

			<li class="t-center m-b-13">
				<a href="{{ route('about') }}" class="txt19">À propos</a>
			</li>

			<li class="t-center m-b-13">
				<a href="{{ route('blog') }}" class="txt19">Actualités</a>
			</li>

			<li class="t-center m-b-33">
				<a href="{{ route('contact') }}" class="txt19">Contact</a>
			</li>
			<li class="t-center m-b-33">
				<a href="{{ route('cart') }}" class="txt19 cart-icon sidebar-cart-link">
					<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					<span class="cart-count">0</span>
				</a>
			</li>

			<li class="t-center">
				<!-- Button3 -->
				<a href="{{ route('reservation') }}" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
					Réservation
				</a>
			</li>
		</ul>

		<!-- - -->
		<div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">
			<a href="{{ route('home') }}" class="logo-section-wrap m-b-25">
				<img src="{{ asset('images/icons/logo.png') }}" alt="Iguyzza" class="logo-section logo-section--sm">
			</a>

			<!-- - -->
			<h4 class="txt20 m-b-33">
				Galerie
			</h4>

			<!-- Galerie -->
			<div class="wrap-gallery-sidebar flex-w">
				<a class="item-gallery-sidebar wrap-pic-w" href="{{ asset('img/548330204_122119031846968359_2643696780765774991_n.jpg') }}" data-lightbox="gallery-footer">
					<img src="{{ asset('img/561537983_122125478630968359_5990106595369622758_n.jpg') }}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{ asset('img/565655299_122125014536968359_8373653522952522296_n.jpg') }}" data-lightbox="gallery-footer">
					<img src="{{ asset('img/566199314_122125219058968359_6497133020676800954_n.jpg') }}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{ asset('img/567521816_122125478618968359_1312821641899528111_n.jpg') }}" data-lightbox="gallery-footer">
					<img src="{{ asset('img/571168370_122126454290968359_877040687061528344_n.jpg') }}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{ asset('img/571284060_122126454374968359_3826126251373686210_n.jpg') }}" data-lightbox="gallery-footer">
					<img src="{{ asset('img/572396894_122126454302968359_3627713918198532208_n.jpg') }}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{ asset('img/576239675_122128832876968359_9009437669825423605_n.jpg') }}" data-lightbox="gallery-footer">
					<img src="{{ asset('img/576644887_122128832888968359_3571891469853851403_n.jpg') }}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{ asset('img/576956323_122128832702968359_9044786545599895536_n.jpg') }}" data-lightbox="gallery-footer">
					<img src="{{ asset('img/577450349_122128832690968359_4123692393177002918_n.jpg') }}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{ asset('img/577568176_122128832720968359_1788353490942081131_n.jpg') }}" data-lightbox="gallery-footer">
					<img src="{{ asset('img/577906330_122128832738968359_4663214213154748486_n.jpg') }}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{ asset('img/578495933_122128832654968359_1246669782403470621_n.jpg') }}" data-lightbox="gallery-footer">
					<img src="{{ asset('img/578792574_122128832906968359_7952140690595437648_n.jpg') }}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{ asset('img/578957250_122129552708968359_1246667593313536005_n.jpg') }}" data-lightbox="gallery-footer">
					<img src="{{ asset('img/579663696_122129552660968359_6556311566667260152_n.jpg') }}" alt="GALLERY">
				</a>
			</div>
		</div>
	</aside>