<!doctype html>
<html lang="fr-ch">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
    <title>{{ $title }}</title>
  </head>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Module ICT-133</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
        </li>
        @if(Session::has('Authentifie'))
        <li>
          <a class="nav-link" href="myPrints">Mes impressions</a>
        </li>
        <li>
          <a class="nav-link" href="profile">Profile</a>
        </li>
        <li>
          <a class="nav-link" href="secret">Surprise</a>
        </li>
        <li>
          <a class="nav-link" href="logout">Se déconnecter</a>
        </li>
        @else
        <li>
          <a class="nav-link" href="myPrints">Mes impressions</a>
        </li>
        <li>
          <a class="nav-link" href="secret">Surprise</a>
        </li>
        <li>
          <a class="nav-link" href="login">Se connecter</a>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>
</header>
<body>