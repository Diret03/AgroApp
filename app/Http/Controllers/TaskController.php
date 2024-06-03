<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Project;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        $projects = Project::all();
        return view('tasks.index', compact('tasks', 'projects'));
    }

    public function create()
    {
        $projects = Project::all();
        return view('tasks.create', compact('projects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'progress_percentage' => 'required|numeric',
            'project_id' => 'required|exists:projects,id'
        ]);

        Task::create($request->all());
        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        $projects = Project::all();
        return view('tasks.edit', compact('task', 'projects'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'progress_percentage' => 'required|numeric',
            'project_id' => 'required|exists:projects,id'
        ]);

        $task = Task::findOrFail($id);
        $task->update($request->all());
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }
}
