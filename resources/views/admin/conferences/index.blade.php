@extends('layouts.app')

@section('title', 'Conferences management')

@section('content')
    <h1>Conferences management</h1>

    <a href="{{ route('admin.conferences.create') }}" class="btn btn-success mb-3">
        {{ __('messages.create_conference') }}
    </a>

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
                    <a href="{{ route('admin.conferences.edit', $conference) }}" class="btn btn-sm btn-primary">
                        {{ __('messages.edit') }}
                    </a>

                    <form action="{{ route('admin.conferences.destroy', $conference) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">
                            {{ __('messages.delete') }}
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">{{ __('messages.no_conferences')}}</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection
