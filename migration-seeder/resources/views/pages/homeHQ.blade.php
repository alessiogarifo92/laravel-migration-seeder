@extends('layouts.main-layout')

@section('home')

  <h1>Headquarter:</h1>
    <ol>
        @foreach ($headquarters as $headquarter)
            <li>
              <a href="{{route('headquarter-show', $headquarter -> id)}}">
                {{$headquarter -> name}}
              </a>
            </li>
        @endforeach
    </ol>

@endsection
