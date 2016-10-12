<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login | Funcionario</title>
    <link href="{{asset('favicon.ico')}}" rel="shortcut icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="{{asset('back/styles/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('login/css/style.css')}}">
</head>
<body>
    <div class="container">
    <h2 class="welcome text-center">Sistema de ...[Super]</h2>
        <div class="card card-container">
        <h2 class='login_title text-center'><img src="{{asset('images/logo.png')}}" width="225px"></h2>
        <hr>

            <form action="{{action('LoginController@postLoginSuper')}}" method="post" class="form-signin">
                {!! csrf_field() !!}
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputEmail" name="usuario" class="login_box" placeholder="Usuario" autocomplete="off" required autofocus>
                <span id="reauth-email" class="reauth-email"></span>
                <input type="password" id="inputEmail" name="password" class="login_box" placeholder="Contraseña" autocomplete="off" required>
                <div id="remember" class="checkbox">
                    <label>
                        
                    </label>
                </div>
                <button class="btn btn-lg btn-primary" type="submit">Acceder</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
</body>
</html>