@extends('layouts.app')

@section('content')
    @foreach ($lista_vestiti as $vestito)
        <p>{{ $vestiti->name }}</p>
        <p>{{ $vestiti->size }}</p>
        <p>{{ $vestiti->color }}</p>
    @endforeach
@endsection

@section('page-title', 'Index vestiti')
