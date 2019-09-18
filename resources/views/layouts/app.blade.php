<!DOCTYPE html>
<html lang="ja">
  <head>
  <title>Laravel Quickstart - Basic</title>
  </head>

  <body>
    <a href="{{ url('/')  }}">Todoリスト</a>
    <p>
      @yield('content')
    </p>
  </body>
</html>
