@extends ('layout\liste')
 @section('content')
    <h1>Liste des Films</h1>
    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Pays</th>
                <th>Réalisateur</th>
                <th>Edition</th>
                <th>Prix</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($films as $film)
                <tr>
                    <td>{{ $film->titreFilm }}</td>
                    <td>{{ $film->paysFilm }}</td>
                    <td>{{ $film->realisateur }}</td>
                    <td>
                        <ul>
                            @foreach ($film->recompenses as $recompense)
                                {{ $recompense -> editionPrixF }} 
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <ul>
                            @foreach ($film->recompenses as $recompense)
                            {{ $recompense->prix-> nomPrix}}
                            @endforeach
                        </ul>
                    </td>
                    <td>
                    <form action="{{ route('films.edit', $film->idFilm) }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </form>

                    <form action="{{ route('films.destroy',  $film->idFilm) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
