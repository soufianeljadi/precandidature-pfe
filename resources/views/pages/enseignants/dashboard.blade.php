@extends('layouts.admin_layout')

@section('title')
  Enseignant
@endsection
@section('sidebar')
  @include('pages.enseignants.sidebar')
@endsection

{{-- TODO Change the header , diplay enseignant header --}}
@section('header')
  @include('pages.enseignants.header')
@endsection
@section('content')
  {{-- Contennt --}}

  @include('pages.enseignants.content')
  {{-- Contennt --}}
@endsection
