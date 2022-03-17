<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilmController extends Controller
{
    /**
     * Méthode qui retourne tous les films
     * Faire un Select!!
     */
    public function films() {
        $films = DB::table('films')
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

        // dd($resultat);
        return count($resultat) == 0 ?
                    abort(404) :
                    view('show', [
                        "film" => $resultat[0],
                    ]);
    }

    public function rechercher($recherche) {
        $films = [
        ];

        $resultat = [];
        foreach($films as $film) {
            if(str_contains(strtolower($film), $recherche)){
                $resultat[] = $film;

                return view('films', [
                    'films' => $resultat,
                ]);
            }
        }

        return response()->json(false);
    }
}
