<!DOCTYPE html>
<html>
<head>
    <title>laratest</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <!--    <link href="css/bootstrap.min.css" rel="stylesheet">-->
    {{ HTML::style('packages/bootstrap/css/bootstrap.css') }}
    {{ HTML::style('css/main.css')}}
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    {{ HTML::script('https://code.jquery.com/jquery.js') }}
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {{ HTML::script('packages/bootstrap/js/bootstrap.js') }}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="container col-md-6 col-md-offset-3">
    {{ Auth::user()}}
    @if(Session::has('message'))
        <p class="text-danger">{{ Session::get('message') }}</p>
    @endif
    @yield('content')

</div>
</body>
</html>
