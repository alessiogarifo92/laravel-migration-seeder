@extends('layouts.main-layout')

@section('home')

  <h1>Employee:</h1>
    <ol>
        @foreach ($employees as $employee)
            <li>
              <a href="{{route('employee-show', $employee -> id)}}">
                {{$employee -> name}}
              </a>
            </li>
        @endforeach
    </ol>

@endsection
