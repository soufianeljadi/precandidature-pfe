@extends('layouts.admin_layout')

@section('title')
  Enseignant
@endsection
@section('sidebar')
  @include('pages.enseignants.sidebar')
@endsection
@section('content')
  {{-- Contennt --}}

  @include('pages.enseignants.content')
  {{-- Contennt --}}
@endsection
