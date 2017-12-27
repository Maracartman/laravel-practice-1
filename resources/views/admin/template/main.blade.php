<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> @yield('title','Default') | Panel de Administración</title>

    <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<style>
    td, th{
        padding: 1em !important;
    }
</style>
</head>
<body>
@include('admin.template.partials.nav')
@include('flash::message')
<div class="row">
    <div class="col-lg-3 col-md-2 col-sm-1"></div>
    <div class="col-lg-6 col-md-8 col-sm-10">
        @yield('content')
    </div>
    <div class="col-lg-3 col-md-2 col-sm-1"></div>
</div>
<script type="text/javascript" src="{{asset('plugins/jquery/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

</body>
</html>


