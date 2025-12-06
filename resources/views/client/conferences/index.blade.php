@extends('layouts.app')

@section('title', 'Konferencijos')

@section('content')
    <h2 class="section-title mb-4">Planuojamos konferencijos</h2>

    @if($conferences->isEmpty())
        <div class="alert alert-info">Šiuo metu nėra konferencijų.</div>
    @else
        <div class="row g-3">
            @foreach($conferences as $conference)
                <div class="col-md-4">
                    <div class="conference-card h-100">
                        <h5 class="conference-title">{{ $conference->title }}</h5>

                        <p class="conference-meta mb-1">
                            <span class="icon">📅</span>
                            {{ $conference->date->format('Y-m-d') }} {{ $conference->time }}
                        </p>
                        <p class="conference-meta mb-1">
                            <span class="icon">📍</span>
                            {{ $conference->address }}
                        </p>
                        <p class="conference-meta mb-2">
                            <span class="icon">👨‍🏫</span>
                            {{ $conference->lecturers }}
                        </p>

                        <a href="{{ route('client.conferences.show', $conference) }}"
                           class="btn btn-primary btn-sm mt-2">
                            Peržiūrėti ir registruotis
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
