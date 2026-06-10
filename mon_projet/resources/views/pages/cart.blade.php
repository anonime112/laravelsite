@extends('layouts.app')

@section('title', 'Iguyzza — Panier | Lounge & Événements, Abidjan')

@section('content')
<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url('{{ asset('img/table.jpg') }}');">
	<div class="t-center">
		<a href="{{ route('home') }}" class="logo-section-wrap m-b-20">
			<img src="{{ asset('images/icons/logo.png') }}" alt="Iguyzza" class="logo-section">
		</a>
		<h2 class="tit6 t-center">
			Votre panier
		</h2>
	</div>
</section>

<div class="ig-orange-band"></div>

<!-- Cart Section -->
<section class="section-cart bg1-pattern p-t-100 p-b-100">
	<div class="container">
		@if(session('success'))
			<div class="alert alert-success t-center">{{ session('success') }}</div>
			<div class="alert alert-success text-center">

    <h4>
        ✅ Commande envoyée avec succès
    </h4>

    <p>
        Merci pour votre commande.
    </p>

    <div id="pdf-download-container"></div>

</div>
		@endif

		<div class="row">
			<div class="col-md-8 col-lg-8 p-b-30">
				<div class="wrap-cart">
					<h3 class="tit5 t-center m-b-40">Articles dans votre panier</h3>

					<div id="cart-items">
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
				<div class="wrap-cart-summary bgwhite">
					<h3 class=" t-center m-b-30">Récapitulatif</h3>

					<div class="cart-summary">
						<div class="flex-w flex-b m-b-20">
							<span class="txt22">Sous-total</span>
							<span class="txt22" id="cart-subtotal">0 F</span>
						</div>

						<div class="flex-w flex-b m-b-20">
							<span class="txt22">Livraison</span>
							<span class="txt22">À confirmer</span>
						</div>

						<div class="flex-w flex-b m-b-30 bo5-b">
							<span class="txt21">Total</span>
							<span class="txt21 color-orange" id="cart-total">0 F</span>
						</div>

						<button type="button" id="checkout-button" class="btn1 flex-c-m size13 txt11 trans-0-4 w-full">
							Commander
						</button>

						<a href="{{ route('menu') }}" class="btn2 flex-c-m size13 txt11 trans-0-4 w-full m-t-10">
							Continuer mes achats
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="cart-checkout-panel m-t-25" id="checkout-panel" hidden>
			<div class="row">
				<div class="col-lg-7 p-b-30">
					<div class="checkout-card">
						<h3 class="tit5 m-b-10">Informations de commande</h3>
						<p class="checkout-note m-b-30">Remplissez ces informations pour préparer votre commande. L'équipe Iguyzza vous recontactera pour confirmer les détails.</p>

						<form id="checkout-form" method="POST" action="{{ route('orders.store') }}">
							@csrf
							<input type="hidden" name="cart_payload" id="cart-payload">

							<div class="row">
								<div class="col-md-6">
									<span class="txt9">Nom complet</span>
									<div class="checkout-field bo2 bo-rad-10 m-t-3 m-b-23">
										<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" placeholder="Votre nom" required>
									</div>
								</div>

								<div class="col-md-6">
									<span class="txt9">Numéro WhatsApp</span>
									<div class="checkout-field bo2 bo-rad-10 m-t-3 m-b-23">
										<input class="bo-rad-10 sizefull txt10 p-l-20" type="tel" name="whatsapp" placeholder="+225 07 00 00 00 00" required>
									</div>
								</div>

								<div class="col-md-6">
									<span class="txt9">E-mail</span>
									<div class="checkout-field bo2 bo-rad-10 m-t-3 m-b-23">
										<input class="bo-rad-10 sizefull txt10 p-l-20" type="email" name="email" placeholder="votre@email.com" required>
									</div>
								</div>

								<div class="col-md-6">
									<span class="txt9">Mode de réception</span>
									<div class="checkout-field bo2 bo-rad-10 m-t-3 m-b-23">
										<select class="bo-rad-10 sizefull txt10 p-l-20" name="delivery" required>
											<option value="">Choisir</option>
											<option value="Sur place">Sur place</option>
											<option value="À emporter">À emporter</option>
											<option value="Livraison">Livraison</option>
										</select>
									</div>
								</div>

								<div class="col-12">
									<span class="txt9">Adresse ou précision</span>
									<div class="checkout-field checkout-field-textarea bo2 bo-rad-10 m-t-3 m-b-23">
										<textarea class="bo-rad-10 sizefull txt10 p-l-20 p-t-15" name="notes" rows="4" placeholder="Adresse, heure souhaitée, consignes, allergies..."></textarea>
									</div>
								</div>
							</div>

							<button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
								Envoyer la demande
							</button>
						</form>
						
					</div>
				</div>

				<div class="col-lg-5 p-b-30">
					<div class="checkout-card checkout-order-card">
						<h3 class="tit5 m-b-25">Commande à confirmer</h3>
						<div id="checkout-order-summary" class="checkout-order-summary"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection


@if(session('success'))



@endif




@if(session('success'))

<script>

document.addEventListener('DOMContentLoaded', function() {

    const cart = JSON.parse(
        localStorage.getItem('cart')
    ) || [];

    if(cart.length === 0) return;

    const { jsPDF } = window.jspdf;

    const pdf = new jsPDF();

    let y = 20;

    pdf.setFontSize(18);
    pdf.text('IGUYZZA RESTAURANT', 20, y);

    y += 15;

    pdf.setFontSize(12);

    pdf.text(
        'Commande #{{ session("order_id") }}',
        20,
        y
    );

    y += 15;

    pdf.text(
        'Nom : {{ session("customer_name") }}',
        20,
        y
    );

    y += 10;

    pdf.text(
        'WhatsApp : {{ session("customer_whatsapp") }}',
        20,
        y
    );

    y += 10;

    pdf.text(
        'Email : {{ session("customer_email") }}',
        20,
        y
    );

    y += 10;

    pdf.text(
        'Mode : {{ session("customer_delivery") }}',
        20,
        y
    );

    y += 10;

    pdf.text(
        'Notes : {{ session("customer_notes") }}',
        20,
        y
    );

    y += 15;

    pdf.line(20, y, 190, y);

    y += 10;

    let total = 0;

    cart.forEach(item => {

        const subtotal =
            item.price * item.quantity;

        total += subtotal;

        pdf.text(
            item.name,
            20,
            y
        );

        pdf.text(
            item.quantity + ' x ' +
            item.price.toLocaleString() +
            ' FCFA',
            90,
            y
        );

        pdf.text(
            subtotal.toLocaleString() +
            ' FCFA',
            150,
            y
        );

        y += 10;

        if(y > 260)
        {
            pdf.addPage();
            y = 20;
        }
    });

    y += 10;

    pdf.line(20, y, 190, y);

    y += 15;

    pdf.setFontSize(14);

    pdf.text(
        'TOTAL : ' +
        total.toLocaleString() +
        ' FCFA',
        20,
        y
    );

    const pdfBlob = pdf.output('blob');

    const pdfUrl =
        URL.createObjectURL(pdfBlob);

    document
        .getElementById('pdf-download-container')
        .innerHTML = `
            <a href="${pdfUrl}"
               download="facture-{{ session('order_id') }}.pdf"
               class="btn1 flex-c-m size13 txt11 trans-0-4">

               Télécharger ma facture

            </a>
        `;

    localStorage.removeItem('cart');

});
</script>

@endif