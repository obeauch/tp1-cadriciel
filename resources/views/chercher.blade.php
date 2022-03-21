<x-layout>
    <x-slot name="titre">
        Les films recherchés | TP1 - Films
    </x-slot>

    <header class="justify-content-center">
        <nav class="row fixed-top">
            <div class="col bouton-retour">
                <a href="/films/">
                    Tous les films
                </a>
            </div>
            <div class="col form-recherche">
            </div>

        </nav>
        <div class="row titre">
            <h1>Liste des films selon votre recherche</h1>
        </div>
    </header>

    <main>
        <div class="container-fluid films">
            <div class="row tous-films justify-content-center">
                @forelse($films as $film)
                    <a href="/films/{{ $film->id }}" class="col-boch col-4 col-sm-3 col-md-2 m-2" >
                        <img src="{{ $film->poster_path }}" alt="">
                        <p>{{ $film->title }}</p>
                    </a>
                @empty
                    <h3>{{ $vide }}</h3>
                @endforelse

            </div>
        </div>
    </main>

</x-layout>



