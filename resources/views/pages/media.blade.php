@extends('layouts.home', [
    'title' => 'Qoora - Service Management des médias',
    'meta' => ['Qoora', 'management', 'média'],
])

@section('content')
    <header class="valign bg-img parallaxie header-other" data-overlay-dark="6"
            data-background="{{ asset('img/b1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center caption mt-50">
                    <h1 class="title-header">Management Des Médias</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="services section-padding">
        <div class="container">
            <div class="title_box">
                <h6 class="teko_fond">LE MANAGEMENT</h6>
                <h2 class="title">Gestion des médias sociaux</h2>
                <p class="description">
                    Les médias sociaux sont un moyen infaillible de créer une notoriété et d'augmenter la fidélité à la marque.
                    Bien que votre site Web renforce sa crédibilité, les médias sociaux sont un excellent moyen de se connecter personnellement
                    avec vos clients et d'humaniser votre marque. Avec plus de 53% de la population mondiale étant des utilisateurs actifs des médias sociaux,
                    vous avez le plus de potentiel pour gagner du terrain et construire une présence en ligne utile et durable.
                </p>
            </div>

            <div class="row mt-60">
                <div class="col-lg-5 colim">
                    <div class="img-mons">
                        <div class="img1 wow imago" data-wow-delay=".5s">
                            <img src="{{ asset('img/aa/socialaaaaaaa.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 valign">
                    <div class="content">
                        <h3 class="main-title wow" data-splitting>Création de contenu</h3>
                        <p class="wow txt" data-splitting>
                            Créer un contenu cohérent sur les réseaux sociaux qui parle à votre public aide à renforcer la crédibilité et augmente la confiance en la marque.
                            La perception que votre public a de votre marque est façonnée par ce qu'il voit sur vos réseaux sociaux.
                            Chaque élément de contenu, visuel et écrit, que vous publiez sur vos réseaux sociaux vous représente en tant qu'entreprise.
                            <br><br>
                            Nous vous aidons à mieux communiquer avec votre clientèle grâce à un contenu de médias sociaux qui renforce la fidélité à la marque et convertit.
                            Nous fonctionnons sous un seul principe : tout ce que nous faisons doit générer des résultats et un retour sur investissement.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mt-80">
                <div class="col-lg-6 valign">
                    <div class="content">
                        <h3 class="main-title wow" data-splitting>Gestion & Affichage</h3>
                        <p class="wow txt" data-splitting>
                            Créer un contenu cohérent sur les réseaux sociaux qui parle à votre public aide à renforcer la crédibilité et augmente la confiance en la marque.
                            La perception que votre public a de votre marque est façonnée par ce qu'il voit sur vos réseaux sociaux. Chaque élément de contenu, visuel et écrit,
                            que vous publiez sur vos réseaux sociaux vous représente en tant qu'entreprise.
                            <br><br>
                            Nous vous aidons à mieux communiquer avec votre clientèle grâce à un contenu de médias sociaux qui renforce la fidélité à la marque et convertit.
                            Nous fonctionnons sous un seul principe : tout ce que nous faisons doit générer des résultats et un retour sur investissement.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 colim">
                    <div class="img-mons">
                        <div class="img1 wow imago" data-wow-delay=".5s">
                            <img src="{{ asset('img/aa/socialaaaaaaa.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-60">
                <div class="col-lg-5 colim">
                    <div class="img-mons">
                        <div class="img1 wow imago" data-wow-delay=".5s">
                            <img src="{{ asset('img/aa/socialaaaaaaa.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 valign">
                    <div class="content">
                        <h3 class="main-title wow" data-splitting>Stratégie payante et organique</h3>
                        <p class="wow txt" data-splitting>
                            Le marketing des médias sociaux ne se limite pas à publier du contenu et à répondre aux commentaires et aux messages.
                            L'objectif des stratégies de médias sociaux payants et organiques est d'aider votre entreprise à établir une présence en ligne,
                            à générer du trafic vers votre site Web, à augmenter l'engagement à la marque et, par conséquent, la fidélité et l'achat des produits.
                            <br><br>
                            Avec les médias sociaux et toutes les autres stratégies de marketing numérique, vous le faites bien ou vous ne le faites pas du tout.
                            Si vous diffusez une publicité sur votre page Facebook, mais que votre page a de mauvaises critiques et une mauvaise stratégie de contenu,
                            la publicité peut faire plus de mal que de bien à votre entreprise.
                            <br><br>
                            Une excellente stratégie de médias sociaux tire parti des stratégies payantes et organiques.
                            Les deux sont des moyens infaillibles de vous aider à développer votre entreprise et à maximiser votre retour sur investissement.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
