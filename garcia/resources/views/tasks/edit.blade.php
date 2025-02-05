@extends('layouts.app')

@section('content')
    <h1>Edit Task</h1>
    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $task->title }}" required>
        <textarea name="description">{{ $task->description }}</textarea>
        <input type="checkbox" name="is_completed" {{ $task->is_completed ? 'checked' : '' }}> Completed
        <button type="submit">Update Task</button>
    </form>
@endsection
