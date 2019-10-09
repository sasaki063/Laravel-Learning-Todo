<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
      $item = Task::orderBy('created_at', 'asc')->get();
      return view('tasks',  [
        'item'  => $item,
        'input' => '']);
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
      $task->status = ($task->status == '0' ) ?  '1' : '0';

      $task->save();
      return redirect('/task');
    }

    public function search(Request $request)
    {
      $status = $request->status;
       if ($status == 'all') {
         $item = Task::orderBy('created_at', 'asc')->get();
       } else {
         $item = Task::where('status',$request->status)->get();
       }
      $param = ['input' => $request->status, 'item' => $item];
       return view('/tasks', $param);
    }
}
