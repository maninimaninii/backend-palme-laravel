<!-- resources/views/films/liste_films.blade.php -->

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
                <th>Titre</th>
                <th>Pays</th>
                <th>Réalisateur</th>
                <th>Edition</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($films as $film)
                <tr>
                    <td>{{ $film->titreFilm }}</td>
                    <td>{{ $film->paysFilm }}</td>
                    <td>{{ $film->realisateur -> nomLaureat }}</td>
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
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
