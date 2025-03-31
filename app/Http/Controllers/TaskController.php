<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::simplePaginate(10);
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date' => 'nullable|date',
            'completed' => 'boolean',
        ]);

        $task->update($validated);

        return redirect()->route('tasks.index')
            ->with('success', 'Задача успешно обновлена');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')
            ->with('success', 'Товар успешно удален');
    }
}
