@extends('layouts.app')

@section('title', 'Pradinis puslapis')
@section('page_title', 'Pradinis puslapis')

@section('content')
    <div class="card">
        <div class="card-body text-center">
            <h3>Naudotojo informacija</h3>

            @auth
                <p><strong>Vardas, pavardė:</strong> {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</p>
                <p><strong>El. paštas:</strong> {{ auth()->user()->email }}</p>
                <p><strong>Vaidmuo:</strong> {{ __('messages.role_' . auth()->user()->role) }}</p>
            @else
                <p>Neprisijungęs naudotojas</p>
            @endauth

           
        </div>
    </div>
@endsection
