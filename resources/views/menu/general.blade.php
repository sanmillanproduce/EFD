@extends('layouts.app')
<!--Camaras -->
@section('content')
<div id="" class="container justify-content-center align-items-center Height100" style="padding: 0%; z-index: 98;">
    <div class="row justify-content-center align-items-center Height100" style="padding: 3% 0 0 0">

        @include('principal.submenu')

        @foreach ($subareas as $subarea)

        <section id="{{  $subarea->name }}" data-index="{{  $subarea->name }}" class="{{  $subarea->name }} camaras_body" style="margin-top: 1%; padding: 3% 5% 4% 5%; z-index: 98;">

            <div class="row  align-items-left Height20">
                <h6 class="Title_categoria_">{{ $subarea->name }}</h6>
            </div>

            <div class="row justify-content-center align-items-center Height40">

                @foreach ($kits as $product)

                @if ($product->subarea_id == $subarea->id )

                <a href="{{ route('producto', "$product->id" )}}" class="">
                    <div class="col-lg-2 justify-content-center align-items-center Height100" style="padding: 0%;">

                        <div class="card">

                            <div class="face face1">

                                <div class="content" style="text-align: center; width: 100%;">

                                    <img class="vidd_2" src="{{ strip_tags($product->file) }}" />

                                    <div class="t_v justify-content-center align-items-center" style="text-align: center;">
                                        <h4 class="C_N">{{ strip_tags($product->model) }}</h4>
                                    </div>

                                </div>

                            </div>

                            <div class="face face2 justify-content-center align-items-center" style="text-align: center;">

                                <div class="content justify-content-center align-items-center" style="width: 100%">
                                    <div class="BTN_CAM BTN_Add" onclick="ani()">
                                        <a href="{{ route('cart-add', $product->id ) }} ">{{ $product->id  }}</a>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </a>

                @endif


                @endforeach

            </div>

        </section>

        @endforeach

    </div>
</div>
@endsection

@section('scripts')

<script src="{{ asset('js/lodash.js') }}"></script>
<script src="{{ asset('js/servicio_mov.js') }}"></script>
<script>
    $(document).ready(function() {
        $("#intro").addClass("backgroud_1");
    });
</script>


@endsection