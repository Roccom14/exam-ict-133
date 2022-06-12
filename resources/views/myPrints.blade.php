<?php $title = "Mes impressions 3D" ?>
@extends('layouts.mainlayout')
@section('content')
<style>
img, video {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 600px;
}

p,h2 {
    text-align: center;
}
</style>
<br>
<h2>Et voici mes impressions :</h2>
<br>
<img src="{{ asset('medias/cube.png') }}" alt="Cube de calibration">
<p>[ Cube de calibration | Time : 24min | Filling : ? % | Precision : ? mm ]</p>
<br>
<img src="{{ asset('medias/spinner.png') }}" alt="Fidget spinner">
<p>[ Fidget spinner | Time : 4h30min | Filling : ? % | Precision : ? mm ]</p>
<br>
<img src="{{ asset('medias/psyduck.png') }}" alt="Psyduck">
<p>[ Psyduck | Time : 13h19min | Filling : 20 % | Precision : 0,20 mm ]</p>
<br>
<img src="{{ asset('medias/benchy.png') }}" alt="Benchy">
<p>[ Benchy | Time : 2h20min | Filling : 15 % | Precision : 0,16 mm ]</p>
<br>
<img src="{{ asset('medias/pi_cover.png') }}" alt="Pi4 cover octoprint version">
<p>[ Pi4 cover octoprint version | Time : 6h38min | Filling : 10 % | Precision : 0,16 mm ]</p>
<br>
<img src="{{ asset('medias/car.png') }}" alt="Pontiac Trans Am">
<p>[ Pontiac Trans Am | Time : 7h23 | Filling : 5 % | Precision : 0,08mm ]</p>
<br>
<img src="{{ asset('medias/alien.png') }}" alt="Alien">
<p>[ Alien | Time : 6h10min | Filling : 5 % | Precision : 0,16 mm ]</p>
<br>
<img src="{{ asset('medias/eggs.png') }}" alt="Eggs">
<p>[ Eggs | Time : 3h08min | Filling : ? % | Precision : 0,16 mm ]</p>
<br>
<img src="{{ asset('medias/green_phone_holder.png') }}" alt="Phone holder">
<p>[ Phone holder | Time : 6h13min | Filling : 15 % | Precision : 0,20 mm ]</p>
<br>
<img src="{{ asset('medias/purple_phone_holder.png') }}" alt="Phone holder">
<p>[ Phone holder | Time : 8h17min | Filling : 15 % | Precision : 0,16 mm ]</p>
<br>
<video id="4_poly_fox_timelapse" controls>
  <source src="{{ asset('medias/4_poly_fox_timelapse.m4v') }}" type="video/mp4">
  Your browser does not support the video tag.
</video>
<p>[ Poly Fox | Timelapse ]</p>
<img src="{{ asset('medias/fox.png') }}" alt="Fox">
<p>[ Poly Fox | Time : 21h58min | Filling : 10 % | Precision : 0,16 mm ]</p>
<br>
@endsection