@extends('layouts.admin_layout')

@section('title')
  Admin
@endsection
@section('sidebar')
  @include('pages.etudiants.sidebar')
@endsection
@section('content')
  {{-- Contennt --}}
  {{-- @include('layouts.content') --}}

  <h1>{{ Auth::user()->name }}</h1>
  <h1>{{ Auth::user()->email }}</h1>

  <form action="{{ route('logout') }}" method="get">
    @csrf
    <input type="hidden" name="type" value="etudiant">
    <button class="btn btn-danger">Logout</button>
  </form>
  {{-- Contennt --}}
@endsection
