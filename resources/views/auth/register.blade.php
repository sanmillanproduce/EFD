@extends('layouts.app')

@section('content')




<div class="container">
    <div id="register" class="login-container js-navDots">
        <div class="col-md-12 justify-content-center align-items-center Height100" style="padding: 0%">
            <div class="row justify-content-center" style=" height: 100% !important;">

                <div id="mandala__1" class="col-lg-6 justify-content-center align-items-center Height100" style="padding: 0%; background: white;">
                    <div class="row justify-content-center align-items-center Height100" >
                        <div class="" style="height: 100%; width: 100%; z-index: 97;" >
                            <img id="" class="log-mandala" src="{{ asset('media/imagenes/mandala.png') }}">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12 justify-content-center align-items-center Height100" style="padding: 0%">
                    <div class="row justify-content-center align-items-center Height100" >

                        <div id="login-2" class="col-lg-12  col-sm-12  justify-content-center align-items-center Height100 logi" >
                            <div class="row justify-content-center align-items-center Height100">
                                <div class="card-body justify-content-center align-items-center Height100" style="width: 100%;">

                                    <h1 class="Title_Login" style="margin-top:0 !important;">¡Bienvenido!</h1>
                                    <p style="color: white;">Concectarse a través de Redes Sociales</p>

                                    <form class="form-horizontal Acceso_2" method="POST" action="{{ route('register') }}" >
                                        {{ csrf_field() }}
                                        <div class="login-redes row justify-content-center align-items-center" style="height: 35px; text-align: center;">
                                            <div class="col-md-12 justify-content-center align-items-center Height100" style="padding: 0%; margin-top:6px; color: white;">
                                                <div class="imd" style="margin-left: 30px;"><i class="fab fa-facebook-f C"></i></div>
                                                <div class="imd" style="margin-left: 30px;"><i class="fab fa-twitter C"></i></div>
                                                <div class="imd" style="margin-left: 30px;"><i class="fab fa-google-plus-g C"></i></div>
                                            </div>
                                        </div>
                                        <p style="color: white;">O ingresa tus datos:</p>
                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" >
                                            <label for="name" class="col-md-5 control-label">Nombre</label>

                                            <div class="col-md-12" style="padding:0% 25%;">
                                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                                @if ($errors->has('name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class="col-md-5 control-label">Correo</label>

                                            <div class="col-md-12" style="padding:0% 25%;">
                                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password" class="col-md-5 control-label">Contraseña</label>

                                            <div class="col-md-12" style="padding:0% 25%;">
                                                <input id="password" type="password" class="form-control" name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="password-confirm" class="col-md-5 control-label">Repetir Contraseña</label>

                                            <div class="col-md-12" style="padding:0% 25%;">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-12" style="padding:0% 30%;">
                                                <button type="submit" class="btn btn-style">
                                                    Registrarse
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function(){

            $("#intro").addClass("backgroud_1");
        });

    </script>

    <script>
        window.fbAsyncInit = function() {
        FB.init({
            appId      : '{your-app-id}',
            cookie     : true,
            xfbml      : true,
            version    : '{api-version}'
        });

        FB.AppEvents.logPageView();

        };

        (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
@endsection
