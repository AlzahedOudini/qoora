@extends('layouts.home', ['title' => 'Qoora - Erreur (Page introuvable)'])

@section('content')
    <header class="valign bg-img parallaxie header-other" data-overlay-dark="6"
            data-background="{{ asset('img/b1.jpg') }}">

        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center caption mt-50">
                    <h1 class="title-header">Erreur 404 - Page non trouvé</h1>
                </div>
            </div>
        </div>
  </header>
@endsection
