<?php $title = "Page de connection" ?>
@extends('layouts.mainlayout')
@section('content')
<style>
    /* already defined in bootstrap4 */
    .text-xs-center {
        text-align: center;
    }

    .g-recaptcha {
        display: inline-block;
    }
</style>
<html>
<body style="text-align:center">
  <form action="login" method="post" autocomplete="on">
    <filedset>
      <br>
      @csrf
      <br>
      <legend>Page de connexion</legend>
      <br>
      <label for="usr">Nom d'utilisateur:</label>
      <br>
      <input type="text" id="usr" name="login" title="Doit contenir au minimum 5 caractères" pattern="^[A-Za-z0-9]{5,}" autofocus>
      <br><br>
      <label for="pwd">Mot de passe:</label>
      <br>
      <input type="password" id="pwd" name="pwd">
      <br><br>
      {!! NoCaptcha::renderJs() !!}
      {!! NoCaptcha::display() !!}
      <br><br>
      <input type="submit" class="btn btn-info" value="Connexion">
      <br><br>
    </filedset>
  </form>
</body>
</html>
@endsection