<?php $title = "Page de profil" ?>
@extends('layouts.mainlayout')
@section('content')
<html>
<body style="text-align:center">
    <form action="profile" target="" method="post" autocomplete="off">
	    <fieldset>
            <br>
            @csrf
            <legend>Mes informations</legend>
            <br>
            <label for="fname">Prénom:</label>
            <br>
            <input type="text" id="fname" name="fname" placeholder="{{ $fname }}" pattern="^[A-Za-z]{2,}" autofocus>
            <br><br>
            <label for="lname">Nom de famille:</label>
            <br>
            <input type="text" id="lname" name="lname" placeholder="{{ $lname }}" pattern="^[A-Za-z]{2,}">
            <br><br>
            <label for="usr">Nom d'utilisateur:</label>
            <br>
            <input type="text" id="usr" name="login" placeholder="{{ $usr }}" pattern="^[A-Za-z0-9]{5,}">
            <br><br>
            <label for ="sexe">Sexe:</label>
            <br>
            <input type="radio" id="male" name="sexe" value="Homme">
            <label for ="male">Homme</label>
            <br>
            <input type="radio" id="female" name="sexe" value="Femme">
            <label for ="female">Femme</label>
            <br>
            <input type="radio" id="hardcore" name="sexe" value="Hardcore">
            <label for ="Hardcore">Hardcore</label>
            <br><br>
            <label for="birthday">Date de naissance:</label>
            <br>
            <input type="date" id="birthday" name="birthday">
            <br><br>
            <label for ="email">Email:</label>
            <br>
            <input type="email" id="email" name="email" placeholder="{{ $email }}">
            <br><br>
            <label for ="tel">Téléphone:</label>
            <br>
            <input type="tel" id="tel" name="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}" placeholder="{{ $tel }}">
            <br><br>
            <label for="url">Site web:</label>
            <br>
            <input type="url" id="url" name="url" pattern ="^(https:|http:|www\.)\S*" placeholder="{{ $url }}">
            <br><br>
            <label for ="pwd">Mot de passe:</label>
            <br>
            <input type="password" id="pwd" name="pwd" title="Doit contenir au minimum 12 caractères dont majuscules, minuscules, chiffres et caractères spéciaux" pattern="^(?=.{12,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$">
            <br><br>
            <input type="checkbox" id="notifMail" name="notifMail" value="notifMail">
            <label for ="notifMail">Je veux recevoir des notifications par mail</label>
            <br><br>
            <input type="submit" value="Valider les changements">
            <br><br>
	    </fieldset>
    </form>
</body>
</html>
@endsection