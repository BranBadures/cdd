@extends('laravel-usp-theme::master')
@section('content')
  <form method="POST" action="/records/{{ $record->id }}">
    @csrf
    @method('patch')
    @include('record.partials.form')
  </form>
@endsection