<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Palmes d'or</title>
    <link rel="stylesheet" href="{{ asset('css/styleacc.css') }}">
</head>
<body>
<header>
    <div class="navbar">
        <ul class="navigation">
            <li><a href="{{ route('liste_films') }}">Films récompensés</a></li>
            <li><a href="{{ route('liste_laureats') }}">Lauréats</a></li>
            <li><a href="{{ route('films.add') }}">Ajouter Film</a></li>
            <li><a href="{{ route('laureats.add') }}">Ajouter Lauréat</a></li>
        </ul>
    </div>
    <h1 class="titre">Bienvenue !</h1>
</header>
</body>
</html>
