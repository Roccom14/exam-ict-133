<?php $title = "Page extrèmement secrète" ?>

@extends('layouts.mainlayout')
@section('content')
<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 540px;
}
</style>
<br>
<h1 style="text-align:center">Il n'y a rien à voir ici !</h1>
<br>
<img src="{{ asset('medias/maccaud_fuck.png') }}" alt="Maccaud_qui_tire_des_fucks">
@endsection