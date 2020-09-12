@extends('layouts.app')
<!--Generadores -->
@section('content')
<div id="filtros" class="container justify-content-center align-items-center Height100" style="padding: 0%; z-index: 98;">
    <div class="row justify-content-center align-items-center Height100" style="padding:6% 0 0 0;">

        <div class="col-lg-11 offset-1 Height4 Filter" style="padding: 0%;" >
            <div class="row justify-content-center align-items-center Height100">
                <div class="col-lg-1 justify-content-center align-items-center Height100" style="padding: 0%;">
                    <div class="row justify-content-center align-items-center Height100">
                        <p class="Marca_submenu">Filtros |</p>
                    </div>
                </div>
                <div class="col-lg-11 justify-content-center align-items-center Height100" style="padding: 0%;">
                    <div class="row justify-content-center align-items-center Height100">

                    </div>
                </div>
            </div>

        </div>


        <section class="col-lg-12  justify-content-center align-items-center Height60" style="padding: 0;">
            <div class="row justify-content-center align-items-center Height20">
                <h4 style="margin:0%;">Filtros</h4>
            </div>
            <div class="row justify-content-center align-items-center Height80 filtro">
            </div>
        </section>

        <section class="col-lg-12  justify-content-center align-items-center Height100 menu0" style="padding: 2% 4% 0 6%;">

            <div class="row justify-content-center align-items-center Height100">

                @foreach ($menuuno as $menu)

                    <div class="col-lg-4  justify-content-center align-items-center Height100" style="padding: 0 3% 0 0px">

                        <div class="row justify-content-center align-items-center Height100" style="padding: 0;">

                            <div class="col-lg-12 justify-content-center align-items-center menu menu__" style="text-align: center;">
                                <div class="row justify-content-center align-items-center Height100" style="background: #f2f2f2;     border-radius: 3px 3px 0 0;">
                                    <div class="col-lg-6 justify-content-center align-items-center Height100 " style="text-align: center;     padding: 0 3px;">
                                        <div class="row justify-content-center align-items-center Height100">
                                            <p class="Sub_fil">{{  $menu->name }}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 justify-content-center align-items-center Height100 " style="text-align: center; padding: 0px 4px 0 4px;">
                                        <div id="" class=" row justify-content-center align-items-center Height100" style="background: ;"  onclick="ani()">
                                            <a class=" BTN_Add" href=" " >
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12 justify-content-center align-items-center Height85">
                                <div class="row justify-content-center align-items-center Height100">

                                    <div class="contendor-menu-filtros">

                                        <ul class="menu-filtros">

                                            @foreach ($navegacion as $men)

                                                <li id="" class="Drop_submenu"><a href="">{{  $men->name }}<i class="icono derecha fas fa-chevron-down"></i></a>
                                                    <ul>

                                                        <div id="  " class="row justify-content-center align-items-center Height100" style="background: ;">
                                                            <div class="col-lg-8 justify-content-center align-items-center Height100" style="padding:0% ;">
                                                                <p></p>
                                                            </div>
                                                            <div class="col-lg-2  Height100 Ind_tab" >
                                                                <p style="text-align: rigth !important; margin: 0;">Ud.</p>
                                                            </div>
                                                            <div class="col-lg-2 justify-content-center align-items-center Height100 Ind_tab">
                                                                <p style="margin: 0;">Días</p>
                                                            </div>
                                                        </div>

                                                        @foreach ($productos as $producto)

                                                            @if ($producto->brand == $menu->id )

                                                                <li class="sub_men_">
                                                                    <div id="  " class="row justify-content-center align-items-center Height100" style="padding: 0;">

                                                                        <div class="col-lg-8 justify-content-center align-items-center Height100" style="padding:0% ;">

                                                                            <label for="{{ $producto->name }}">
                                                                                <input style="vertical-align: middle;" type="checkbox" id="{{ $producto->name }}" /><p class="btn_filtro_add" style="    margin-left: 2px;">{{ strip_tags($producto->name) }}</p>

                                                                        </div>

                                                                        <div class="col-lg-2 justify-content-center align-items-center Height100" style="padding:0% ;">
                                                                            <div id="  " class="unidad row justify-content-center align-items-center Height100" style="    width: 80%;">

                                                                                <input class="Input_add_item"  type="number" value="1" min="0" max="1000" step="1"/>

                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-2 justify-content-center align-items-center Height100" style="padding:0% ;">
                                                                            <div id="  " class="unidad row justify-content-center align-items-center Height100" style="    width: 80%;">

                                                                                <input  class="Input_add_item"   type="number" value="1" min="0" max="1000" step="1"/>

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </li>

                                                            @endif

                                                        @endforeach

                                                    </ul>
                                                </li>

                                            @endforeach

                                        </ul>
                                    </div>

                                </div>

                            </div>


                        </div>

                    </div>

                @endforeach


            </div>

        </section>

    </div>
</div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $("#intro").addClass("backgroud_1");
            var altura = $('.menu0').offset().top;

            $(window).on('scroll', function(){
                if($(window).scrollTop() > altura){
                    $('.menu').addClass('menu-fixed');
                } else {
                    $('.menu').removeClass('menu-fixed');
                }
            });

            $('.Drop_submenu').click(function(e){
                e.preventDefault();
                    $(this).children('ul').slideToggle();

            });
            $('.Drop_submenu ul').click(function(p){
                p.stopPropagation();

            });
        });

    </script>
@endsection
