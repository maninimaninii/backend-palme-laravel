<?php

namespace App\Http\Controllers;
use App\Models\P09Film;

use Illuminate\Http\Request;

class FilmController extends Controller
{
  
    public function listeFilms(){
        $films = P09Film::with('recompenses.prix', 'realisateur')->get();
        return view('films.liste_films', ['films' => $films]);
    }
    
}
