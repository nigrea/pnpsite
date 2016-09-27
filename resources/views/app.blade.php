<!doctype html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Test Title</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>

</head>

<body>

@if(Auth::check())
    <h1>You are logged in</h1>
    <h1> <a href="{{ action('GamesController@create') }}"> Add a new Game </a></h1>
    <h1> <a href="{{ action('TagsController@create') }}"> Add a new Tag </a></h1>
    <h1> <a href="{{ action('GamesystemsController@create') }}"> Add a new Gamesystem </a></h1>
@else
    <h1>You are not logged in</h1>
    <h1> <a href="{{ url('auth/login') }}"> Login Here </a></h1>
@endif



<div class="container">
    @yield('content')
</div>
</body>


</html>