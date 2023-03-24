@extends('layouts.admin_layout')

@section('title')
  Enseignant
@endsection
@section('content')
  {{-- Contennt --}}
  <h1>{{ Auth::user()->name }}</h1>
  <h3>{{ Auth::user()->email }}</h3>
  @include('layouts.content')
  {{-- Contennt --}}
@endsection
