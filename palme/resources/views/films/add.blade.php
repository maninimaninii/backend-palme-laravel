@extends('layout\forms')

@section('content')
   

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('films.store') }}">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="nom">Titre du film</label>
            <input type="text" name="titre" id="titre" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="pays">Origine du Film</label>
            <input type="text" name="pays" id="pays" class="form-control"  required>
        </div>
        

        <label for='idreal' class='tit'> Nom Réalisateur </label><br>
        <select name="idreal" id="idreal" class="form-control">
        @foreach ($laureats as $laureat)
        <option value="{{ $laureat->idLaureat }}" >{{ $laureat->nomLaureat }}</option>
        @endforeach
        </select>

        <label for='prix_id' class='tit'> Nom Prix </label><br>
        <select name="prix_id" id="prix_id" class="form-control">
        @foreach($prix as $p)
        <option value="{{ $p->idPrix }}">{{ $p->nomPrix }}</option>
        @endforeach
        </select>
        </select>

        
        <label for='edition' class='tit'>Edition</label><br>
        <input type="date" name="edition" id="edition" class="form-control">
        

        
        

        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
    </form>
@endsection