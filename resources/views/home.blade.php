@extends('layouts.app')

@section('title', 'Pradinis puslapis')
@section('page_title', 'Pradinis puslapis')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Studento informacija</h3>
            <p>Vardas: Dmitrij</p>
            <p>Grupė: [1111]</p>

            <hr>

            <h4>Posistemiai</h4>
            <ul>
                <li><a href="{{ route('client.conferences.index') }}">Kliento posistemis</a></li>
                <li><a href="{{ route('employee.conferences.index') }}">Darbuotojo posistemis</a></li>
                <li><a href="{{ route('admin.dashboard') }}">Administratoriaus posistemis</a></li>
            </ul>
        </div>
    </div>
@endsection
