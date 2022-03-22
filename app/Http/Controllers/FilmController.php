<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilmController extends Controller
{
    /**
     * Méthode qui retourne tous les films
     */
    public function films() {
        $films = DB::table('films')
                    ->orderBy('title', 'asc')
                    ->get();

        return view('films', [
            'films' => $films,
        ]);
    }

    /**
     * Méthode pour la route /films/{id}
     * Retourne le film correspondant à l'id reçu
     */
    public function show($id) {

        $resultat = DB::table('films')
                        ->where('id', '=', $id)
                        ->get();

        //Si aucun résultat, retourne page 404, sinon retourne un film avec resultat[id]
        return count($resultat) == 0 ?
                    abort(404) :
                    view('show', [
                        "film" => $resultat[0],
                    ]);
    }

    /**
     * Méthode qui permet de faire une recherche en fonction d'un request, car provient
     * d'un form name="recherche" avec parametre GET.
     * Si les lettres écritent sont incluses (like)
     * peut-importe où dans le titre (%...%), on affiche les films correspondants
     */
    public function rechercher() {

        $recherche = request()->recherche;

        $films =  DB::table('films')
                        ->where('title', 'like', '%'.$recherche.'%')
                        ->get();


        $vide = "Aucun film trouvé !";

        if(count($films) == 0) {
            //Retourne la vue chercher, mais avec variable $vide
            return view('chercher', [
                'vide' => $vide,
                'films' => $films,
            ]);
        } else {
            //Retourne la vue chercher avec avec variable $films
            return view('chercher', [
                'films' => $films,
            ]);
        }

    }
}
