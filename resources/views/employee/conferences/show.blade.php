@extends('layouts.app')

@section('title', $conference->title)

@section('content')
    <a href="{{ route('employee.conferences.index') }}" class="btn btn-outline-secondary mb-3">← {{ __('messages.back_to_list') }}</a>

    <h1>{{ $conference->title }}</h1>

    <p><strong>{{ __('messages.description') }}:</strong> {{ $conference->description }}</p>
    <p><strong>{{ __('messages.lecturers') }}:</strong> {{ $conference->lecturers }}</p>
    <p><strong>{{ __('messages.date') }}:</strong> {{ $conference->date->format('Y-m-d') }}</p>
    <p><strong>{{ __('messages.time') }}:</strong> {{ $conference->time }}</p>
    <p><strong>{{ __('messages.address') }}:</strong> {{ $conference->address }}</p>

    <hr>

    <h2>{{ __('messages.registered_clients') }}</h2>

    <table class="table">
        <thead>
        <tr>
            <th>{{ __('messages.first_name') }}</th>
            <th>{{ __('messages.last_name') }}</th>
            <th>{{ __('messages.email') }}</th>
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
                <td colspan="3">{{ __('messages.no_registered_clients') }}</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection
