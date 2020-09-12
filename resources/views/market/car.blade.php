@extends('layouts.app')

@section('content')

    <div id="" class="row justify-content-center align-items-center Height100" style="    padding-top: 6%;">

        <div  class="col-12 justify-content-center align-items-center Height100" style="">

            <div class="row justify-content-center align-items-center Height10">
                <h2 class="Product_Sho">Hola</h2>
            </div>

            @if (count($cart))

                <div id="" class="row justify-content-center align-items-center Height85" style="overflow: auto;" >

                    <table class="responsive ">
                        <table class="table T_1" style="height: 90%;">
                            <thead class="table_title">
                                <tr>
                                    <th>IMAGEN</th>
                                    <th>PRODUCTO</th>
                                    <th>DIAS</th>
                                    <th>CANTIDAD</th>
                                    <th>ELIMINAR</th>
                                </tr>
                            </thead>

                            <tbody class="CARRO_">
                                @foreach ($cart as $item)
                                    <tr>
                                        <td style="text-align: center;"><img style="width: 25%;" src="{{ $item->file }}" alt=""> </td>
                                        <td style="padding: 2% 0 0 0;">{{ $item->model }}  <br>

                                        </td>
                                        <td style="padding: 2% 0 0 0;">

                                                <input class="" type="number" value="1" min="0" max="1000" step="1" class="numb" />

                                        </td>
                                        <td style="padding: 2% 0 0 0;">

                                                <input class="" type="number" value="1" min="0" max="1000" step="1" class="numb" />

                                        </td>
                                        <td class="Dele">
                                            <a href="{{ route('cart-delete', $item->id) }}">
                                                <span><i class="far fa-trash-alt" style="font-size: 1.1rem;"></i></span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </table>

                </div>

            @else
                <div class="row justify-content-center align-items-center Height85">
                    <h2 class="Product_Sho" >No hay productos agregados. </h2>
                </div>
            @endif


            <div id="" class="row justify-content-center align-items-center " style=" height: 7%; background: #fff;">
                <div class="col-lg-2 justify-content-center align-items-center Height100">
                    <div id="" class="row justify-content-center align-items-center Height100" style="background: ;">
                        <p class="T_C">Términos y Condiciones</p>
                    </div>
                </div>
                <div class="col-lg-10 justify-content-center align-items-center Height100">
                    <div id="" class="row justify-content-center align-items-center Height100" style="background: ;">

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
