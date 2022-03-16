<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Films</title>
</head>
<body>
    <main>
        <div class="container py-5">
            <a href="/films/">Retour aux films
            </a>
            <div class="row">
                <h1>{{ $film->title }}</h1>
                <p>Date de sortie: {{ $film->release_date }}</p>
                <p>Description: {{ $film->overview }}</p>
                <p>Appréciation moyenne: {{ $film->vote_average }}</p>
                <p>Nombres de votes: {{ $film->vote_count }}</p>
                <img src="{{ $film->poster_path }}" alt="">
            </div>
        </div>
    </main>

</body>
</html>
