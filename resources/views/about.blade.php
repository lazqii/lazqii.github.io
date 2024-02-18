@extends('layouts/main')

@section('container')
    <h3>{{ $name }}</h3>
    <img src="{{ $image }}" alt="{{ $name }}" width="200px">
@endsection