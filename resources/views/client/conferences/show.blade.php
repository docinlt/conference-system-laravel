@extends('layouts.app')

@section('title', $conference->title)

@section('content')
    <a href="{{ route('client.conferences.index') }}" class="btn btn-outline-secondary mb-3">← {{ __('messages.back_to_list') }}</a>
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
                @php
                    $isRegistered = auth()->check()
                        ? \App\Models\Registration::where('user_id', auth()->id())
                            ->where('conference_id', $conference->id)
                            ->exists()
                        : false;
                @endphp
                @if($isRegistered)
                    <button class="btn btn-secondary mt-3" disabled>
                        {{ __('messages.already_registered_button') }}
                    </button>
                @else
                    <form action="{{ route('client.conferences.register', $conference) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-success mt-3">
                            {{ __('messages.register_to_conference') }}
                        </button>
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection
