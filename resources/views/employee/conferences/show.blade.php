@extends('layouts.app')

@section('title', $conference->title)

@section('content')
    <h1>{{ $conference->title }}</h1>

    <p><strong>{{ __('messages.description') }}:</strong> {{ $conference->description }}</p>
    <p><strong>{{ __('messages.lecturers') }}:</strong> {{ $conference->lecturers }}</p>
    <p><strong>{{ __('messages.date') }}:</strong> {{ $conference->date->format('Y-m-d') }}</p>
    <p><strong>{{ __('messages.time') }}:</strong> {{ $conference->time }}</p>
    <p><strong>{{ __('messages.address') }}:</strong> {{ $conference->address }}</p>

    <hr>

    <h2>Registered clients</h2>

    <table class="table">
        <thead>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        @forelse($conference->registrations as $registration)
            <tr>
                <td>{{ $registration->user->first_name }}</td>
                <td>{{ $registration->user->last_name }}</td>
                <td>{{ $registration->user->email }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No registered clients.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection
