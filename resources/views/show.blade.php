<x-layout>

    <x-slot name="titre">
        Un films | TP1 - Films
    </x-slot>

    <header class="justify-content-center">
        <nav class="row fixed-top">
            <div class="col bouton-retour">
                <a href="/films/">
                    Retour aux films
                </a>
            </div>
            <div class="col form-recherche">
            </div>
        </nav>
    </header>

    <main>
        <div class="container-fluid show">

            <div class="row titre-film justify-content-center">
                <h1>{{ $film->title }}</h1>
            </div>
            <div class="row section-bas-film">
                <div class="col image pb-4">
                    <img src="{{ $film->poster_path }}">
                </div>
                <div class="col description mx-5">

                    <p class="texte mb-5">{{ $film->overview }}</p>
                    <h4 class="date-sortie">Date de sortie :  <span>{{ $film->release_date }}</span></h4>
                    <div class="ligne"></div>
                    <h4 class="appreciation">Appréciation moyenne :  <span>{{ $film->vote_average }}</span></h4>
                    <h4 class="votes">Nombres de votes :  <span>{{ $film->vote_count }}</span></h4>
                </div>
            </div>
        </div>
    </main>

</x-layout>

