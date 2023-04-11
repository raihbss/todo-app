<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos</title>
</head>
<body>
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
</body>
</html>