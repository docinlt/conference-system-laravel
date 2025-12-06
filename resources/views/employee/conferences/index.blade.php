@extends('layouts.app')

@section('title', 'Visos konferencijos')

@section('content')
    <h2 class="section-title mb-4">Visos konferencijos (įvykusios ir planuojamos)</h2>

    @if($conferences->isEmpty())
        <div class="alert alert-info">Nėra įrašų.</div>
    @else
        <table class="table table-hover table-striped shadow-sm bg-white">
            <thead class="table-light">
            <tr>
                <th>Pavadinimas</th>
                <th>Data</th>
                <th>Laikas</th>
                <th>Adresas</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($conferences as $conference)
                <tr>
                    <td>{{ $conference->title }}</td>
                    <td>{{ $conference->date->format('Y-m-d') }}</td>
                    <td>{{ $conference->time }}</td>
                    <td>{{ $conference->address }}</td>
                    <td class="text-end">
                        <a href="{{ route('employee.conferences.show', $conference) }}"
                           class="btn btn-sm btn-outline-primary">
                            Peržiūrėti
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection
