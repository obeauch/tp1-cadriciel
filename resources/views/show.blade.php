<x-layout>

    <x-slot name="titre">
        Un films | TP1 - Films
    </x-slot>

    <main>
        <div class="container-fluid show">
            <a href="/films/">Retour aux films
            </a>

            <div class="row">
                <h1>{{ $film->title }}</h1>
            </div>
            <div class="row section-bas-film">
                <div class="col">
                    <img src="{{ $film->poster_path }}" class="mb-5">
                </div>
                <div class="col">

                    <p class="description mb-5">{{ $film->overview }}</p>
                    <h4 class="date-sortie">Date de sortie :  <span>{{ $film->release_date }}</span></h4>
                    <div class="ligne"></div>
                    <h4 class="appreciation">Appréciation moyenne :  <span>{{ $film->vote_average }}</span></h4>
                    <h4 class="votes">Nombres de votes :  <span>{{ $film->vote_count }}</span></h4>
                </div>
            </div>
        </div>
    </main>

</x-layout>

