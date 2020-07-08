@extends('layouts.app')

@section('content')
    @foreach ($lista_vestiti as $vestito)
        <p>{{ $vestito->name }}</p>
        <p>{{ $vestito->size }}</p>
        <p>{{ $vestito->color }}</p>
    @endforeach
@endsection

@section('page-title', 'Index vestiti')
