@extends('layouts.main-layout')

@section('home')

  <div id="welcomepg">

    <img src="https://freepngimg.com/thumb/welcome/26767-4-welcome-picture.png" alt="welcome">

    <h1>Scegli cosa vedere : </h1>

    <h3>Brands : <a href="{{route('brand-index')}}">Brands info</a></h3>
    <h3>HQ : <a href="{{route('headquarter-index')}}">Headquarters info</a></h3>
    <h3>Employees : <a href="{{route('employee-index')}}">Employees info</a></h3>


  </div>



@endsection
