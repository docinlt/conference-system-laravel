@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary mb-3">← {{ __('messages.back') }}</a>
    <h1>{{ __('messages.system_users') }}</h1>

    <table class="table">
        <thead>
        <tr>
            <th>{{ __('messages.first_name') }}</th>
            <th>{{ __('messages.last_name') }}</th>
            <th>{{ __('messages.email') }}</th>
            <th>{{ __('messages.role') }}</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @forelse($users as $user)
            <tr>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm btn-primary">
                        {{ __('messages.edit') }}
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">{{ __('messages.no_users') }}</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection
