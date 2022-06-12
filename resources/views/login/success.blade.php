<?php $title = "Connexion réussie" ?>
@extends('layouts.mainlayout')
@section('content')
<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 400px;
}
</style>
<br>
<h1 style="text-align:center;">Bravo, vous avez réussi à vous connecter :) !</h1>
<img src="{{ asset('medias/rocco.png') }}" alt="Rocco_qui_valide">
<br>
@endsection