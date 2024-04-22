@extends('layout\forms')

@section('content')
   

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('laureats.update', $laureat->idLaureat) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nom">Nom du Lauréat</label>
            <input type="text" name="nom" id="nom" class="form-control" value="{{ $laureat->nomLaureat }}" required>
        </div>

        <div class="form-group">
            <label for="pays">Nationalité du Lauréat</label>
            <input type="text" name="pays" id="pays" class="form-control" value="{{ $laureat->pays }}" required>
        </div>
        

        <label for='metier' class='tit'> Métier </label><br>
        <select name="metier" id="metier" class="form-control">
        <option value="Acteur" {{ $laureat->metier === 'Acteur' ? 'selected' : '' }}>Acteur</option>
        <option value="Réalisateur" {{ $laureat->metier === 'Réalisateur' ? 'selected' : '' }}>Réalisateur</option>
        <option value="Metteur en scène" {{ $laureat->metier === 'Metteur en scène' ? 'selected' : '' }}>Metteur en scène</option>
        <option value="Scénariste" {{ $laureat->metier === 'Scénariste' ? 'selected' : '' }}>Scénariste</option>
        </select>
        <label for="sexe">Sexe</label><br><br>
        <input type="radio" name="sexe" id="masculin" value="masculin" {{ $laureat->sexe === 'masculin' ? 'checked' : '' }}>
        <label for="masculin" class="inline">Masculin</label>
        <input type="radio" name="sexe" id="feminin" value="feminin" {{ $laureat->sexe === 'feminin' ? 'checked' : '' }}>
        <label for="feminin" class="inline">Féminin</label>
        <br><br><br>

        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
    </form>
@endsection