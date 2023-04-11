<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Todo</title>
</head>
<body>
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
</body>
</html>