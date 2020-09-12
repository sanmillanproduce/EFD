@extends('layouts.app')

@section('content')
<div id="personal" class="container" style="padding: 0%; z-index: 98;">
    <div class="row justify-content-center align-items-center Height100">
        <div class="col-12 Height4 Filter"></div>


        @foreach ($brands as $marca)



        @endforeach



    </div>
</div>

@endsection
@section('scripts')
    <script>
        $(document).ready(function(){
        $("#heade").addClass("backgroud");

    });
    </script>
@endsection
