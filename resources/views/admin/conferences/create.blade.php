@extends('layouts.app')

@section('title', __('messages.create_conference'))

@section('content')
    <a href="{{ route('admin.conferences.index') }}" class="btn btn-outline-secondary mb-3">← {{ __('messages.back_to_list') }}</a>
    <h1>{{ __('messages.create_conference') }}</h1>

    <form action="{{ route('admin.conferences.store') }}" method="POST">
        @csrf
        @include('admin.conferences._form')

        <button type="submit" class="btn btn-primary">{{ __('messages.save') }}</button>
    </form>
@endsection
