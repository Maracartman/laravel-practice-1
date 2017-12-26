<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> @yield('title','Default') | Panel de Administración</title>
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/css/bootstrap-theme.css')}}">

</head>
<body>
@include('admin.template.partials.nav')

<div class="container">
        <div class="row">
            <div class="col">

            </div>
            <div class="col-6">
                @yield('content')
            </div>
            <div class="col">

            </div>
        </div>

    </div>
<script type="text/javascript" src="{{asset('plugins/jquery/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

</body>
</html>


