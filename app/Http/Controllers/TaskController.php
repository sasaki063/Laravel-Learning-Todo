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
      Task::find($id)->delete();
      return redirect('/task');
    }
    public function update($id)
    {

      $task = Task::find($id);
      $task->status = ($task->status === '0' ) ?  '1' : '0';

      $task->save();
      return redirect('/task');
    }
}
