@extends('layouts.app')

@section('content')
    <div id="site_content" class="row justify-content-center align-items-center Height100">

        <!--ImagenSplash-->
        <div id="ImagenSplash" class="Splash col-lg-12 justify-content-center align-items-center Height100" style="overflow: hidden;">
            <div id="Fondo_splash" class="row justify-content-center align-items-center Height100" style="position: relative;">
                <div class="Fondo_splash">
                    <div class="Logo_splash" data-animate-scroll='{"alpha": "0", "y":"50", "duration": "4.5", "scaleX": "0",  "scaleY": "0", "ease": "Elastic.easeIn"}' >
                    </div>
                </div>
            </div>
        </div>

        <!--Carusell-->
        <div id="Slider" class="col-lg-12 justify-content-center align-items-center Height100" style="padding: 0%; z-index:90;">
            <div class="row justify-content-center align-items-center Height100">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item  imhh imhh_img0 active"></div>
                        <div class="carousel-item  imhh imhh_img1"></div>
                        <div class="carousel-item  imhh imhh_img2"></div>
                        <div class="carousel-item  imhh imhh_img3"></div>
                        <div class="carousel-item  imhh imhh_img4"></div>
                        <div class="carousel-item  imhh imhh_img5"></div>
                        <div class="carousel-item  imhh imhh_img6"></div>
                        <div class="carousel-item  imhh imhh_img7"></div>
                        <div class="carousel-item  imhh imhh_img8"></div>
                        <div class="carousel-item  imhh imhh_img9"></div>
                        <div class="carousel-item  imhh imhh_img10"></div>


                    </div>
                </div>
            </div>
        </div>

        <!--Imagenes Parallax-->
        <div id="Imagenes-Parallax" class="col-lg-12 justify-content-center align-items-center Height100" style="padding: 0%;  z-index:90;">
            <div class="row justify-content-center align-items-center Height100" style="padding: 0%; z-index: 99% !important; background: white;">

                <div id="back" class="justify-content-center align-items-center fle_3" onclick="back()" >
                    <img class=" fle" src="{{ asset('media/iconos/iz.png') }}" >
                </div>

                <div id="CA" class="col-3 carru justify-content-center align-items-center Height100" style="padding: 0%;" data-70="transform:translateY(45%)" data-630="transform:translateY(0%)">
                    <div id="" class="CA_1 row justify-content-center align-items-center Height100" style="z-index: 96;">
                        <img id="" class="carru2 sdsd zumi" src="{{ asset('media/scroll/2.2.jpg') }}" >
                        <div class="justify-content-center align-items-center let" >
                            <p id="p_ca"  class="sub_menu_home">CÁMARAS</p>
                            <p class="sub_menu "><a href="" class="categoria_submenu"> Cine</a></p>
                            <p class="sub_menu "><a href="" class="categoria_submenu"> Digital</a></p>
                        </div>


                    </div>
                </div>
                <div id="OP" class="col-3 carru justify-content-center align-items-center Height100" style="padding: 0%;" data-140="transform:translateY(60%)" data-630="transform:translateY(0%)">
                    <div class="CA_1 row justify-content-center align-items-center Height100">
                        <img id="" class="carru2  adf zumi" src="{{ asset('media/scroll/1.jpg') }}">
                        <div class="justify-content-center align-items-center let" >
                            <p id="p_op" class="sub_menu_home">ÓPTICA</p>
                            <p class="sub_menu "><a href="" class="categoria_submenu"> Anamórficos</a></p>
                            <p class="sub_menu "><a href="" class="categoria_submenu"> Primarios</a></p>
                            <p class="sub_menu "><a href="" class="categoria_submenu"> Full Frame</a></p>
                            <p class="sub_menu "><a href="" class="categoria_submenu"> Zoom</a></p>
                            <p class="sub_menu "><a href="" class="categoria_submenu"> Especiales</a></p>
                        </div>
                    </div>
                </div>
                <div id="FI" class="col-3 carru justify-content-center align-items-center Height100" style="padding: 0%;" data-210="transform:translateY(75%)" data-630="transform:translateY(0%)">
                    <div class="CA_1 row justify-content-center align-items-center Height100">
                        <img id="" class="carru2  zumo" src="{{ asset('media/scroll/14.jpg') }}" >
                        <div class="justify-content-center align-items-center let" >
                            <p id="p_mo" class="sub_menu_home">ACCESORIOS Y FILTROS</p>
                            <p class="sub_menu "><a href="" class="categoria_submenu"> Accesorios</a></p>
                            <p class="sub_menu "><a href="" class="categoria_submenu"> Filtros</a></p>
                        </div>
                    </div>
                </div>
                <div id="IL" class="col-3 carru justify-content-center align-items-center Height100" style="padding: 0%;" data-280="transform:translateY(90%)" data-630="transform:translateY(0%)">
                    <div class="CA_1 row justify-content-center align-items-center Height100">
                        <img id="" class="carru2 zumi " src="{{ asset('media/scroll/4.jpg') }}" >
                        <div class="justify-content-center align-items-center let" >
                            <p id="p_il" class="sub_menu_home">ILUMINACIÓN</p>
                            <p class="sub_menu "><a href="" class="categoria_submenu"> Led</a></p>
                            <p class="sub_menu "><a href="" class="categoria_submenu"> HMI</a></p>
                            <p class="sub_menu "><a href="" class="categoria_submenu"> Tungsteno</a></p>
                            <p class="sub_menu "><a href="" class="categoria_submenu"> Textiles</a></p>
                            <p class="sub_menu "><a href="" class="categoria_submenu"> Tramoya</a></p>
                            <p class="sub_menu "><a href="" class="categoria_submenu"> Eléctrico</a></p>
                        </div>
                    </div>
                </div>
                <div id="MO" class="col-3 none carru justify-content-center align-items-center Height100" style="padding: 0%;" >
                    <div class="CA_1 row justify-content-center align-items-center Height100">
                        <img id="" class="carru2  zumo" src="{{ asset('media/scroll/11.jpg') }}" >
                        <div class="justify-content-center align-items-center let" >
                            <p id="p_mo" class="sub_menu_home">MÓVILES Y PLANTAS</p>
                            <p class="sub_menu "><a href="" class="categoria_submenu"> Móviles</a></p>
                            <p class="sub_menu "><a href="" class="categoria_submenu"> Plantas</a></p>
                        </div>
                    </div>
                </div>
                <div id="GR" class="col-3 none carru justify-content-center align-items-center Height100" style="padding: 0%;">
                    <div class="CA_1 row justify-content-center align-items-center Height100">
                        <img id="" class="carru2  zumo" src="{{ asset('media/scroll/16.jpg') }}" >
                        <div class="justify-content-center align-items-center let" >
                            <p id="p_gr" class="sub_menu_home">GRÚAS DOLLIES</p>
                            <p id="p_cr" class="sub_menu_home">CABEZAS REMOTAS</p>
                            <p class="sub_menu "><a href="" class="categoria_submenu"> Grúas</a></p>
                            <p class="sub_menu "><a href="" class="categoria_submenu"> Dollies</a></p>
                            <p class="sub_menu "><a href="" class="categoria_submenu"> Cabezas Remotas</a></p>
                            <p class="sub_menu "><a href="" class="categoria_submenu"> Accesorios</a></p>
                        </div>
                    </div>
                </div>
                <div id="MC" class="col-3 none carru justify-content-center align-items-center Height100" style="padding: 0%;">
                    <div class="CA_1 row justify-content-center align-items-center Height100">

                            <img id="" class="carru2  adf zumo1" src="{{ asset('media/scroll/3.jpg') }}">
                        <div class="justify-content-center align-items-center let" >
                            <p id="p_ge" class="sub_menu_home">MOTION CONTROL</p>
                        </div>
                    </div>
                </div>
                <div id="PE" class="col-3 none carru justify-content-center align-items-center Height100" style="padding: 0%;">
                    <div class="CA_1 row justify-content-center align-items-center Height100">
                        <img id="" class="carru2  zumo1" src="{{ asset('media/scroll/13.jpg') }}" >
                        <div class="justify-content-center align-items-center let" >
                            <p id="p_pe" class="sub_menu_home">PERSONAL</p>
                        </div>
                    </div>
                </div>

                <div id="next" class="justify-content-center align-items-center fle_2" onclick="next()" >
                    <img class=" fle" src="{{ asset('media/iconos/d.png') }}" >
                </div>

            </div>
        </div>

        <!--Noticias-->
        <div id="Noticias"  class="col-lg-12 justify-content-center align-items-center Height100 " style=" z-index: 90; background: white; text-align: justify; margin-bottom: 6%;" >

        </div>



    </div>
@endsection
@section('scripts')

    <script src="https://vjs.zencdn.net/7.3.0/video.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js"></script>
    <script src="{{ asset('js/animate-scroll.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/skrollr.min.js') }}"></script>

    <script type="text/javascript">

       $(document).animateScroll();
    </script>

@endsection
