<!DOCTYPE html>
<html>
    <head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{URL::to('src/css/main.css')}}">
    </head>
    <body>
    @include('includes.header')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
