@include('scrollmagic.include')

    <style>
        @foreach($pages as $k=>$v)

            .c{{ $k }}
                 {
                font-family: {!! $v->font_name !!};
                background-image: url( {{ $v->background_image }} );
                background-repeat: no-repeat;
                background-size: 100%;
                background-color: {{ $v->background_color }};
            }

        @endforeach
    </style>

<style type="text/css">
    #pinContainer {
        width: 100%;
        height: 100%;
        overflow: hidden;
    }
    .panel {
        height: 100%;
        width: 100%;
        position: absolute;
    }
</style>

@if(isset($lazyload[0]))

    <div id="lazyload" style="background-color: {{ $lazyload[0]->background_color }};
            background-image: {{ $lazyload[0]->background_image }};">

        @include("lazyload.lazyload".$lazyload[0]->lazyload_id)
    </div>
@endif

@include('ribbon',['ribbon' => $ribbon])


<div id="content-wrapper">
    <div id="example-wrapper">
        <div class="scrollContent">
            <div id="pinContainer">

            @for($i=0;$i<count($pages);++$i)
                <section class="panel c{{ $i }}" id="c{{ $i }}">

                    @for($j=0;$j<count($cont);++$j)
                        @if($pages[$i]->id == $cont[$j]->mains_id)

                            <div class="container-fluid" id="{{ $cont[$j]->id }}" >
                                <div class="row">
                                    <div class="sectionElement col-lg-{{ $cont[$j]->width }} col-lg-push-{{ $cont[$j]->positionX }}"
                                         style="top:{{ $cont[$j]->positionY }}%; color: {{ $cont[$j]->color }};
                                                 background-color: {{ $cont[$j]->background_color }}; background-image: url( {{ $cont[$j]->background_image }} );
                                                 border: {{ $cont[$j]->border }}; border-radius: {{ $cont[$j]->border_radius }}; position:absolute">

                                        {!! $cont[$j]->content !!}
                                        @if(isset($cont[$j]->form))

                                            @include('form')

                                        @endif
                                    </div>
                                </div>
                            </div>

                            @endif
                    @endfor

                </section>
            @endfor

            </div>

                @include('scrollmagic.script')

        </div>
    </div>
</div>

@if(isset($lazyload[0]))
    <script>
        $(document).ready(function() {
            setTimeout(function()
            {
                $('#lazyload').fadeOut(1500);
                $('#main').fadeIn(1000);
            }, {{ $lazyload[0]->timeout }} )
        })
    </script>
@endif


@if($maps)
    @include('googlemaps', ['maps' => $maps])
@endif