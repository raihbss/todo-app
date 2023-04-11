<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Todo</title>
</head>
<body>
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
</body>
</html>