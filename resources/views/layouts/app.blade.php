<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title>@yield('title')</title>
  <link rel="stylesheet" href="/css/app.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
  @include('inc.header')
  @if(Request::is('/'))
    @include('inc.hero')
  @endif
  <div class="container mt-5">
    @include('inc.messages')
    <div class="row">
      <div class="col-8">
        @yield('content')
      </div>
      <div class="col-4">
        @include('inc.aside')
      </div>
    </div>
  </div>
  @include('inc.footer')
</body>
</html>