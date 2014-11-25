<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="css/login.css" />
    </head>
    <body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
                <form class="form-signin" action="{{ url('/login') }}" method="POST">
                <h2 class="form-signin-heading">Iniciar sesión</h2>
                <input type="text" class="form-control" name="user" placeholder="Usuarios" required autofocus>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>

                </form>
            </div>

    </div>
</div>
    </body>
</html>