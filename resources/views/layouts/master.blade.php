<html>
    <head>
        <title>Predictor - @yield('title')</title>

          <!-- CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->



<link rel="stylesheet" href="{!! asset('css/main.css') !!}">
<link rel="stylesheet" href="{!! asset('css/dashboard.less') !!}">


        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
<script type="text/javascript" src="{!! asset('js/controllers/mainCtrl.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/controllers/loginCtrl.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/controllers/torneoCtrl.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/services/videoService.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>

 





    
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>