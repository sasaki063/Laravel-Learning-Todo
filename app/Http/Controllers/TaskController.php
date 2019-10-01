<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
      $tasks = Task::orderBy('created_at', 'asc')->get();
      return view('tasks', ['tasks' => $tasks]);
    }

    public function post(Request $request)
    {
      $task = new Task;
      $task->name = $request->name;
      $task->save();
      return redirect('/task');
    }

    public function delete($id)
    {
      Task::findOrFail($id)->delete();
      return redirect('/task');
    }
}
