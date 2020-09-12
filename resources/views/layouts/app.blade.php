<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="icon" type="image/png" href="/media/iconos/logo.png" />
        <title>{{ config('app.name', 'EFD') }}</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
        <link rel="stylesheet" href="https://vjs.zencdn.net/7.3.0/video-js.css"/>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap-dropdownhover.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/chat_stilo.css') }}">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

    </head>

    <body data-spy="scroll" data-target="#barra_navegacion">
        <div id="">
            <!--Barra de header-->
            @include('principal.nav')

            <!--Menu Web-Mobil -->
            @include('principal.menu-webmobil')

            <!--Menu Desplegable-->
            @include('principal.menu-desp')

            <!--MEnu-Izquierda-->
            @include('principal.menu-izq')

            <!--Pie de pagina-->
            @include('principal.footer')

            <!--Chat-->
            @include('principal.chat')

            <!--Pagina completa-->
            <div id="Page_01" class="row justify-content-center align-items-center Height95" style="padding: 0%;  margin: 0% 0% 2% 0% !important;">
                <div id="Pags" class="col-lg-11 offset-lg-1 col-sm-12 justify-content-center align-items-center Height100" style="padding: 0%; z-index: 98; background-color: #ffffff;">

                    <div id="G_randon" class="random ran_none">
                        <div id="random"  >

                        </div>
                    </div>

                    @yield('content')

                </div>
            </div>

        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('js/utils.js') }}"></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <script src="{{ asset('js/bootstrap-dropdownhover.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/Mov-Scroll.js') }}"></script>
        <script src="{{ asset('js/gif.js') }}"></script>
        <script src="{{ asset('js/chat.js') }}"></script>
        <script src="{{ asset('js/funcion_chat.js') }}"></script>
        <script src="{{ asset('js/bold.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('/css/intlTelInput.css') }}">
        <script src="{{ asset('js/itemslist.js') }}"></script>

        <script>
            $(function(){
                $(".icon-1").click(function(){
                    $(".input").toggleClass("active");
                    $(".contain").toggleClass("active");
                })
            });
        </script>

        @yield('scripts')

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

    </body>
</html>
