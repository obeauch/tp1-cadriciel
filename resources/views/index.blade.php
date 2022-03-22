<x-layout>

    <x-slot name="titre">
        Accueil | TP1 - Films
    </x-slot>

    <header class="justify-content-center">

        <div class="row titre">
            <h1>Accueil</h1>
        </div>
    </header>

    <div class="fond"></div>

    <div class="container-fluid accueil">
        <div class="row ligne-sombre">
            <div class="col boutons">
                <a href="/init/">
                    Réinitialisation de la bdd
                </a>
            </div>
            <div class="col boutons">
                <a href="/films/">
                    Page de films
                </a>
            </div>
        </div>
    </div>



</x-layout>
