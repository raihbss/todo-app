<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::latest() -> paginate(5);
        return view('todos.index', ["todos" => $todos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, Todo::$rules);

        $newTodo = new Todo();
        $newTodo -> task = $request -> task;
        $newTodo -> completed = $request -> is_completed == 'on' ? 1 : 0;
        $newTodo -> save();
        return redirect(route('todos.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $todo = Todo::findOrFail($id);
        return view('todos.show', ["todo" => $todo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $todo = Todo::findOrFail($id);
        return view('todos.edit', ['todo' => $todo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, Todo::$rules);
        $todo = Todo::findOrFail($request->id);
        $todo -> completed = $request -> is_completed == 'on' ? 1 : 0;
        $todo->save();
        return redirect(route('todos.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Todo::destroy($id);
        return redirect(route('todos.index'));
    }
}
