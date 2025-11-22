@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <h1>System users</h1>

    <table class="table">
        <thead>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Role</th>
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
                <td colspan="5">No users.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection
