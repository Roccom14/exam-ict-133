<?php $title = "Mauvais identifiants" ?>
@extends('layouts.mainlayout')
@section('content')
<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 300px;
}
</style>
<div style="text-align: center;">
    <br>
    <h1>/!\ Mauvais identifiants /!\</h1>
    <img src="{{ asset('medias/maccaud_quoi.png') }}" alt="Maccaud_qui_ne_comprend_pas">
    <br>
    <a href="login">
    <button type="submit" class="btn btn-info">Ré-essayer</button>
    </a>
    <br><br>
</div>
@endsection