@extends('layout')
@section('title', 'Page Title')
@section('sidebar')
    @parent
    <p>This refers to the master sidebar.</p>
@endsection
@section('content')
    <div>
        <h1>Edit Task Details:</h1>
    </div>
    <br/>

    <div>
        <form
            action="{{ route('todos.update', $todo -> id) }}"
            method="POST">
            @csrf
            @method('PATCH')

            <input
                type="text"
                name="task"
                value="{{ $todo -> task }}">
            <br/>
            <br/>
            <label for="is_completed">
                Is Completed
            </label>
            <input
                type="checkbox"
                {{ $todo -> completed == 1 ? 'checked' : '' }}
                name="is_completed">
            <br/>
            <br/>
            <button type="submit">
                Submit Post
            </button>
            <br/>
        </form>
    </div>
@endsection