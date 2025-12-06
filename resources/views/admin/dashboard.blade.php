@extends('layouts.app')

@section('title', 'Administratoriaus posistemis')

@section('content')
    <h2 class="section-title mb-4">Administratoriaus posistemis</h2>

    <div class="row g-3">
        <div class="col-md-6">
            <a href="{{ route('admin.users.index') }}" class="admin-card h-100">
                <h3>Naudotojų valdymas</h3>
            </a>
                <p>Peržiūrėkite sistemos naudotojų sąrašą ir redaguokite jų duomenis (vardą, pavardę, el. paštą).</p>
        </div>
        <div class="col-md-6">
            <a href="{{ route('admin.conferences.index') }}" class="admin-card h-100">
                <h3>Konferencijų valdymas</h3>
            </a>
                <p>Kurti naujas konferencijas, redaguoti esamas ir šalinti neįvykusias konferencijas.</p>
        </div>
    </div>
@endsection
