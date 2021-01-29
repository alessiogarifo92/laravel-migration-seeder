@extends('layouts.main-layout')

@section('home')

  <h1>
    {{$headquarter -> id}} <br>
    Name :{{$headquarter -> name}} <br>
    Address :{{$headquarter -> address}} <br>
    Number of employees : {{$headquarter -> number_employees}}
  </h1>

@endsection
