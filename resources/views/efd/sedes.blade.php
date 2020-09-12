@extends('layouts.app')
<!--Camaras -->
@section('content')
<div id="sedes" class="row justify-content-center align-items-center Height100 sedes" >

    <div  class="col-lg-5 justify-content-center align-items-center Height100 " style="padding:18% 0px;">

        <div class=" row justify-content-center align-items-center Height33 pais">
            <div class="col-lg-7 justify-content-center align-items-center Height100 sedes_ usa " style="padding: 0px;">

            </div>

            <div class="col-lg-5 justify-content-center align-items-center Height100 " style="padding:0;">
                <div class=" row justify-content-center align-items-center Height100">
                    <p class="P_G _usa">USA</p>
                    <div class="pais_0 _usa_">
                        <p >2600 West Olive Av., 5th floor.</p>
                        <p >Burbank C.C. 91505</p>
                        <p >Tel: 818 729 8496</p>
                        <p >Mail: booking@efdusa.net</p>
                    </div>
                </div>
            </div>


        </div>

        <div class=" row justify-content-center align-items-center Height33 pais">

            <div class="col-lg-6 justify-content-center align-items-center Height100 " style="padding:2% 4% 2% 6%;">
                <div class=" row justify-content-center align-items-center Height100">
                    <p class="P_G _mx">MÉXICO</p>
                    <div class="pais_0 _mex_">
                        <p>Electrón 28, Fracc. Parque Industrial,</p>
                        <p> Naucalpan de Juárez, Estado de México, 53370.</p>
                        <p>Tel: (+5255) 5659 7959</p>
                        <p>Mail: programacion@efd.com.mx</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 justify-content-center align-items-center Height100 sedes_ mexico" style="padding: 0px;">

            </div>

        </div>

        <div class=" row justify-content-center align-items-center Height33 pais">

            <div class="col-lg-8 justify-content-center align-items-center Height100" style="padding:2% 2% 2% 25%;">
                <div class=" row justify-content-center align-items-center Height100">
                    <p class="P_G _col">COLOMBIA</p>
                    <div class="pais_0 _col_">
                            <p>Av. de las Américas 31-75</p>
                            <p>Barrio Cundinamarca, Bogotá, Colombia </p>
                            <p>Tel: (+0057) 1756 96 53</p>
                            <p>Mail: programacion@efdcolombia.com</p>
                        </div>
                </div>
            </div>
            <div class="col-lg-4 justify-content-center align-items-center Height100 sedes_ colombia" style="padding: 0px;">

            </div>

        </div>

    </div>

    <div  class="col-lg-7 justify-content-center align-items-center Height100 " style="padding:11% 0 26% 0;">

        <div class=" row justify-content-center align-items-center Height50 alemania pais">

            <div class="col-lg-2 justify-content-center align-items-center Height100 " style="padding: 0px;">
            </div>
            <div class="col-lg-10 justify-content-center align-items-center Height100" style="padding:2% 51% 2% 4%;" >
                <div class=" row justify-content-center align-items-center Height100">
                <p class="P_G _ale">ALEMANIA</p>
                    <div class="pais_0 _ale_">
                        <p>Mittlere Kanal Str. 31 </p>
                        <p>90429 Nürnberg</p>
                        <p>Tel: 0049 (0) 911 2533 1674 </p>
                        <p>Móvil: 0049 (0) 178 2550 600</p>
                        <p>Mail: xxxxxxxxx@efd-germany.de</p>
                    </div>
                </div>
            </div>

        </div>

        <div class=" row justify-content-center align-items-center Height50  pais">

            <div class="col-lg-2 justify-content-center align-items-center Height100 sedes_ españa" style="padding: 0px;">
            </div>
            <div class="col-lg-10  Height100" style="padding:2% 55% 2% 0%;">
                <div class=" row justify-content-center align-items-center Height100">
                    <p class="P_G _esp">ESPAÑA</p>
                    <div class="pais_0 _esp_">
                        <p>Av. de Lomas Boadilla del Monte, </p>
                        <p>Madrid, España CP 28669</p>
                        <p>Tel: (+34) 916 326 283</p>
                        <p>Mail: xxxxxxx@efdspain.es</p>
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
@endsection
