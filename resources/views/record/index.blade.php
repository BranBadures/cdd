@extends('laravel-usp-theme::master')

@section('content')
@forelse($records as $record)
@include('record.partials.fields')
@empty
    <p>Não há artigos cadastrados ainda.</p>
@endforelse
@endsection