@extends('layouts.main-layout')

@section('home')

  <h1>
    {{$brand -> id}} <br>
    Name :{{$brand -> name}} <br>
    Brand :{{$brand -> brand}} <br>
    Number of Headquarters : {{$brand -> number_headquarters}}
  </h1>

@endsection
