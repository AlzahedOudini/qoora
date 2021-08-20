@extends('layouts.home', [
    'title' => 'Qoora - Service digital',
    'meta' => ['Qoora']
])

@section('content')
    <header class="valign bg-img parallaxie header-other" data-overlay-dark="6"
            data-background="{{ asset('img/b1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center caption mt-50">
                    <h1 class="title-header">Marketing Digital</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="services section-padding">
        <div class="container">
            <div class="title_box">
                <h6 class="teko_fond">Stratège fin</h6>
                <h2 class="title">Positionnez votre marque pour réussir</h2>
                <p class="description">
                    Atteignez votre public au bon moment, avec le bon message et vous transformerez n’importe quel prospect en un clic précieux.
                    Nous mettons la puissance des <span class="greennn">médias payants</span>, du <span class="greennn">marketing organique</span>
                    et surtout de <span class="greennn">notre communauté d’influenceurs</span>
                    au service de votre marque. Nos tactiques de marketing numérique de pointe aide à:
                </p>
            </div>
        </div>
    </div>
@endsection
