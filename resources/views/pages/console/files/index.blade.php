@extends('layouts.console')

@section('title', 'Berkas')

@section('content')
    <x-card-header title="Berkas" :route="route('files.create')" />
@endsection
