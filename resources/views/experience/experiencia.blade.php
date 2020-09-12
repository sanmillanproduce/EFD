@extends('layouts.app')
<!--Experiencia-Menu -->
@section('content')
<div id="Experiencia-Menu" class="row justify-content-center align-items-center Height100" style="padding: 4% 0 0 0;">
    <div class="col-lg-12 justify-content-center align-items-center Height100">
        <div id="" class="row justify-content-center align-items-center" style="padding: 0% 0 3% 0; background: #28292d;">

            <a href="{{ route('products.pdf') }}" class="descargarfilmografia">Descargar <img id="" src="http://127.0.0.1:8000/media/iconos/pdf2.png" class="filmpdf" > </a>


                @foreach($años as $año)


                    <div class="col-lg-12 justify-content-center align-items-center Height40" style="padding: 0; margin-top: 1%;">
                        <div class="row justify-content-center align-items-center Height20" style="padding: 0; ">
                            <p class="year">{{$año->name}} </p>

                        </div>

                        <div class="row justify-content-center align-items-center Height80" style="padding: 0; ">

                            <div class="page-wrapper">
                                <div class="poste-slidere">
                                    <div class="poste-wrappere_2">

                                    @foreach ($filmografias as $filmografia)
                                            @if ($filmografia->year_id == $año->id)
                                        <div class="poste">
                                            <div class="Height100 img-vid">
                                                <img class="vidd" src="{{$filmografia->file}}" >
                                            </div>
                                        </div>
                                            @endif
                                    @endforeach


                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                @endforeach

            </div>
        </div>

    </div>
@endsection

@section('scripts')

<script>
    (function() {
        $(document).ready(function() {
            $(document).ready(function() {
                $("#intro").addClass("backgroud_1");
            });
            $('.poste-wrappere_2').slick({
                infinite: true,
                slidesToShow: 8,
                slidesToScroll: 8
            });

        });
    })();
</script>
<script src="{{ asset('js/slick.min.js') }}"></script>

@endsection
