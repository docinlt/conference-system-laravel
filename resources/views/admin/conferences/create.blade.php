@extends('layouts.app')

@section('title', __('messages.create_conference'))

@section('content')
    <h1>{{ __('messages.create_conference') }}</h1>

    <form action="{{ route('admin.conferences.store') }}" method="POST">
        @csrf
        @include('admin.conferences._form')

        <button type="submit" class="btn btn-primary">{{ __('messages.save') }}</button>
    </form>
@endsection
