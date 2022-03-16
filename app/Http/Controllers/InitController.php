<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InitController extends Controller
{
    public function index() {
        DB::statement('TRUNCATE films');

        $films = file_get_contents(resource_path('films.json'));
        $films = json_decode($films, true);

        foreach($films as $film){
            $res = DB::table('films')
                        ->insert([
                            "title" => $film["title"],
                            "release_date" => $film["release_date"],
                            "overview" => $film["overview"],
                            "vote_average" => $film["vote_average"],
                            "vote_count" => $film["vote_count"],
                            "poster_path" => $film["poster_path"],
                        ]);

            if(!$res) break;
        }

        return ["succes" => $res];
    }
}