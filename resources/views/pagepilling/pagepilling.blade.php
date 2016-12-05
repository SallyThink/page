@include('pagepilling.include')

@if(isset($generalSetting[0]))
    <style>
        #menu li
        {
            border : {{ $generalSetting[0]->border }};
            border-radius : {{ $generalSetting[0]->border_radius }};
            background-color : {{ $generalSetting[0]->background_color }};
        }
        #menu li:hover
        {
            background-color : {{ $generalSetting[0]->hover_background_color }};
        }
        #menu .active
        {
            background-color: {{ $generalSetting[0]->active_background_color }}!important;
        }
        #menu a
        {
            color : {{ $generalSetting[0]->color }}!important;
        }
        #menu a:hover
        {
            color : {{ $generalSetting[0]->hover_color }}!important;
        }
    </style>
@endif

@if(isset($pages[0]))
    {{--fonts--}}
    @foreach($pages as $v)
        <link href={{ $v->font_url }} rel="stylesheet">
        <style>
            #section{{$v->id}}
             {
                font-family: {!! $v->font_name !!};
                background-image: url( {{ $v->background_image }} );
                background-repeat: no-repeat;
                background-size: 100%;
                background-color: {{ $v->background_color }};
            }
        </style>
    @endforeach
@endif

@if(isset($generalSetting[0]) && isset($pages[0]))
    @include('pagepilling.script',['generalSetting' => $generalSetting, 'pages' => $pages])
@endif

@if(isset($lazyload[0]))

    <div id="lazyload" style="background-color: {{ $lazyload[0]->background_color }};
            background-image: {{ $lazyload[0]->background_image }};">
        @include("lazyload.lazyload".$lazyload[0]->lazyload_id)
    </div>

@endif


<div id='main'>
    <ul id="menu" class="col-lg-push-6">
        @if(isset($pages[0]))
            @foreach($pages as $v)

                <li data-menuanchor="{{ $v->page_name }}"><a href="#{{ $v->page_name }}">{{ $v->page_name }}</a></li>

            @endforeach
        @endif
    </ul>

    <div id="pagepiling">

        @if(isset($ribbon[0]))
            @include('ribbon',['ribbon' => $ribbon])
        @endif

        @if(isset($pages[0]) && isset($cont[0]))

                @for($i=0;$i<count($pages);++$i)

                    <div class="section" id="section{{ $pages[$i]->id }}">
                        {{ $pages[$i]->menu }}
                        @for($j=0;$j<count($cont);++$j)

                            @if($pages[$i]->id == $cont[$j]->mains_id)

                                <div class="container-fluid" id="{{ $cont[$j]->id }}" >
                                    <div class="row">
                                        <div class="sectionElement col-lg-{{ $cont[$j]->width }} col-lg-push-{{ $cont[$j]->positionX }}"
                                             style="top:{{ $cont[$j]->positionY }}%; color: {{ $cont[$j]->color }};
                                                     background-color: {{ $cont[$j]->background_color }}; background-image: url( {{ $cont[$j]->background_image }} );
                                                     border: {{ $cont[$j]->border }}; border-radius: {{ $cont[$j]->border_radius }}">

                                            {!! $cont[$j]->content !!}
                                            @if(isset($cont[$j]->form))

                                                @include('form')

                                            @endif
                                        </div>
                                    </div>
                                </div>

                            @endif

                        @endfor
                    </div>
                @endfor


            @endif

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


{{--map--}}

@if(isset($maps[0]))
    @include('googlemaps', ['maps' => $maps])
@endif