<div class="mb-3">
    <label class="form-label">{{ __('messages.title') }}</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $conference->title ?? '') }}" required>
    @error('title') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">{{ __('messages.description') }}</label>
    <textarea name="description" class="form-control" required>{{ old('description', $conference->description ?? '') }}</textarea>
    @error('description') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">{{ __('messages.lecturers') }}</label>
    <input type="text" name="lecturers" class="form-control" value="{{ old('lecturers', $conference->lecturers ?? '') }}" required>
    @error('lecturers') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">{{ __('messages.date') }}</label>
    <input type="date" name="date" class="form-control" value="{{ old('date', isset($conference) ? $conference->date->format('Y-m-d') : '') }}" required>
    @error('date') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">{{ __('messages.time') }}</label>
    <input type="time" name="time" class="form-control" value="{{ old('time', $conference->time ?? '') }}" required>
    @error('time') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">{{ __('messages.address') }}</label>
    <input type="text" name="address" class="form-control" value="{{ old('address', $conference->address ?? '') }}" required>
    @error('address') <div class="text-danger">{{ $message }}</div> @enderror
</div>
