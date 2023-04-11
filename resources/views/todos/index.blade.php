@extends('layout')
@section('title', 'Page Title')
@section('sidebar')
    @parent
    <p>This refers to the master sidebar.</p>
@endsection
@section('content')
    <div>
        <div>
            <h1>todo app index page.</h1>
        </div>
        <div>
            <h2>
                <a href="{{ route('todos.create') }}">Add New Task</a>
            </h2>
        </div>
        <br/>
        <br/>
        <div>
            <ul>
                @foreach ($todos as $todo)
                    <div>
                        <li>
                            <a href="{{ route('todos.show', $todo -> id) }}">{{ $todo -> task }}</a>
                        </li>
                        <form action="{{ route('todos.delete', $todo->id) }}", method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                Delete
                            </button>
                        </form>
                        <a href="{{ route('todos.edit', $todo -> id) }}">Edit</a>
                    </div>
                    <br />
                @endforeach
            </ul>
        </div>
    </div>
@endsection