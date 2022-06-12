<?php $title = "ReCaptcha erroné" ?>
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
    <h1>/!\ Vérifiez que vous n'êtes pas un robot /!\</h1>
    <img src="{{ asset('medias/maccaud_demerde.png') }}" alt="Maccaud_qui_crie">
    <br>
    <a href="login">
    <button type="submit" class="btn btn-info">Ré-essayer</button>
    </a>
    <br><br>
</div>
@endsection