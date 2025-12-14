@extends('layouts.app')

@section('title', 'Pradinis puslapis')
@section('page_title', 'Pradinis puslapis')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Naudotojo informacija</h3>

            @auth
                <p><strong>Vardas, pavardė:</strong> {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</p>
                <p><strong>El. paštas:</strong> {{ auth()->user()->email }}</p>
                <p><strong>Vaidmuo:</strong> {{ __('messages.role_' . auth()->user()->role) }}</p>
            @else
                <p>Neprisijungęs naudotojas</p>
            @endauth

            <hr>

            <h4>Posistemiai</h4>
           @auth
                @if(auth()->user()->role === 'client')
                    <a href="{{ route('client.conferences.index') }}">{{ __('messages.client_subsystem') }}</a>
                @endif

                @if(auth()->user()->role === 'employee')
                    <a href="{{ route('employee.conferences.index') }}">{{ __('messages.employee_subsystem') }}</a>
                @endif

                @if(auth()->user()->role === 'admin')
                    <a href="{{ route('admin.dashboard') }}">{{ __('messages.admin_subsystem') }}</a>
                @endif
            @endauth

            @guest
                <a href="{{ route('login') }}">{{ __('messages.login') }}</a>
                <a href="{{ route('register') }}">{{ __('messages.register') }}</a>
            @endguest
        </div>
    </div>
@endsection
