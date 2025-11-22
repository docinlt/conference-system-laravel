@extends('layouts.app')

@section('title', __('messages.edit_conference'))

@section('content')
    <h1>{{ __('messages.edit_conference') }}</h1>

    <form action="{{ route('admin.conferences.update', $conference) }}" method="POST">
        @csrf
        @method('PUT')
        @include('admin.conferences._form')

        <button type="submit" class="btn btn-primary">{{ __('messages.save') }}</button>
    </form>
@endsection
