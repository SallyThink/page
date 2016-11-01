<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $generalSetting[0]->headTitle }}</title>

    <link rel="stylesheet" type="text/css" href="{!! asset('css/jquery.pagepiling.css') !!}" />
    <link rel="stylesheet" type="text/css" href="{!! asset('css/examples.css') !!}" />
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}" />
    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="{!! asset('js/jquery.pagepiling.min.js') !!}"></script>

    {{--fonts--}}
    @foreach($pages as $v)
         <link href={{ $v->font_url }} rel="stylesheet">
        <style>
            #section{{$v->id}}
             {
                 font-family: {{ $v->font_name }};
                 background-image: url( {{ $v->background_image }} );
                 background-repeat: no-repeat;
                 background-size: 100%;
                 background-color: {{ $v->background_color }};
             }
        </style>
    @endforeach

    @include('script',['generalSetting' => $generalSetting, 'pages' => $pages])

<body>
<ul id="menu">
    @foreach($pages as $v)

        <li data-menuanchor="{{ $v->page_name }}"><a href="#{{ $v->page_name }}">{{ $v->page_name }}</a></li>

    @endforeach
</ul>

<div id="pagepiling">

    @for($i=0;$i<count($pages);++$i)

        <div class="section" id="section{{ $pages[$i]->id }}">
            {{ $pages[$i]->menu }}
            @for($j=0;$j<count($cont);++$j)

                @if($pages[$i]->id == $cont[$j]->mains_id)

                    <div class="container-fluid" >
                        <div class="row">
                            <div class="sectionElement col-lg-{{ $cont[$j]->width }} col-lg-push-{{ $cont[$j]->positionX }}"
                                 style="top:{{ $cont[$j]->positionY }}%;color: {{ $cont[$j]->color }};
                                         background-color: {{ $cont[$j]->background_color }}; border: {{ $cont[$j]->border }};
                                         border-radius: {{ $cont[$j]->border_radius }}">
                                {{ $cont[$j]->content }}
                                @if(isset($cont[$j]->form))
                                    <form method = "post" action = "/form">
                                        @foreach($cont[$j]->form as $v)
                                            <div class="form-group">
                                            <input class="form-control" type = {{ $v['type'] }} name = {{ $v['name'] }}
                                                   placeholder = {{ $v['placeholder'] }}
                                            value = {{ $v['value'] or '' }}>
                                            </div>
                                        @endforeach
                                        <input type = 'hidden' name = '_content_id' value = {{ $cont[$j]->id }}>
                                            {{ csrf_field() }}
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>

                @endif

            @endfor
        </div>
    @endfor




</div>

</body>
</html>
