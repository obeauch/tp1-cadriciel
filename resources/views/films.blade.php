<x-layout>
    <x-slot name="titre">
        Tous les films | TP1 - Films
    </x-slot>

    <h1>Liste de tous les films</h1>

    <div class="container-fluid films">
        <div class="row">
            @forelse($films as $film)
                <a href="/films/{{ $film->id }}" class="col-4 col-sm-3 col-md-2 m-2" >
                    <img src="{{ $film->poster_path }}" alt="">
                    <p>{{ $film->title }}</p>
                </a>
            @empty
                <h3>Aucun film trouvé</h3>
            @endforelse
        </div>
    </div>

</x-layout>



