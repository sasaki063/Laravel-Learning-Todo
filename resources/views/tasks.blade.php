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
            <td>{{ $task-> id }}</td>
            <td>{{ $task-> name }}</td>
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

  <h1>新規タスク追加</h1>
  <form action="{{ url('task')  }}" method="POST">
    {{ csrf_field() }}
    <label for="task-name"></label>
    <input type="text" name="name" id="task-name">
    <button type="submit">追加</button>
  </form>

@endsection
