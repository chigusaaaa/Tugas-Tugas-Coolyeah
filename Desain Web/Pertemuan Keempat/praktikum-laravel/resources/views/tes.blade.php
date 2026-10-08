@extends('layouts.app')

@section('title', 'Tes Layout')

@section('content')
    <h1>Layout berfungsi</h1>
@endsection
Route::get('/tes-layout', fn () => view('tes'));