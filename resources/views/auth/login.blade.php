@extends('layouts.app')

@section('title', __('messages.login'))

@section('content')
<div class="card">
    <div class="card-body">
        <h3 class="mb-3">{{ __('messages.login') }}</h3>

        <form method="POST" action="{{ route('login.store') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label">{{ __('messages.email') }}</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                @error('email') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">{{ __('messages.password') }}</label>
                <input type="password" name="password" class="form-control" required>
                @error('password') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <button class="btn btn-primary" type="submit">{{ __('messages.login') }}</button>
        </form>
    </div>
</div>
@endsection
