
@extends('layouts.app')
@section('content')

  <form action="/task" method="post">
    {{ csrf_field() }}
    <label><input type="submit" name="status" value="all" checked="checked">全部</label>
    <label><input type="submit" name="status" value="0">作業中</label>
    <label><input type="submit" name="status" value="1">完了</label>
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

 <h1>新規タスク追加</h1>
 <form action="/task" method="POST">
   {{ csrf_field() }}
   <input type="text" name="name">
   <button type="submit">追加</button>
 </form>

@endsection
