@extends('layouts.app')

@section('content')

<div id="" class="row justify-content-center align-items-center Height100" style="    padding-top: 6%;">



    <div class="col-5 justify-content-center align-items-center Height100" style="padding: 0% 5% 5% 5%;">

        <div id="" class="Conte_Box row justify-content-center align-items-center Height70" style="background: ;">

            <div class="container_producto">
                @if ( $product->file )
                <img class="Product_Img" src="{{ $product->file }}" />
           
                @endif
                <div type=button class="btn_producto" data-toggle="modal" data-target="#exampleModalCenter"></div>
                <div id="divextra"></div>
            </div>
        </div>

        <div id="" class="row justify-content-center align-items-center Height30" style="padding:0% 15% 5% 15%;">

            <div class="col-lg-12 justify-content-center align-items-center Height100" style="padding: 0;">

                <div id="" class="row justify-content-center align-items-center Height40" style="background: ;">

                    <div class="col-6 justify-content-center align-items-center Height100" style="padding: 2% 4%;">
                        <div id="" class="row justify-content-center align-items-center Height100" style="border-radius: 5px; background: #707791;">
                            <span class="Info_Num">Unidades</span>
                        </div>
                    </div>

                    <div class="col-6 justify-content-center align-items-center Height100" style="padding: 2% 4%;">
                        <div id="" class="row justify-content-center align-items-center Height100" style="border-radius: 5px; background: #707791">
                            <span class="Info_Num">Días</span>
                        </div>
                    </div>


                </div>

                <div id="" class="color_input row justify-content-center align-items-center Height40" style="padding: 0px;">

                    <div class="col-6 justify-content-center align-items-center Height100" style="padding:6px 10px;">
                        <div id="  " class="unidad row justify-content-center align-items-center Height100" style="background: ;">

                            <input class="" type="number" value="1" min="0" max="1000" step="1" class="numb" />

                        </div>
                    </div>

                    <div class="col-6 justify-content-center align-items-center Height100" style="padding:6px 10px;">
                        <div id="  " class="unidad row justify-content-center align-items-center Height100" style="background: ;">

                            <input class="" type="number" value="1" min="0" max="1000" step="1" class="numb" />

                        </div>
                    </div>

                </div>

                <div id="" class="row justify-content-center align-items-center Height20" style="padding: 0% 5%;">
                    <div class="col-lg-6 offset-3 justify-content-center align-items-center" style="height: 35px; text-align: center; padding:0%; margin:auto;">
                        <div id="" class=" row justify-content-center align-items-center Height100" style="background: ;" onclick="extra()">
                            <a id="send_"class="BTN_Add" href="{{ route('cart-add', $product->id) }} ">

                            </a>
                        </div>


                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="col-7 justify-content-center align-items-center Height100" style="padding:0px 5% 0% 5%;">
        <div id="" class="row justify-content-center align-items-center Height100" style="background: ;">

            <div class="col-lg-12 justify-content-center align-items-center Height10" style="padding: 0;">
                <div id="" class="row  align-items-left Height100" style="padding: 0 3%;">
                    <h3 class="Prodcut_Show_">{{ $product->model}}..{{ $product->id  }}</h3>
                </div>
            </div>

            <div class="col-lg-12 justify-content-center align-items-center Height45" style="padding: 0;">

                <div id="IN" class="Act_Show row justify-content-center align-items-center Height10" style="background: ;">
                    <p class="I_E">INCLUIDO EN EL PAQUETE</p>
                </div>

                <div id="INCLUIDO" class="INCLUIDO col-12 justify-content-center align-items-center Height90" style="padding: 1% 3%;  overflow: auto;">

                    <div id="" class="row justify-content-center align-items-center Height100" style="background: ;">
                        @foreach ($incluidos as $incluido)

                        @if ($incluido->kit_id == $product->id )
                        <div class="col-lg-1 justify-content-center align-items-center Height5_2" style="padding: 0;">
                            <p>{{ $incluido->quantity}}</p>
                        </div>
                        <div class="col-lg-11 justify-content-center align-items-center Height5_2" style="padding: 0;">
                            @foreach ($names as $name)
                            @if ($name->id_product == $incluido->product_id )
                            <p>{{ $name->name }}</p>
                            @endif
                            @endforeach
                        </div>
                        @endif

                        @endforeach
                    </div>

                </div>

            </div>

            <div class="col-lg-12 justify-content-center align-items-center Height50" style="padding: 0;">

                <div id="EX" class="Act_Show row justify-content-center align-items-center Height10" style="padding: 0;">
                    <p class="I_E">EXTRAS</p>
                </div>

                <div id="EXTRAS" class="EXTRA col-12 justify-content-center align-items-right Height80" style="padding: 0 3% 0 0; overflow: auto; text-align: right;">

                    <div id="" class="Cabe_ row justify-content-center align-items-center Height20">
                        <div class="col-lg-6 justify-content-center align-items-center Height100">
                            <div class="row justify-content-center align-items-center Height100">
                                <p>Nombre</p>
                            </div>
                        </div>
                        <div class="col-lg-2 justify-content-center align-items-center Height100">
                            <div class="row justify-content-center align-items-center Height100">
                                <p>Unidades</p>
                            </div>
                        </div>
                        <div class="col-lg-2 justify-content-center align-items-center Height100">
                            <div class="row justify-content-center align-items-center Height100">
                                <p>Días</p>
                            </div>
                        </div>
                        <div class="col-lg-2 justify-content-center align-items-center Height100">
                            <div class="row justify-content-center align-items-center Height100">

                            </div>
                        </div>
                    </div>

                    <div id="" class="Art  row justify-content-center align-items-center Height80" style="padding: 8% 0 0 0;">
                        @foreach ($extras as $extra)

                        @if ($extra->kit_id == $product->id )

                        <div class="col-lg-12 justify-content-center align-items-center Height20" style="padding: 0;">
                            @foreach ($names as $name)
                            @if ($name->id_product == $extra->product_id )
                            <div class="row justify-content-center align-items-center Height100">
                                <div class="col-lg-6 justify-content-center align-items-center Height100">
                                    <div class="row justify-content-center align-items-center Height100">
                                        <label for="{{ $name->name }}">
                                            <input style="vertical-align: middle;" id="{{$extra->id}}" name="extra" type="checkbox" value="{{$extra->id}}" />
                                            <p class="btn_filtro_add" style="    margin-left: 2px;">{{ strip_tags($name->name) }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-2 justify-content-center align-items-center Height100" style="    padding: 4px 4%;">
                                    <div class="row justify-content-center align-items-center Height100">
                                        <input class="" type="number" value="1" min="0" max="1000" step="1" class="numb" />
                                    </div>
                                </div>
                                <div class="col-lg-2 justify-content-center align-items-center Height100" style="    padding: 4px 4%;">
                                    <div class="row justify-content-center align-items-center Height100">
                                        <input class="" type="number" value="1" min="0" max="1000" step="1" class="numb" />
                                    </div>
                                </div>
                                <div class="col-lg-2 justify-content-center align-items-center Height100">
                                    <div class="row justify-content-center align-items-center Height100">

                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>

                        @endif

                        @endforeach
                    </div>

                </div>

            </div>

        </div>
    </div>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="margin-top: 1%;">
            <div class="modal-content modal_especificaciones">

                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalCenterTitle">{{ $product->name }}</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>

                <div class="modal-body">
                    <div class="row-lg-12 justify-content-center align-items-center Height100" style="padding:0% 10% 12% 13%;">

                        <div class="col-lg-12 justify-content-center align-items-center Height10" style="padding:0%;">
                            <div class="row justify-content-center align-items-center Height100">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Especificaciones</h5>
                            </div>
                        </div>

                        <div class="col-lg-12 justify-content-center align-items-center Height5_2" style="padding:0% ;">
                            <div class="row justify-content-center align-items-center Height100">
                                <p style="background: #151e45; color: #151e45; width: 100%;">.</p>
                            </div>
                        </div>

                        <div class="col-lg-12  Height85" style="padding: 3% 0 0 0;">
                            <div class="row  Height100">
                                <p>1 cuerpo de cámara alexa studio xt / alexa studio</p>
                                <p>1 ovf studio (finder)</p>
                                <p>1 extensión de finder</p>
                                <p>1 nivelador para finder el-3</p>
                                <p>1 antena</p>
                                <p>1 despulido sph c/arriglow</p>
                                <p>1 despulido scope 2x c/arriglow</p>
                                <p>1 prisma 1 cable de poder</p>
                                <p>1 cable arri para accesorios 12 v</p>
                                <p>1 adaptador para batería gold mount</p>
                                <p>2 tarjetas 512 gb (solo para studio xt)</p>
                                <p>5 tarjetas sxs 64 gb</p>
                                <p>1 lector codex cdx-7500 para tarjetas de 512 gb (sólo para studio xt)</p>
                                <p>1 cuerpo de cámara alexa studio xt / alexa studio</p>
                                <p>1 ovf studio (finder)</p>
                                <p>1 extensión de finder</p>
                                <p>1 nivelador para finder el-3</p>
                                <p>1 antena</p>
                                <p>1 despulido sph c/arriglow</p>
                                <p>1 despulido scope 2x c/arriglow</p>
                                <p>1 prisma 1 cable de poder</p>
                                <p>1 cable arri para accesorios 12 v</p>
                                <p>1 adaptador para batería gold mount</p>
                                <p>2 tarjetas 512 gb (solo para studio xt)</p>
                                <p>5 tarjetas sxs 64 gb</p>
                                <p>1 lector codex cdx-7500 para tarjetas de 512 gb (sólo para studio xt)</p>

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
    $(document).ready(function() {
        $("#intro").addClass("backgroud_1");
    });
</script>

<script src="{{ asset('js/bootstrap-input-spinner.js') }}"></script>
<script>
    $("input[type='number']").inputSpinner()
</script>

@endsection