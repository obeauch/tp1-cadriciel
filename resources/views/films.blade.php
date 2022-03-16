<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Liste de films</title>
</head>
<body>
    <h1>Liste de tous les films</h1>

    <div class="container py-5">
        <div class="row">

            <div class="row">
                @forelse($films as $film)
                    <a href="/films/{{ $film->id }}">
                        <p>{{ $film->title }}</p>
                    </a>
                    <img src="{{ $film->poster_path }}" alt="">

                @empty
                    <h3>Aucun film trouvé</h3>
                @endforelse
            </div>

            {{-- @foreach($films as $film)
                <p>{{ $film->title }}</p>

            @endforeach --}}

        </div>
    </div>



</body>
</html>
