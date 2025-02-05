{{-- resources/views/tasks/index.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Task List</h1>
    
    @if ($tasks->isEmpty())
        <p>No tasks available.</p>
    @else
        @foreach ($tasks as $task)
            <div>
                <h3>{{ $task->title }}</h3>
                <p>{{ $task->description }}</p>
                <p>Status: {{ $task->is_completed ? 'Completed' : 'Incomplete' }}</p>
                <a href="{{ route('tasks.edit', $task) }}">Edit</a>
                <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        @endforeach
    @endif
@endsection
