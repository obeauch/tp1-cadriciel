<x-layout>
    <x-slot name="titre">
        Tous les films | TP1 - Films
    </x-slot>

    <header class="justify-content-center">
        <nav class="row fixed-top">
            <div class="col bouton-retour">
                <a href="/">
                    Retour à l'accueil
                </a>
            </div>

            <div class="col form-recherche">
                <form action="/films/chercher" method="GET">
                    <input type="text" name="recherche" placeholder="Recherchez un film">
                </form>
            </div>

        </nav>
        <div class="row titre">
            <h1>Liste de tous les films</h1>
        </div>
    </header>

    <main class="container-fluid films">

        <div class="row tous-films justify-content-center">

            @foreach($films as $film)
                <a href="/films/{{ $film->id }}" class="col-boch col-4 col-sm-3 col-md-2 m-2" >
                    <img src="{{ $film->poster_path }}" alt="">
                    <p>{{ $film->title }}</p>
                </a>
            @endforeach

        </div>
    </main>


</x-layout>



