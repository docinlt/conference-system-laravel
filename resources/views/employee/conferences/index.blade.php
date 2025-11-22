@extends('layouts.app')

@section('title', 'All conferences')

@section('content')
    <h1>All conferences (past and planned)</h1>

    <table class="table">
        <thead>
        <tr>
            <th>{{ __('messages.title') }}</th>
            <th>{{ __('messages.date') }}</th>
            <th>{{ __('messages.time') }}</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @forelse($conferences as $conference)
            <tr>
                <td>{{ $conference->title }}</td>
                <td>{{ $conference->date->format('Y-m-d') }}</td>
                <td>{{ $conference->time }}</td>
                <td>
                    <a href="{{ route('employee.conferences.show', $conference) }}" class="btn btn-sm btn-primary">
                        {{ __('messages.view') }}
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No conferences.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection
