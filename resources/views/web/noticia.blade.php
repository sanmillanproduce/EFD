@extends('layouts.app')

@section('content')

    <div id="" class="js-navDots row justify-content-center align-items-center Height100" style="padding: 4% 0 0 0;">

        <div  class="col-9 justify-content-center align-items-center Noticia_show_2  Height100" style="padding: 0;">
            <div id="" class="row justify-content-center align-items-center Height100" style="background: ;">
                <div class="Noticias_show" >
                    @if ( $post->file )
                        <img class="vidd" src="{{ $post->file }}"/>
                    @endif
                </div>
                <div class="col-lg-8 Title_Show" style="padding-left: 10%;">
                    <h1 style="font-size: 1.3rem;">{{ $post->name }}</h1>
                </div>
                <div class="col-lg-4 " style="padding-right: 10%;">
                    <div class="row justify-content-center  Height100">

                    </div>
                </div>
                <div class="Body_Show">
                    <p>{{ $post->body }}</p>
                </div>
            </div>
        </div>

        <div  class="col-3 justify-content-center align-items-center Height100" style="padding: 0; overflow: hidden;">
            <div id="" class="row justify-content-center align-items-center Height100" style="overflow: auto; margin: 30px;">
                @foreach ($small as $small_1)

                    <div class="Lat_Not">
                        <div class="Height100">
                            <a href="{{ route('noticia', $small_1->name)}}">
                                <div class="Height80">
                                    <img class="vidd" src="{{ $small_1->file }}"/>
                                </div>
                                <div class="Height20 Title_Peq_Show">
                                    <h1 style="font-size: 0.8rem;">{{ $small_1->name }}</h1>
                                </div>
                            </a>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>

    </div>

@endsection
