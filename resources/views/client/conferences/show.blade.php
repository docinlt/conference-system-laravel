@extends('layouts.app')

@section('title', $conference->title)

@section('content')
    <h1>{{ $conference->title }}</h1>

    <p><strong>{{ __('messages.description') }}:</strong> {{ $conference->description }}</p>
    <p><strong>{{ __('messages.lecturers') }}:</strong> {{ $conference->lecturers }}</p>
    <p><strong>{{ __('messages.date') }}:</strong> {{ $conference->date->format('Y-m-d') }}</p>
    <p><strong>{{ __('messages.time') }}:</strong> {{ $conference->time }}</p>
    <p><strong>{{ __('messages.address') }}:</strong> {{ $conference->address }}</p>

    <form action="{{ route('client.conferences.register', $conference) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-success mt-3">
            {{ __('messages.register') }}
        </button>
    </form>
@endsection
