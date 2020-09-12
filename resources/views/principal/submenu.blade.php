
<nav id="barra_navegacion" class="navbar col-lg-11 offset-1 Height4 Filter" style="padding: 0%;" >
    <div class="row justify-content-center align-items-center Height100" style="padding:0">

    @foreach ($subclasificaciones1 as $capa2)

        <div class="col-lg-1 justify-content-center align-items-center Height100" style="padding:0">
            <div class="row justify-content-center align-items-center Height100" style="padding:0">
                @foreach ($clasificaciones as $clasificacion)

                    @if ($clasificacion->id == $capa2->classification_id )
                        <p class="Marca_submenu"> {{ $clasificacion->name }}  &nbsp;&nbsp; | </p>
                    @endif

                @endforeach
            </div>
        </div>

        <div class="dropdown col-lg-1 justify-content-center align-items-center Height100" style="padding:0">
            <div class="row  align-items-center Height100" style="padding:0">

                <p class="Marca_submenu"> {{  $capa2->name }} &nbsp;&nbsp; | </p>


                <ul class="dropdown-menu_3"  style=" text-decoration:none;">
                    @foreach ($subclasificaciones as $drop)
                        @if ($drop->classification_id == $capa2->classification_id )
                            <a href="/{{  strip_tags($capa2->classification->slug) }}/{{  $drop->slug }}" class="dropdown-item" style="font-size: 0.6rem; text-decoration:none;">{{  $drop->name }}</a>
                        @endif
                    @endforeach
                </ul>


            </div>
        </div>
    @endforeach
        <div id="categorias_bold" class="Categorias_submenu col-lg-10 justify-content-center align-items-center Height100" style="padding:0">
            <div class="row justify-content-left align-items-left align-items-center Height100" style="padding:0">
                <ul class="nav nav-pills">
                    @foreach ($clasificaciones1 as $capa1)
                        @foreach ($subareas as $capa3)
                            @if ($capa3->subclassification_id == $capa1->id )
                             <li class="nav-item">   <a  id="__{{  $capa3->name }}" data-page="{{  $capa3->name }}" class="_{{  $capa3->body }} sub_menu_cat nav-link" href="#{{  $capa3->name }}" >&nbsp; {{  $capa3->name }} &nbsp; | &nbsp;</a></li>
                            @endif
                        @endforeach
                    @endforeach
                    </ul>
            </div>
        </div>

    </div>
</nav>


@section('scripts')
    <script>
        $(document).ready(function(){
            $("#intro").addClass("backgroud_1");
       });

    </script>
@endsection
