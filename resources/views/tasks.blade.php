@extends('layouts.app')
@section('content')
<p>New Task</p>

<!-- New Task Form -->
<form action="{{ url('task')  }}" method="POST" class="form-horizontal">
{{ csrf_field() }}

<!-- Task Name  -->
<label for="task-name" class="col-sm-3 control-label"></label>
<input type="text" name="name" id="task-name" class="form-control">

<!-- 追加ボタン -->
  <button type="submit" class="btn btn-default">
    <i class="fa fa-btn fa-plus"></i>Add Task
  </button>
</form>

<!-- タスク表示 -->
  @if (count($tasks) > 0)
    <table class="table table-striped task-table">
      <thead>
        <th>Task</th>
        <th>&nbsp;</th>
      </thead>
      <tbody>
        @foreach($tasks as $task)
          <tr>
            <td class="table-text"><div>{{ $task->name }}</div></td>
            <td>&nbsp;</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif

@endsection
