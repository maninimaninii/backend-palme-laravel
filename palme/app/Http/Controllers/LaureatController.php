<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\P09Laureat;
use App\Models\P09Prix;

use App\Models\P09Recompenserlaureat;

class LaureatController extends Controller
{
    public function listeLaureats(){
        $laureats = P09Laureat::with('recompenses.prix')->get();
        return view('laureats.liste_laureats', ['laureats' => $laureats]);
    }




    
    public function edit($id)
    {
        $laureat = P09Laureat::findOrFail($id);
        return view('laureats.edit', ['laureat' => $laureat]);
    }








    public function update(Request $request, $id)
    {
        $laureat = P09Laureat::find($id);
        $laureat->nomLaureat = $request->input('nom');
        $laureat->pays = $request->input('pays');
        $laureat->sexe = $request->input('sexe');
        $laureat->metier = $request->input('metier');
        $laureat->save();
        
        
        return redirect()->route('liste_laureats')->with('success', 'Lauréat mis à jour avec succès.');
    }







    public function destroy($id)
    {
        $laureat = P09Laureat::findOrFail($id);
        $laureat->delete();

        return redirect()->route('liste_laureats')->with('success', 'Lauréat supprimé avec succès.');
    }



    public function add (){
        $prix = P09Prix::all();
        return view('laureats.add', compact('prix')); 

    }

    public function store(Request $request){
        $laureat = P09Laureat::create([
            'nomLaureat' =>$request->input('nom'),
            'pays'=> $request->input('pays'),
            'sexe' => $request->input('sexe'), 
            'metier' => $request->input('metier')
        ]);
        $rec = P09Recompenserlaureat::create([
            'idLaureat' => $laureat->idLaureat,
            'idPrix' => $request->input('prix_id'),
            'editionPrixL' => $request->input('edition'),
        ]);

        return redirect()->route('liste_laureats');
    }
    
}
