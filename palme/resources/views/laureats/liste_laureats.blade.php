<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Lauréats</title>
</head>
<body>
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
                    <a href="{{ route('laureats.edit', $laureat->idLaureat) }}" class="btn btn-primary">Modifier</a>
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
</body>
</html>
