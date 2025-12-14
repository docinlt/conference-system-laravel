@extends('layouts.app')

@section('title', 'Pradinis puslapis')
@section('page_title', 'Pradinis puslapis')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Studento informacija</h3>
            <p>Vardas: Dmitrij</p>
            <p>Grupė: [1111]</p>

            <hr>

            <h4>Posistemiai</h4>
           @auth
                @if(auth()->user()->role === 'client')
                    <a href="{{ route('client.conferences.index') }}">{{ __('messages.client_subsystem') }}</a>
                @endif

                @if(auth()->user()->role === 'employee')
                    <a href="{{ route('employee.conferences.index') }}">Employee subsystem</a>
                @endif

                @if(auth()->user()->role === 'admin')
                    <a href="{{ route('admin.dashboard') }}">Administrator subsystem</a>
                @endif
            @endauth

            @guest
                <a href="{{ route('login') }}">{{ __('messages.login') }}</a>
                <a href="{{ route('register') }}">{{ __('messages.register') }}</a>
            @endguest
        </div>
    </div>
@endsection
