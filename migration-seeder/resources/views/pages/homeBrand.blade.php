@extends('layouts.main-layout')

@section('home')

  <h1>Brands:</h1>
    <ol>
        @foreach ($brands as $brand)
            <li>
              <a href="{{route('brand-show', $brand -> id)}}">
                {{$brand -> name}}
              </a>
            </li>
        @endforeach
    </ol>

@endsection
