@extends('layouts.app')

@section('title', $conference->title)

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="conference-detail-card">
                <h2 class="mb-3">{{ $conference->title }}</h2>

                <p class="conference-meta">
                    <span class="icon">📅</span>
                    {{ $conference->date->format('Y-m-d') }} {{ $conference->time }}
                </p>
                <p class="conference-meta">
                    <span class="icon">📍</span>
                    {{ $conference->address }}
                </p>
                <p class="conference-meta">
                    <span class="icon">👨‍🏫</span>
                    {{ $conference->lecturers }}
                </p>

                <hr>

                <h5>Aprašymas</h5>
                <p>{{ $conference->description }}</p>

                <form action="{{ route('client.conferences.register', $conference) }}" method="POST" class="mt-4">
                    @csrf
                    <button type="submit" class="btn btn-success">
                        Registruotis į konferenciją
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
