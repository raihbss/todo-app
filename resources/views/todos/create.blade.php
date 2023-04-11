@extends('layout')
@section('title', 'Page Title')
@section('sidebar')
    @parent
    <p>This refers to the master sidebar.</p>
@endsection
@section('content')
    <div>
        <h1>Enter New Task Details:</h1>
    </div>
    <br/>
    <div>
        <form
            action="{{ route('todos.store') }}"
            method="POST"
            enctype="multipart/form-data">
            @csrf

            <input
                type="text"
                name="task"
                placeholder="Task......">
            <br/>
            <br/>
            <label for="is_completed">
                Is Completed
            </label>
            <input
                type="checkbox"
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