@extends('layouts.app')

@section('title', __('messages.register'))

@section('content')
<div class="card">
    <div class="card-body">
        <h3 class="mb-3">{{ __('messages.register') }}</h3>

        <form method="POST" action="{{ route('register.store') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label">{{ __('messages.first_name') }}</label>
                <input type="text" name="first_name" class="form-control" value="{{ old('first_name') }}" required>
                @error('first_name') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">{{ __('messages.last_name') }}</label>
                <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}" required>
                @error('last_name') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

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

            <div class="mb-3">
                <label class="form-label">{{ __('messages.password_confirmation') }}</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>

            <button class="btn btn-success" type="submit">{{ __('messages.register') }}</button>
        </form>
    </div>
</div>
@endsection
