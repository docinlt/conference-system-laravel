@extends('layouts.app')

@section('title', 'Admin dashboard')

@section('content')
    <h1>Administrator subsystem</h1>

    <ul>
        <li><a href="{{ route('admin.users.index') }}">Users management</a></li>
        <li><a href="{{ route('admin.conferences.index') }}">Conferences management</a></li>
    </ul>
@endsection
