@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Student information</h1>
    <p>Name: Dmitrij</p>
    <p>Group: [enter group]</p>

    <hr>

    <h2>Subsystems</h2>
    <ul>
        <li><a href="{{ route('client.conferences.index') }}">Client subsystem</a></li>
        <li><a href="{{ route('employee.conferences.index') }}">Employee subsystem</a></li>
        <li><a href="{{ route('admin.dashboard') }}">Administrator subsystem</a></li>
    </ul>
@endsection
