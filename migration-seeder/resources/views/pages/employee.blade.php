@extends('layouts.main-layout')

@section('home')

  <h1>
    {{$employee -> id}} <br>
    Name :{{$employee -> name}} <br>
    Lastname :{{$employee -> lastname}} <br>
    Hiredate : {{$employee -> hiring_date}}
  </h1>

@endsection
