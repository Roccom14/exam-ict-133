<?php $title = "Déconnecté" ?>
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
<br>
<h1 style="text-align:center;">Vous avez été déconnecté !</h1>
<img src="{{ asset('medias/maccaud_bye.png') }}" alt="Maccaud_qui_dit_bye_bye">
<br>
@endsection