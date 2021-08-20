@extends('layouts.home')

@section('content')
    <header class="header valign bg-img parallaxie" data-overlay-dark="6"
            data-background="{{ asset('img/b1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center caption mt-50">
                    <h1 class="title-header">Votre Agence <br> Des Medias Sociaux</h1>
                    <div class="row justify-content-center">
                        <div class="col-lg-12 col-md-12">
                            <p>
                                Nous aidons les marques avec différents aspects de leur stratégie de marketing sur les
                                réseaux sociaux en déployant des services axés sur les résultats.
                            </p>
                        </div>
                    </div>
                    <a href="#" class="mybtn">En savoir plus</a>
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
                        <h3 class="main-title wow" data-splitting>
                            Nous sommes plus qu’une agence digitale.
                        </h3>
                        <p class="wow txt" data-splitting>
                            Nous sommes des créatifs, des designers des artistes,
                            des papillons sociaux, des developpeurs, des stratèges.
                            Plus que tout, nous sommes un groupe curieux, toujours
                            à l’affut de l’evolution. La seule cohérence que nous
                            connaissons est le « changement » et nous liaisons ainsi.
                            <br>
                            Alors, afin de toujours donner le meilleur de nous même,
                            nous aimerions collaborer avec des clients qui partagent
                            notre objectif et nos passions. Comprendre que la
                            récompense pour créer quelque chose de vraiment original
                            ne vient pas sans le risque d'essayer quelque chose de nouveau.
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
            <div class="title_box ">
                <h6 class="teko_fond">NOS SERVICES</h6>
                <h2 class="title">Nos différents services.</h2>
                <p class="description">
                    Leader dans le digital et tout ce qui est marketing grace à nos stratégies innovantes et notre
                    équipe de professionnels expérimentés, Voici quelques options que nous proposons.
                </p>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="serv_card">
                        <i class="bx bx-group"></i>
                        <h5>Media Management</h5>
                        <p>
                            À travers une puissance de conception, de rédaction et une planification stratégique, nous imaginons
                            et exécutons différentes campagnes publicitaires à fort impact.
                        </p>
                        <div class="btn">
                            <a href="#" class="mybtn">Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="serv_card">
                        <i class="bx bxs-megaphone"></i>
                        <h5>Digital Marketing</h5>
                        <p>
                            Nous vous aiderons à définir votre objectif ultime, à créer une communauté
                            et une connexion réelle avec les publics cibles et à promouvoir votre
                            marque et vos services à l'aide de nos influenceurs.
                        </p>
                        <div class="btn">
                            <a href="#" class="mybtn">Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="serv_card">
                        <i class="bx bxs-pen"></i>
                        <h5>Graphic/Brand Design</h5>
                        <p>
                            Les grandes histoires font appel aux émotions les plus profondes et incitent les gens à passer à l'action.
                            Ils sont l'outil préféré que nous utilisons pour donner à votre marque une âme et une personnalité.
                        </p>
                        <div class="btn">
                            <a href="#" class="mybtn">Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="serv_card">
                        <i class="bx bxs-color-fill"></i>
                        <h5>UI/UX Design</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, eaque! Exercitationem
                            veritatis numquam excepturi ullam est, odio et, aperiam, ad iusto qui nobis fuga.
                        </p>
                        <div class="btn">
                            <a href="#" class="mybtn">Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="serv_card">
                        <i class="bx bx-desktop"></i>
                        <h5>Web Development</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, eaque! Exercitationem
                            veritatis numquam excepturi ullam est, odio et, aperiam, ad iusto qui nobis fuga.
                        </p>
                        <div class="btn">
                            <a href="#" class="mybtn">Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="serv_card">
                        <i class="bx bx-play-circle"></i>
                        <h5>Motion Graphic</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, eaque! Exercitationem
                            veritatis numquam excepturi ullam est, odio et, aperiam, ad iusto qui nobis fuga.
                        </p>
                        <div class="btn">
                            <a href="#" class="mybtn">Voir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tarification section-padding">
        <div class="container">
            <div class="title_box">
                <h6 class="teko_fond">PRIX</h6>
                <h2 class="title">NOS TARIFS</h2>
                <p class="description">Choisissez un plan qui convient à votre entreprise</p>
                <br>
                <h2 class="greennn">Special promo</h2>
            </div>
            <div class="package-container">
                <div class="package">
                    <h4 class="first">Classique</h4>
                    <h2 class="text1"><sup>XAF</sup>90.000<sub>/Mois</sub></h2>
                    <ul class="list">
                        <li class="blist">
                            <span>Gestion de medias</span>
                            <i class="bx bx-check"></i>
                        </li>
                        <li class="blist">
                            <span>Qoorayeurs niveau 2</span>
                            <i class="bx bx-check"></i>
                        </li>
                        <li class="blist">
                            <span>Publicité payée</span>
                            <i class="bx bx-check"></i>
                        </li>
                        <li class="blist">
                            <span>-10% sur les livres publiés</span>
                            <i class="bx bx-check"></i>
                        </li>
                        <li class="blist">
                            <span>Site web gratuit</span>
                            <i class="uncheck bx bx-check"></i>
                        </li>
                        <li class="blist">
                            <span>1 nom de domaine offert</span>
                            <i class="uncheck bx bx-check"></i>
                        </li>
                        <li class="blist">
                            <span>Hebergement sur 6 mois</span>
                            <i class="uncheck bx bx-check"></i>
                        </li>
                    </ul>
                    <div class="mybtn">
                        <a href="#" class="btnn">Commencer</a>
                    </div>
                </div>

                <div class="package pro">
                    <h4 class="first ">Professionnel</h4>
                    <h2 class="text1">150.000<sub>XAF</sub></h2>
                    <ul class="list">
                        <li class="blist">
                            <span>Gestion de medias</span>
                            <i class="bx bx-check"></i>
                        </li>
                        <li class="blist">
                            <span>Qoorayeurs niveau 3</span>
                            <i class="bx bx-check"></i>
                        </li>
                        <li class="blist">
                            <span>Publicité payée</span>
                            <i class="bx bx-check"></i>
                        </li>
                        <li class="blist">
                            <span>-10% sur les livres publiés</span>
                            <i class="bx bx-check"></i>
                        </li>
                        <li class="blist">
                            <span>Site web gratuit</span>
                            <i class="bx bx-check"></i>
                        </li>
                        <li class="blist">
                            <span>1 nom de domaine offert</span>
                            <i class="uncheck bx bx-check"></i>
                        </li>
                        <li class="blist">
                            <span>Hebergement sur 6 mois</span>
                            <i class="uncheck bx bx-check"></i>
                        </li>
                    </ul>
                    <div class="mybtn">
                        <a href="#" class="btnn">Commencer</a>
                    </div>
                </div>

                <div class="package">
                    <h4 class="first">Premium</h4>
                    <h2 class="text1">200.000<sub>XAF</sub></h2>
                    <ul class="list">
                        <li class="blist">
                            <span>Gestion de medias</span>
                            <i class="bx bx-check"></i>
                        </li>
                        <li class="blist">
                            <span>Qoorayeurs niveau 4</span>
                            <i class="bx bx-check"></i>
                        </li>
                        <li class="blist">
                            <span>Publicité payée</span>
                            <i class="bx bx-check"></i>
                        </li>
                        <li class="blist">
                            <span>-10% sur les livres publiés </span>
                            <i class="bx bx-check"></i>
                        </li>
                        <li class="blist">
                            <span>Site web gratuit</span>
                            <i class="bx bx-check"></i>
                        </li>
                        <li class="blist">
                            <span>1 nom de domaine offert</span>
                            <i class="bx bx-check"></i>
                        </li>
                        <li class="blist">
                            <span>Hebergement sur 6 mois</span>
                            <i class="bx bx-check"></i>
                        </li>
                    </ul>
                    <div class="mybtn">
                        <a href="#" class="btnn">Commencer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="numbers section-padding parallaxie parallax1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 ariba">
                    <div class="item text-center mb-md50">
                        <div class="stat">
                            <h2 class="count">110</h2>
                            <sup>+</sup>
                        </div>
                        <h6>Clients satisfaits</h6>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 ariba">
                    <div class="item text-center mb-md50">
                        <div class="stat">
                            <h2 class="count">69</h2>
                            <sup>+</sup>
                        </div>
                        <h6>Projets Réalisés</h6>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 ariba">
                    <div class="item text-center mb-sm50">
                        <div class="stat">
                            <h2 class="count">2500</h2>
                            <sup>+</sup>
                        </div>
                        <h6>Heures De Suivi</h6>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 ariba">
                    <div class="item text-center">
                        <div class="stat">
                            <h2 class="count">250</h2>
                            <sup>+</sup>
                        </div>
                        <h6>Partenaires</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="qooraya section-padding">
        <div class="container">
            <div class="title_box ">
                <h6 class="teko_fond">INFLUENCEURS</h6>
                <h2 class="title">NOS QOORAYEURS</h2>
                <p class="description">Toute la visibilité de nos papillons sociaux à votre disponibilité</p>
            </div>

            <div class="row mt-80">
                <div class="col-12 col-md-6 col-lg-4 qoora qoo1">
                    <div class="qoora_card ">
                        <div class="content">
                            <div class="box_img">
                                <img class="page_img" src="{{ asset('img/pages/vshop.png') }}" alt="">
                            </div>
                            <h4 class="page_name">Vshop</h4>
                            <p class="type">Produits/Services</p>
                            <h4 class="level">QOORAYEUR N2</h4>
                            <div class="box_stat row">
                                <div class="stat1 stat col-md-6 ">
                                    <div class="content">
                                        <h5 class="toutch">15 000</h5>
                                        <p class="public">Personnes touchées par publication</p>
                                        <div class="stat_img mt-5"><img src="{{ asset('img/stat/stat.png') }}" alt=""></div>
                                        <p class="flux mt-10"><span>6.9%</span> ce dernier mois</p>
                                    </div>
                                </div>
                                <div class="stat2 stat col-md-6">
                                    <div class="content">
                                        <div class="content1 cont">
                                            <div class="iconn"><i class="bx bxs-group"></i></div>
                                            <div class="box_follow">
                                                <h5 class="number">2.9k</h5>
                                                <p class="desc">Abonnés</p>
                                            </div>
                                        </div>

                                        <div class="separe"></div>

                                        <div class="content2 cont">
                                            <div class="iconn"><i class="bx bxs-heart"></i></div>
                                            <div class="box_follow">
                                                <h5 class="number">1.8k</h5>
                                                <p class="desc">J'aimes</p>
                                            </div>
                                        </div>

                                        <div class="separe"></div>

                                        <div class="content3 cont">
                                            <div class="iconn">
                                                <span class="mynum">+3</span>
                                            </div>
                                            <p class="pub_nber">Posts/jour</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 qoora qoo1">
                    <div class="qoora_card ">
                        <div class="content">
                            <div class="box_img">
                                <img class="page_img" src="{{ asset('img/pages/BTVVVVVVVVV.png') }}" alt="">
                            </div>
                            <h4 class="page_name">Buzz TV 237</h4>
                            <p class="type">Media</p>
                            <h4 class="level">QOORAYEUR N3</h4>
                            <div class="box_stat row">
                                <div class="stat1 stat col-md-6 ">
                                    <div class="content">
                                        <h5 class="toutch">100 000</h5>
                                        <p class="public">Personnes touchées par publication</p>
                                        <div class="stat_img mt-5">
                                            <img src="{{ asset('img/stat/stat.png') }}" alt="">
                                        </div>
                                        <p class="flux mt-10"><span>9.6%</span> ce dernier mois</p>
                                    </div>
                                </div>
                                <div class="stat2 stat col-md-6">
                                    <div class="content">
                                        <div class="content1 cont">
                                            <div class="iconn"><i class="bx bxs-group"></i></div>
                                            <div class="box_follow">
                                                <h5 class="number">17.9k</h5>
                                                <p class="desc">Abonnés</p>
                                            </div>
                                        </div>

                                        <div class="separe"></div>

                                        <div class="content2 cont">
                                            <div class="iconn"><i class="bx bxs-heart"></i></div>
                                            <div class="box_follow">
                                                <h5 class="number">17.8k</h5>
                                                <p class="desc">J'aimes</p>
                                            </div>
                                        </div>

                                        <div class="separe"></div>

                                        <div class="content3 cont">
                                            <div class="iconn">
                                                <span class="mynum">+6</span>
                                            </div>
                                            <p class="pub_nber">Posts/jour</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 qoora ">
                    <div class="qoora_card ">
                        <div class="content">
                            <div class="box_img">
                                <img class="page_img" src="{{ asset('img/pages/vshop.png') }}" alt="">
                            </div>
                            <h4 class="page_name">Rosie's Blog</h4>
                            <p class="type">Blog</p>
                            <h4 class="level">QOORAYEUR N4</h4>
                            <div class="box_stat row">
                                <div class="stat1 stat col-md-6 ">
                                    <div class="content">
                                        <h5 class="toutch">200 000</h5>
                                        <p class="public">Personnes touchées par publication</p>
                                        <div class="stat_img mt-5">
                                            <img src="{{ asset('img/stat/stat.png') }}" alt="">
                                        </div>
                                        <p class="flux mt-10"><span>6.9%</span> ce dernier mois</p>
                                    </div>
                                </div>
                                <div class="stat2 stat col-md-6">
                                    <div class="content">
                                        <div class="content1 cont">
                                            <div class="iconn"><i class="bx bxs-group"></i></div>
                                            <div class="box_follow">
                                                <h5 class="number">34.9k</h5>
                                                <p class="desc">Abonnés</p>
                                            </div>
                                        </div>

                                        <div class="separe"></div>

                                        <div class="content2 cont">
                                            <div class="iconn"><i class="bx bxs-heart"></i></div>
                                            <div class="box_follow">
                                                <h5 class="number">35.2k</h5>
                                                <p class="desc">J'aimes</p>
                                            </div>
                                        </div>

                                        <div class="separe"></div>

                                        <div class="content3 cont">
                                            <div class="iconn">
                                                <span class="mynum">+3</span>
                                            </div>
                                            <p class="pub_nber">Posts/jour</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="avis">
        <div class="container">
        </div>
    </div>

    <section class="block-sec">
        <div class="background bg-img section-padding pb-0" data-background="{{ asset('img/slid/1.jpg') }}" data-overlay-dark="8">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="vid-area">
                            <div class="vid-icon">
                                <a class="vid" href="https://vimeo.com/127203262">
                                    <button type="button" class="btn btn-1 btn-n video-play-btn">
                                        <img src="{{ asset('img/play.png') }}" alt="">
                                    </button>
                                </a>
                            </div>

                            <div class="cont">
                                <h3 class="wow" data-splitting>Alors ça c'est nous. Il n'y a pas d'autres façons de le dire.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="testim-box">
                            <div class="head-box">
                                <h6 class="wow fadeIn" data-wow-delay=".5s">Avis des clients</h6>
                                <h4 class="wow fadeInLeft" data-wow-delay=".5s">Que disent-ils?</h4>
                            </div>
                            <div class="slic-item wow fadeInUp" data-wow-delay=".5s">


                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active indica"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="indica"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="indica"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active item">
                                            <p>
                                                Grâce au travail de Qoora, nous avons constaté une forte augmentation des ventes et de notre visibilité,
                                                ainsi qu'une amélioration considérable de la qualité de nos contenus.
                                            </p>
                                            <div class="info">
                                                <div class="cont">
                                                    <div class="author">
                                                        <h6 class="author-name custom-font">Mr GAETAN KOUAM</h6>
                                                        <span class="author-details">Founder, Venus Restaurant</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item item">
                                            <p>
                                                Ils sont réactifs avec une approaches rafraîchissante, et le travail est de premier ordre.
                                                Plein de petites touches qui prouvent leur engagement envers la qualité.
                                            </p>
                                            <div class="info">
                                                <div class="cont">
                                                    <div class="author">
                                                        <h6 class="author-name custom-font">Mr Babbel KITIO</h6>
                                                        <span class="author-details">Directeur Général, <strong>LTech</strong></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item item">
                                            <p>
                                                Waouh ! C'est fou à quel point nous avons touché un nombre incroyable de personnes pour notre campagne publicitaire.
                                                Les objectifs préalablements définis sont largements atteints.
                                            </p>
                                            <div class="info">
                                                <div class="cont">
                                                    <div class="author">
                                                        <h6 class="author-name custom-font">Sherifa MBALLA</h6>
                                                        <span class="author-details">Drirectrice Commercial, <strong>Veroshop</strong></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="skills-circle sub-bg pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="item wow fadeInLeft" data-wow-delay=".6">
                                    <div class="skill" data-value="0.9">
                                        <span class="custom-font">90%</span>
                                    </div>
                                    <div class="cont">
                                        <span>Project</span>
                                        <h6>Consulting</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item wow fadeInLeft" data-wow-delay=".3">
                                    <div class="skill" data-value="0.75">
                                        <span class="custom-font">75%</span>
                                    </div>
                                    <div class="cont">
                                        <span>App</span>
                                        <h6>Development</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
