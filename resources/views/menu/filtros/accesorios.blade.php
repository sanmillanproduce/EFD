@extends('layouts.app')
<!--Generadores -->
@section('content')
<div id="filtros" class="container justify-content-center align-items-center Height100" style="padding: 0%; z-index: 98;">
    <div class="row justify-content-center align-items-center Height100" style="padding: 3% 0 0 0">
        <div class="col-12 Height4 Filter" style="padding: 0%; margin-left:8%" >
            <h4 class="Sub_Cate">&nbsp; filtros &nbsp; > &nbsp; ACCESORIOS &nbsp;| &nbsp;</h4>
        </div>

        <section id="" class="col-lg-12  justify-content-center align-items-center Height95_2" style="padding: 0; margin-top: 5%;">
            <div class="row justify-content-center align-items-center Height20">
                <h4 style="margin:0%;">ACCESORIOS</h4>
            </div>
            <div class="row justify-content-center align-items-center Height80">
            </div>
        </section>



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
