<!doctype html>
<html lang='en'>
<head>

    <title>@yield('title', 'Rock Paper Scissors')</title>
    <meta charset='utf-8'>

    <link rel='shortcut icon' href='/favicon.ico'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='/css/p4.css' rel='stylesheet'>

    @yield('head')

</head>

<body>
  <header>
    <img id='logo' src='/images/headerpic.png' alt='{{$app->config('app.name')}} Logo'>
    <h1><a href='/'> {{ 'Rock Paper Scissors' }}</a></h1>
  </header>

  <main>
      @yield('content')
  </main>

  <footer>
  </footer>

  @yield('body')

</body>
</html>