
@extends('layouts.app')
@section('content')

  <form action="/task" method="post">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <label><input type="radio" name="status" value="all" checked="checked">全部</label><br>
    <label><input type="radio" name="status" value="0">作業中</label><br>
    <label><input type="radio" name="status" value="1">完了</label><br>
    <input type="submit" value="find">
  </form>


  @if (isset($item))
    @if (count($item) > 0)
      <table>
        <thead>
          <th>ID</th>
          <th>タスク</th>
          <th>状態</th>
        </thead>
      @foreach($item as $task)
        <tr>
          <td>{{ $loop-> iteration }}</td>
          <td>{{ $task-> name }}</td>
          <td>
            <form action="/task/{{ $task->id }}" method="POST">
              {{ csrf_field() }}
              {{ method_field('PUT') }}
              <button type="submit">
              {{ $task-> status_label }}
              </button>
            </form>
          </td>
          <td>
            <form action="/task/{{ $task->id }}" method="POST">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
              <button type="submit">削除</button>
            </form>
          </td>
        </tr>
      @endforeach
   @endif
 @endif
<br>


  <h1>新規タスク追加</h1>
  <form action="/task" method="POST">
    {{ csrf_field() }}
    <label for="task-name"></label>
    <input type="text" name="name" id="task-name">
    <button type="submit">追加</button>
  </form>

@endsection
