<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\P09Laureat;

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
    
}
