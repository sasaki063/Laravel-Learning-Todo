@extends('layouts.app')
@section('content')

  @if (count($tasks) > 0)
    <table>
      <thead>
        <th>ID</th>
        <th>タスク</th>
        <th>状態</th>
      </thead>

      <tbody>
        @foreach($tasks as $task)
          <tr>
            <td>{{ $task->id }}</td>
            <td>{{ $task->name }}</td>
            <td>作業中</td>
            <td>
               <form action="{{ url('task/'.$task->id) }}" method="POST">
                <button type="submit">削除</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif

  <!-- 入力フォーム -->
  <form action="{{ url('task')  }}" method="POST" class="form-horizontal">
    {{ csrf_field() }}

    <!-- タスク名  -->
    <label for="task-name" class="col-sm-3 control-label"></label>
    <input type="text" name="name" id="task-name" class="form-control">

    <!-- 追加ボタン -->
    <button type="submit" class="btn btn-default">
      <i class="fa fa-btn fa-plus"></i>Add Task
    </button>
  </form>

@endsection
