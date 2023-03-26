@extends('layouts.admin_layout')

@section('title')
  Espace Etudiant
@endsection
@section('sidebar')
  @include('pages.etudiants.sidebar')
@endsection

@section('content')
  {{-- Contennt --}}
  {{-- @include('layouts.content') --}}
  @include('pages.etudiants.content')

  {{-- Contennt --}}
@endsection
