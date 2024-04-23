@extends('layout\forms')

@section('content')
   

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('films.update', $film->idFilm) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nom">Titre du film</label>
            <input type="text" name="titre" id="titre" class="form-control" value="{{ $film->titreFilm }}" required>
        </div>

        <div class="form-group">
            <label for="pays">Origine du Film</label>
            <input type="text" name="pays" id="pays" class="form-control" value="{{ $film->paysFilm }}" required>
        </div>
        

        <label for='idreal' class='tit'> Nom Réalisateur </label><br>
        <select name="idreal" id="idreal" class="form-control">
        @foreach {$laureats as $laureat}
        <option value="{{ $laureat->idLaureat }}" @if($laureat->idLaureat == $film->idRealisateur) selected @endif>{{ $laureat->nomLaureat }}</option>
        </select>
        

        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
    </form>
@endsection