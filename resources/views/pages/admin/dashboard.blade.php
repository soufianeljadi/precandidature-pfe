@extends('layouts.admin_layout')

@section('title')
  Administrateur
@endsection
@section('sidebar')
  @include('pages.admin.sidebar')
@endsection
@section('header')
  @include('pages.admin.header')
@endsection
@section('content')
  {{-- Contennt --}}

  @include('pages.admin.content')
  {{-- Contennt --}}
@endsection
