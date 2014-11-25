<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @section('head')
        {{ HTML::style('bootstrap/css/bootstrap.css') }}
        {{ HTML::script('js/jquery.min.js') }}
        {{ HTML::script('bootstrap/js/bootstrap.min.js') }}
    @show
</head>
<body>
    
<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{URL::to('/home')}}">El Ganzo</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav col-sm-8 col-md-8">
              @if(Entrust::can('ver_usuarios'))
            <li><a href="{{URL::to('users')}}">Users</a></li>
              @endif
              @if(Entrust::can('ver_roles'))
              <li><a href="{{URL::to('roles')}}">Roles</a></li>
              @endif

            <li class="dropdown pull-right">
 				<a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown">Bienvenido, {{ Auth::user()->first_name; }} <span class="caret"></span></a>
                   <ul class="dropdown-menu" role="menu">
 					<li><a href="{{URL::to('logout')}}">Logout</a></li>
                    <li><a href="#">Action</a></li>
                    <li class="divider"></li>
                   </ul>
 			</li>


          </ul>          
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div>
    @yield('content')
</body>
</html>