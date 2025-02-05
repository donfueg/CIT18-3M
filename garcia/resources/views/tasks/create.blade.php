@extends('layouts.app')

@section('content')
    <h1>Create New Task</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Task title" required>
        <textarea name="description" placeholder="Task description"></textarea>
        <input type="checkbox" name="is_completed"> Completed
        <button type="submit">Create Task</button>
    </form>
@endsection
