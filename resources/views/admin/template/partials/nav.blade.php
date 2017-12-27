<nav class="navbar navbar-default">
    <div class="container-fluid">

        <div class="navbar-header">

            {{--<a class="navbar-brand" href="#">Brand</a>--}}
            <img src="{{asset('images/icon-sample.jpg')}}"
                 class="img-responsive" width="20%" height="20%" alt="Responsive image">
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{route('users.index')}}">Usuarios</a></li>
                <li><a href="{{route('categories.index')}}">Categorías</a></li>
                <li><a href="{{route('articles.index')}}">Artículos</a></li>
                <li><a href="#">Imagenes</a></li>
                <li><a href="#">Tags</a></li>

            </ul>
            {{--<form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>--}}
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/">Página principal</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                       role="button" aria-haspopup="true" aria-expanded="false">Opciones <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>