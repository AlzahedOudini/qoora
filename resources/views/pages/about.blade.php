@extends('layouts.home', [
    'title' => 'Qoora - A propos de nous',
    'meta' => ['Qoora']
])

@section('content')
    <header class="valign bg-img parallaxie header-other" data-overlay-dark="6"
          data-background="{{ asset('img/b1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center caption mt-50">
                    <h1 class="title-header">Parlons de nous !</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="img-mons">
                        <div class="row">
                            <div class="col-md-5 cmd-padding valign">
                                <div class="img1 wow imago" data-wow-delay=".5s">
                                    <img src="{{ asset('img/intro/1.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-7 cmd-padding">
                                <div class="img2 wow imago" data-wow-delay=".3s">
                                    <img src="{{ asset('img/intro/3.jpg') }}" alt="">
                                </div>
                                <div class="img3 wow imago" data-wow-delay=".8s">
                                    <img src="{{ asset('img/intro/2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 valign">
                    <div class="content">
                        <div class="sub-title">
                            <h6 class="teko_fond">A PROPOS DE NOUS</h6>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <h3 class="main-title wow" data-splitting>Nous sommes plus qu’une agence digitale.</h3>
                        <p class="wow txt" data-splitting>
                            Nous sommes des créatifs, des designers des artistes, des papillons sociaux, des developpeurs, des stratèges.
                            Plus que tout, nous sommes un groupe curieux, toujours à l’affut de l’evolution. La seule cohérence que nous
                            connaissons est le « changement » et nous l'aimons ainsi. Alors, afin de toujours donner le meilleur de nous même,
                            nous aimerions collaborer avec des clients qui partagent notre objectif et nos passions. Comprendre que la
                            récompense pour créer quelque chose de vraiment original ne vient pas sans le risque d'essayer quelque chose de nouveau.
                        </p>

                        <div class="ftbox mt-30">
                            <ul class="block_cards">
                                <li class="wow fadeIn" data-wow-delay=".3s">
                                    <span class="icon pe-7s-gleam"></span>
                                    <h6 class="custom-font">Simplicité</h6>
                                    <div class="dots">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </li>
                                <li class="space wow fadeIn" data-wow-delay=".5s">
                                    <i class="bx bx-bulb"></i>
                                    <h6 class="custom-font">Creativité</h6>
                                    <div class="dots">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </li>
                                <li class="wow fadeIn" data-wow-delay=".8s">
                                    <i class="bx bx-target-lock"></i>
                                    <h6 class="custom-font">Efficacité</h6>
                                    <div class="dots">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services section-padding">
        <div class="container">
            <div class="title_box">
                <h6 class="teko_fond">LE BON CHOIX</h6>
                <h2 class="title">Pourquoi nous ?</h2>
                <p class="description">
                    Leader dans le digital et tout ce qui est marketing grace à nos stratégies innovantes et notre
                    équipe de professionnels expérimentés, Voici quelques options que nous proposons.
                </p>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="serv_card">
                        <i class="bx bx-group"></i>
                        <h5>Notre Communauté</h5>
                        <p>
                            Qoora c’est une communauté de plus de 200 membres au sein de laquelle nous retrouvons des développeurs, designers
                            et diverses autres compétances dans le domaine du digital dont plus de 100 influenceurs certifiés au service de l’image de votre entreprise.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="serv_card">
                        <i class="bx bx-trending-up"></i>
                        <h5>Notre Croissance</h5>
                        <p>
                            Qoora ne cesse d’attirer de nouveau talents dotés d’une créativité incroyable au fil du temps pour une amélioration
                            continu de la qualité de services que nous vous proposons.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="serv_card">
                        <i class="bx bx-shape-triangle"></i>
                        <h5>Notre Créativité</h5>
                        <p>
                            La créativité est le moteur de l'inspiration et de la réflexion de notre équipe. Comprenant à quelle vitesse l'industrie et les tendances changent,
                            notre équipe fournira toujours de nouvelles perspectives sur les idées et les tactiques pour s'assurer que votre marque soit à la hauteur des attentes.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="serv_card">
                        <i class="bx bx-bar-chart-alt"></i>
                        <h5>Notre Stratégie Marketing</h5>
                        <p>
                            Tout le monde a une histoire. Nous passerons en revue la vôtre et après utilisation de la compréhension de vos
                            problèmes comme source d’inspiration, nous vous proposerons une nouvelle approche qui vous aidera à atteindre vos objectifs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="strategy about section-padding">
        <div class="container">
            <div class="title_box">
                <h6 class="teko_fond">STRATEGIE</h6>
                <h2 class="title">Notre plan d'action</h2>
            </div>
            <div class="row mt-60">
                <div class="col-lg-5 colim">
                    <div class="img-mons">
                        <div class="row">
                            <div class="col-md-5 cmd-padding valign">
                                <div class="img1 wow imago" data-wow-delay=".5s">
                                    <img src="{{ asset('img/intro/1.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-7 cmd-padding">
                                <div class="img2 wow imago" data-wow-delay=".3s">
                                    <img src="{{ asset('img/intro/3.jpg') }}" alt="">
                                </div>
                                <div class="img3 wow imago" data-wow-delay=".8s">
                                    <img src="{{ asset('img/intro/2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 valign">
                    <div class="content">
                        <h3 class="main-title wow" data-splitting>Une stratégie marketing de tact</h3>
                        <p class="wow txt" data-splitting>
                            Les audiences d'aujourd'hui sont renforcées par les technologies connectées et bombardées de messages marketing.
                            Il est plus difficile que jamais d'être entendu au-dessus du bruit.
                            <br><br>
                            Même les marques axées sur la conversion doivent penser à créer et à fidéliser un public fidèle
                            pour se protéger contre la banalisation ou les perturbations. Pour construire ce genre de marque, vous avez besoin d'une histoire.
                            Et pour façonner cette histoire, vous avez besoin d'une stratégie.
                            <br><br>
                            Qoora s'appuie sur son expérience numérique, son expertise en analyse et son talent créatif pour élaborer des stratégies marketing
                            qui produisent des résultats exceptionnels. Dans un paysage de perturbations, notre équipe associe l'art
                            et la science de la stratégie, saisissant les opportunités grâce à des informations exploitables et à une narration puissante.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mt-80">
                <div class="col-lg-5 valign">
                    <div class="content">
                        <h3 class="main-title wow" data-splitting>Une stratégie numerique de qualité</h3>
                        <p class="wow txt" data-splitting>
                            Aujourd'hui, les entreprises ne se différencient pas par le produit ou le prix, mais par la qualité de l'expérience qu'elles offrent.
                            Et l'expérience client est de plus en plus numérisée.
                            <br> <br>
                            Avec une compréhension claire de votre entreprise, de vos prospects, de votre voix, de votre messagerie,
                            de votre image de marque et de vos objectifs, nous créons un package social unique et mettons sur pied une feuille de route numérique solide,
                            accompagné d’une diffusion encadrée pour des résultats bien déterminés.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 colim">
                    <div class="img-mons">
                        <div class="row offset-lg-2">
                            <div class="col-md-7 cmd-padding">
                                <div class="img2 wow imago" data-wow-delay=".3s">
                                    <img src="{{ asset('img/intro/3.jpg') }}" alt="">
                                </div>
                                <div class="img3 wow imago" data-wow-delay=".8s">
                                    <img src="{{ asset('img/intro/2.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-5 cmd-padding valign">
                                <div class="img1 wow imago" data-wow-delay=".5s">
                                    <img src="{{ asset('img/intro/1.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-80">
                <div class="col-lg-5 colim">
                    <div class="img-mons">
                        <div class="row">
                            <div class="col-md-5 cmd-padding valign">
                                <div class="img1 wow imago" data-wow-delay=".5s">
                                    <img src="{{ asset('img/intro/1.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-7 cmd-padding">
                                <div class="img2 wow imago" data-wow-delay=".3s">
                                    <img src="{{ asset('img/intro/3.jpg') }}" alt="">
                                </div>
                                <div class="img3 wow imago" data-wow-delay=".8s">
                                    <img src="{{ asset('img/intro/2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 valign">
                    <div class="content">
                        <h3 class="main-title wow" data-splitting>Un marketing des medias novateurs</h3>
                        <p class="wow txt" data-splitting>
                            Beaucoup de changements dans les médias sociaux. À travers La mise à jour permanente des algorithmes, l’ajout de nouvelles fonctionnalités
                            et le les utilisateurs qui changent de plate-forme, il devient de plus en plus difficile d'atteindre les gens et de fidéliser les utilisateurs.
                            <br><br>
                            Qoora s’appuie sur son équipe de talentueux stratèges, rédacteurs, concepteurs et spécialistes des médias payants
                            et surtout sur sa communauté d’influenceurs pour fournir non seulement l'expertise nécessaire pour créer des contenus de médias sociaux engageantes
                            et dignes d'un clic, mais également une audience conséquente et sélective selon votre marque, vos objectifs et vos besoins.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
