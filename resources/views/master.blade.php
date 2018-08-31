
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Challenge</title>

    <link href="{{asset ('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset ('css/theme.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset ('css/fileinput.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset ('themes/explorer/theme.css')}}" media="all" rel="stylesheet" type="text/css"/>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{asset ('js/jquery.js')}}" type="text/javascript"></script>
    <script src="https://use.fontawesome.com/b9e619cfcd.js"></script>
    <script src="{{asset ('js/fileinput.js')}}" type="text/javascript"></script>
    <script src="{{asset ('js/plugins/sortable.js')}}" type="text/javascript"></script>
    <script src="{{asset ('js/locales/pt-BR.js')}}" type="text/javascript"></script>
    <script src="{{asset ('js/ie10-viewport-bug-workaround.js')}}"></script>

</head>

<body>

<div class="container">

    <div class="main">
        @yield('header')
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            @yield('main-content')
        </div>
    </div>

    <footer class="footer center-block text-center">
        @yield('footer')
    </footer>

</div>



</body>
</html>
