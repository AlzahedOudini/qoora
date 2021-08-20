<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Digital agency">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" />

        <!-- Plugins -->
        <link rel="stylesheet" href="{{ asset('css/plugins.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">

        <title>{{ $title ?? 'Qoora' }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <nav class="navbar navbar-expand-lg">
            <div class=" space-head">

                <!-- Logo -->
                <a class="logo" href="#">
                    <span>Qoora</span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="icon-bar"><i class="bx bx-menu"></i></span>
                </button>

                <!-- navbar links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('home') }}">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">A propos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="true" aria-expanded="false">Services</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('media') }}">Media Management</a>
                                <a class="dropdown-item" href="{{ route('digital') }}">Marketing Digital</a>
                                <a class="dropdown-item" href="{{ route('graphic') }}">Design Graphique</a>
                                <a class="dropdown-item" href="{{ route('dev') }}">Developpement Web</a>
                                <a class="dropdown-item" href="{{ route('motion') }}">Video & Animation</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Livres</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Formations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}" data-scroll-nav="5">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <section class="call-action section-padding sub-bg bg-img" data-background="{{ asset('img/pattern.png') }}">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-9">
                        <div class="content sm-mb30">
                            <h5 class="wow" data-splitting>Parlons</h5>
                            <h2 class="wow" data-splitting>
                                De votre <b>futur projet</b><span>.</span>
                            </h2>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 valign">
                        <a href="{{ route('contact') }}" class="mybtn" data-wow-delay=".5s"><span>Contactez-nous</span></a>
                    </div>

                </div>
            </div>
        </section>

        <footer class="footer-half sub-bg section-padding pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="cont">
                            <div class="logo">
                                <a href="#">
                                    <img src="{{ asset('img/logo-light.png') }}" alt="">
                                </a>
                            </div>
                            <div class="con-info">
                                <ul>
                                    <li>
                                        <span>Email : </span>
                                        <strong>Qoora_support@qoora.com</strong>
                                    </li>
                                    <li>
                                        <span>Address : </span>
                                        <strong>Kotto (entrée chefferie), Douala Cameroun.</strong>
                                    </li>
                                    <li>
                                        <span>Phone : </span>
                                        <strong>(+237) 668 892 096</strong>
                                    </li>
                                </ul>
                            </div>
                            <div class="social-icon">
                                <h6 class="stit teko_fond">Suivez Nous</h6>
                                <div class="social">
                                    <a href="#" class="icon">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                    <a href="#" class="icon">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                    <a href="#" class="icon">
                                        <i class="bx bxl-instagram"></i>
                                    </a>
                                    <a href="#" class="icon">
                                        <i class="bx bxl-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-2">
                        <div class="subscribe mb-50">
                            <h6 class="stit teko_fond">Newslatter</h6>
                            <p>
                                Entrez votre adresse pour ne rien rater de notre actualité.
                            </p>
                            <form>
                                <div class="form-group">
                                    <input type="email" name="subscribe" placeholder="Votre Email">
                                    <button class="cursor-pointer">Souscrire</button>
                                </div>
                            </form>
                        </div>
                        <div class="insta">
                            <h6 class="stit teko_fond">Instagram Post</h6>
                            <div class="insta-gallary">
                                <a href="#">
                                    <img src="{{ asset('img/intro/1.jpg') }}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('img/intro/2.jpg') }}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('img/intro/3.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyrights text-center">
                    © 2021, Qoora. All Rights Reserved <a href="#">Kira Corp</a>.
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="{{ asset('librairies/js/jquery-3.0.0.min.js') }}"></script>
        <script src="{{ asset('librairies/js/jquery-migrate-3.0.0.min.js') }}"></script>

        <!-- popper.min -->
        <script src="{{ asset('librairies/js/popper.min.js') }}"></script>

        <!-- bootstrap -->
        <script src="{{ asset('librairies/bootstrap/js/bootstrap.min.js') }}"></script>

        <!-- scrollIt -->
        <script src="{{ asset('librairies/js/scrollIt.min.js') }}"></script>

        <!-- animated.headline -->
        <script src="{{ asset('librairies/js/animated.headline.js') }}"></script>

        <!-- jquery.waypoints.min -->
        <script src="{{ asset('librairies/js/jquery.waypoints.min.js') }}"></script>

        <!-- jquery.counterup.min -->
        <script src="{{ asset('librairies/js/jquery.counterup.min.js') }}"></script>
        <!-- parallaxie js -->
        <script src="{{ asset('librairies/js/parallaxie.js') }}"></script>

        <!-- owl carousel -->
        <script src="{{ asset('librairies/js/owl.carousel.min.js') }}"></script>

        <!-- jquery.magnific-popup js -->
        <script src="{{ asset('librairies/js/jquery.magnific-popup.min.js') }}"></script>

        <!-- stellar js -->

        <!-- isotope.pkgd.min js -->
        <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>

        <!-- YouTubePopUp.jquery -->
        <script src="{{ asset('librairies/js/YouTubePopUp.jquery.js') }}"></script>

        <!-- app js -->
        <script src="{{ asset('js/app.js') }}"></script>

        <!-- validator js -->
        <script src="{{ asset('js/validator.js') }}"></script>

        <!-- custom scripts -->
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
