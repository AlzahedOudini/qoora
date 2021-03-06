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
                        <h3 class="main-title wow" data-splitting>Nous sommes plus qu???une agence digitale.</h3>
                        <p class="wow txt" data-splitting>
                            Nous sommes des cr??atifs, des designers des artistes, des papillons sociaux, des developpeurs, des strat??ges.
                            Plus que tout, nous sommes un groupe curieux, toujours ?? l???affut de l???evolution. La seule coh??rence que nous
                            connaissons est le ?? changement ?? et nous l'aimons ainsi. Alors, afin de toujours donner le meilleur de nous m??me,
                            nous aimerions collaborer avec des clients qui partagent notre objectif et nos passions. Comprendre que la
                            r??compense pour cr??er quelque chose de vraiment original ne vient pas sans le risque d'essayer quelque chose de nouveau.
                        </p>

                        <div class="ftbox mt-30">
                            <ul class="block_cards">
                                <li class="wow fadeIn" data-wow-delay=".3s">
                                    <span class="icon pe-7s-gleam"></span>
                                    <h6 class="custom-font">Simplicit??</h6>
                                    <div class="dots">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </li>
                                <li class="space wow fadeIn" data-wow-delay=".5s">
                                    <i class="bx bx-bulb"></i>
                                    <h6 class="custom-font">Creativit??</h6>
                                    <div class="dots">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </li>
                                <li class="wow fadeIn" data-wow-delay=".8s">
                                    <i class="bx bx-target-lock"></i>
                                    <h6 class="custom-font">Efficacit??</h6>
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
                    Leader dans le digital et tout ce qui est marketing grace ?? nos strat??gies innovantes et notre
                    ??quipe de professionnels exp??riment??s, Voici quelques options que nous proposons.
                </p>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="serv_card">
                        <i class="bx bx-group"></i>
                        <h5>Notre Communaut??</h5>
                        <p>
                            Qoora c???est une communaut?? de plus de 200 membres au sein de laquelle nous retrouvons des d??veloppeurs, designers
                            et diverses autres comp??tances dans le domaine du digital dont plus de 100 influenceurs certifi??s au service de l???image de votre entreprise.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="serv_card">
                        <i class="bx bx-trending-up"></i>
                        <h5>Notre Croissance</h5>
                        <p>
                            Qoora ne cesse d???attirer de nouveau talents dot??s d???une cr??ativit?? incroyable au fil du temps pour une am??lioration
                            continu de la qualit?? de services que nous vous proposons.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="serv_card">
                        <i class="bx bx-shape-triangle"></i>
                        <h5>Notre Cr??ativit??</h5>
                        <p>
                            La cr??ativit?? est le moteur de l'inspiration et de la r??flexion de notre ??quipe. Comprenant ?? quelle vitesse l'industrie et les tendances changent,
                            notre ??quipe fournira toujours de nouvelles perspectives sur les id??es et les tactiques pour s'assurer que votre marque soit ?? la hauteur des attentes.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="serv_card">
                        <i class="bx bx-bar-chart-alt"></i>
                        <h5>Notre Strat??gie Marketing</h5>
                        <p>
                            Tout le monde a une histoire. Nous passerons en revue la v??tre et apr??s utilisation de la compr??hension de vos
                            probl??mes comme source d???inspiration, nous vous proposerons une nouvelle approche qui vous aidera ?? atteindre vos objectifs.
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
                        <h3 class="main-title wow" data-splitting>Une strat??gie marketing de tact</h3>
                        <p class="wow txt" data-splitting>
                            Les audiences d'aujourd'hui sont renforc??es par les technologies connect??es et bombard??es de messages marketing.
                            Il est plus difficile que jamais d'??tre entendu au-dessus du bruit.
                            <br><br>
                            M??me les marques ax??es sur la conversion doivent penser ?? cr??er et ?? fid??liser un public fid??le
                            pour se prot??ger contre la banalisation ou les perturbations. Pour construire ce genre de marque, vous avez besoin d'une histoire.
                            Et pour fa??onner cette histoire, vous avez besoin d'une strat??gie.
                            <br><br>
                            Qoora s'appuie sur son exp??rience num??rique, son expertise en analyse et son talent cr??atif pour ??laborer des strat??gies marketing
                            qui produisent des r??sultats exceptionnels. Dans un paysage de perturbations, notre ??quipe associe l'art
                            et la science de la strat??gie, saisissant les opportunit??s gr??ce ?? des informations exploitables et ?? une narration puissante.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mt-80">
                <div class="col-lg-5 valign">
                    <div class="content">
                        <h3 class="main-title wow" data-splitting>Une strat??gie numerique de qualit??</h3>
                        <p class="wow txt" data-splitting>
                            Aujourd'hui, les entreprises ne se diff??rencient pas par le produit ou le prix, mais par la qualit?? de l'exp??rience qu'elles offrent.
                            Et l'exp??rience client est de plus en plus num??ris??e.
                            <br> <br>
                            Avec une compr??hension claire de votre entreprise, de vos prospects, de votre voix, de votre messagerie,
                            de votre image de marque et de vos objectifs, nous cr??ons un package social unique et mettons sur pied une feuille de route num??rique solide,
                            accompagn?? d???une diffusion encadr??e pour des r??sultats bien d??termin??s.
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
                            Beaucoup de changements dans les m??dias sociaux. ?? travers La mise ?? jour permanente des algorithmes, l???ajout de nouvelles fonctionnalit??s
                            et le les utilisateurs qui changent de plate-forme, il devient de plus en plus difficile d'atteindre les gens et de fid??liser les utilisateurs.
                            <br><br>
                            Qoora s???appuie sur son ??quipe de talentueux strat??ges, r??dacteurs, concepteurs et sp??cialistes des m??dias payants
                            et surtout sur sa communaut?? d???influenceurs pour fournir non seulement l'expertise n??cessaire pour cr??er des contenus de m??dias sociaux engageantes
                            et dignes d'un clic, mais ??galement une audience cons??quente et s??lective selon votre marque, vos objectifs et vos besoins.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
