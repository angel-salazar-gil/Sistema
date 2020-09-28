@extends('layouts.master')

@section('title')
    - (Admin Dependencias)
@endsection

@section('buttons')
    <a href="{{ route('dependencias.create') }}" class="btn btn-secondary btn-round">Nueva Dependencia</a>
@endsection