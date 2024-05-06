@extends('pages.racine')

@section('title', "Formulaire d'inscription")

@section('content')
    <div class="l-middle-section">
    </div>
    <div class="l-middle-scroll">
        <div class="l-middle-content">
            <main class="composant-form-content">
                <div class="composant-form-content__wrapper">
                    <div class="composant-form-content__main">
                        @include('pages.composants.formulaire-inscription')
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection