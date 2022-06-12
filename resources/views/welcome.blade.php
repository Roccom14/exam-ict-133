<?php $title = "Page principale" ?>
@extends('layouts.mainlayout')
@section('content')
<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 600px;
}
</style>
<br>
<h1 style="text-align:center">Page d'accueil du site web pour l'examen ICT-133</h1>
<br>
<div style="text-align:center">
    <p>Site web qui répertorie mes impressions</p>
    <p>Et voici mon imprimante 3D :</p>
    <img src="{{ asset('medias/cr10_smart.png') }}" alt="my-printer-creality-cr-10-smart">
    <p>C'est une Creality CR-10 Smart avec un zone d'impression de 300x300x400mm</p>
</div>
@endsection