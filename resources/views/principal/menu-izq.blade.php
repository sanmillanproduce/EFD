<div id="menu-izq" class="row Height95" style="padding: 0%;">
    <div id="menu-2-izq" class="col-12 justify-content-center align-items-center Height100 PAGE2" style="padding: 0% 0% 0% 0%;">
        <div  class=" row justify-content-center align-items-center Height100 Height100" style="padding: 0%;">

            <!--logo-->
            <div class=" col-12   justify-content-center align-items-center Height20" style="padding: 0%;">
                <div class="row justify-content-center align-items-center Height100">
                    <a href="/"  class="EFD_Logo">

                    </a>
                </div>
            </div>

            <!--menu-->

            <div  class=" col-12  justify-content-center align-items-center Height80 " style="    margin-top: 10%; padding: 0%;">
                <div  class=" row justify-content-center align-items-center Height100" style="padding: 0%;">

                    @foreach ($clasificaciones as $clasificacion)
                        <li class="li col-12  justify-content-center align-items-center Height100 dropdown" style="margin-top: 0px; ">

                            <div  class="row justify-content-center align-items-center Height100" role="button" aria-expanded="false">

                                <div class="col-lg-12 justify-content-center align-items-center Height60" style="padding: 0%;">

                                    <div  class="row justify-content-center align-items-center Height100" role="button" aria-expanded="false">
                                        <div class="menu_ menu_{{ $clasificacion->slug }}"></div>
                                        <div class="menu_ menu_{{ $clasificacion->slug }}_gif"></div>
                                    </div>

                                </div>

                                <div class="col-lg-12 justify-content-center align-items-center Height40 Texto_izq" style="padding: 0%;">
                                    <p>{{ $clasificacion->name }}</p>
                                </div>

                            </div>

                            <ul class="dropdown-menu " role="menu">
                                @foreach ($subclasificaciones as $subclasificacion)
                                    @if ($subclasificacion->classification_id == $clasificacion->id )
                                        <li class="col-12  justify-content-center align-items-center Height100" style="margin-top: 0px; padding: 0%;">
                                            <div  class="row justify-content-center align-items-center Height100" role="button" aria-expanded="false">
                                                <a  href="{{ route('general', "$subclasificacion->id") }}" class="dropdown-item categoria_menu" style="text-align:end;">{{ $subclasificacion->name }}</a>
                                            </div>
                                        </li>
                                    @endif
                                 @endforeach
                            </ul>

                        </li>

                    @endforeach

                </div>
            </div>

        </div>
    </div>
</div>
