@extends('layout\forms')

@section('content')
   

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('laureats.store') }}">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="nom">Nom du Lauréat</label>
            <input type="text" name="nom" id="nom" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="pays">Nationalité du Lauréat</label>
            <input type="text" name="pays" id="pays" class="form-control" required>
        </div>
        

        <label for='metier' class='tit'> Métier </label><br>
        <select name="metier" id="metier" class="form-control">
        <option value="Acteur" >Acteur</option>
        <option value="Réalisateur" >Réalisateur</option>
        <option value="Metteur en scène" >Metteur en scène</option>
        <option value="Scénariste">Scénariste</option>
        </select>
        <label for="sexe">Sexe</label><br><br>
        <input type="radio" name="sexe" id="masculin" value="masculin">
        <label for="masculin" class="inline">Masculin</label>
        <input type="radio" name="sexe" id="feminin" value="feminin">
        <label for="feminin" class="inline">Féminin</label>
        <br><br><br>

    
        
        <label for='edition' class='tit'>Edition</label><br>
        <input type="date" name="edition" id="edition" class="form-control">
        

        <label for='prix_id' class='tit'> Nom Prix </label><br>
        <select name="prix_id" id="prix_id" class="form-control">
    @foreach($prix as $p)
        <option value="{{ $p->idPrix }}">{{ $p->nomPrix }}</option>
    @endforeach
        </select>

        

        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
    </form>
@endsection