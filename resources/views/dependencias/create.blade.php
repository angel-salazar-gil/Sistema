@extends('layouts.master')

@section('title')
    - (Admin Dependencias) - Crear
@endsection

@section('buttons')
    <a href="{{ route('dependencias.index') }}" class="btn btn-secondary btn-round">Regresar</a>
@endsection

@section('content')
<div class="row">
    <div class="col-md-8">
        <form method="POST" action="{{ route('dependencias.store') }}">
            @csrf
            @include('dependencias.fragments.form')
        </form>
    </div>
</div>
@endsection