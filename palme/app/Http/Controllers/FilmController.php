<?php

namespace App\Http\Controllers;
use App\Models\P09Film;
use App\Models\P09Laureat;
use App\Models\P09Recompenserfilm;
use App\Models\P09Prix;

use Illuminate\Http\Request;

class FilmController extends Controller
{
  
    public function listeFilms(){
        $films = P09Film::with('recompenses.prix', 'realisateur')->get();
        return view('films.liste_films', ['films' => $films]);
    }
    

    public function edit($id){
        $film = P09Film::findOrFail($id);
        $laureats =  P09Laureat::where('metier', 'realisateur')->get();
        return view('films.edit', compact('film', 'laureats'));
    }


    public function update(Request $request, $id){
        $film = P09Film::findOrFail($id);
        $film->titreFilm = $request->input('titre');
        $film->paysFilm = $request->input('pays');
        $film->idRealisateur = $request->input('idreal');
    }


    public function destroy($id)
    {
        $film = P09Film::findOrFail($id);
        $film->delete();

        return redirect()->route('liste_films')->with('success', 'Film supprimé avec succès.');
    }

    public function add (){
        $prix = P09Prix::all();
        $laureats =  P09Laureat::where('metier', 'realisateur')->get();
        return view('films.add', compact('laureats', 'prix')); 

    }

    public function store(Request $request){
        $film = P09Film::create([
            'titreFilm' =>$request->input('titre'),
            'paysFilm'=> $request->input('pays'),
            'idRealisateur' => $request->input('idreal')
        ]);
        $rec = P09Recompenserfilm::create([
            'idFilm' => $film->idFilm,
            'idPrix' => $request->input('prix_id'),
            'editionPrixF' => $request->input('edition'),
        ]);
        return redirect()->route('liste_films');

    }
}
