@extends('layout\liste')

@section('content')
   
    <h1>Liste des Lauréats</h1>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Sexe</th>
                <th>Pays</th>
                <th>Métier</th>
                <th>Edition</th>
                <th>Prix</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laureats as $laureat)
                <tr>
                    <td>{{ $laureat->nomLaureat }}</td>
                    <td>{{ $laureat->sexe }}</td>
                    <td>{{ $laureat->pays }}</td>
                    <td>{{ $laureat->metier }}</td>
                    <td>
                        <ul>
                            @foreach ($laureat->recompenses as $recompense)
                                {{ $recompense->EditionPrixL }} 
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <ul>
                            @foreach ($laureat->recompenses as $recompense)
                            {{ $recompense->prix-> nomPrix}}
                            @endforeach
                        </ul>
                    </td>
                    <td>
                    <form action="{{ route('laureats.edit', $laureat->idLaureat) }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </form>

                    <form action="{{ route('laureats.destroy', $laureat->idLaureat) }}" method="POST">
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
