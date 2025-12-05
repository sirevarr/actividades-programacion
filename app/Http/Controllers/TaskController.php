<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:200',
            'prioridad' => 'required|in:baja,media,alta',
            'estado' => 'required|in:pendiente,en_progreso,completada'
        ]);

        Task::create($request->all());
        return redirect()->route('tasks.index')->with('success', 'Tarea creada');
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'titulo' => 'required|string|max:200',
            'prioridad' => 'required|in:baja,media,alta',
            'estado' => 'required|in:pendiente,en_progreso,completada'
        ]);

        $task->update($request->all());
        return redirect()->route('tasks.index')->with('success', 'Tarea actualizada');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Tarea eliminada');
    }
}