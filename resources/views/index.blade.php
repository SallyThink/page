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

    @include('script',['generalSetting' => $generalSetting, 'pages' => $pages])

</head>
<body>
<ul id="menu">
    @foreach($pages as $v)

        <li data-menuanchor="{{ $v->page_name }}"><a href="#{{ $v->page_name }}">{{ $v->page_name }}</a></li>

    @endforeach
</ul>


<div id="pagepiling">

    @for($i=0;$i<count($pages);++$i)

        <div class="section" id="section1">
            {{ $pages[$i]->menu }}
            @for($j=0;$j<count($cont);++$j)

                @if($pages[$i]->id == $cont[$j]->mains_id)

                    <div class="container-fluid" >
                        <div class="row">
                            <div class="sectionElement col-lg-{{ $cont[$j]->width }} col-lg-push-{{ $cont[$j]->positionX }}"  style="top:{{ $cont[$j]->positionY }}%;color: {{ $cont[$j]->color }}; background-color: {{ $cont[$j]->background }}">
                                {{ $cont[$j]->content }}
                                @if(isset($cont[$j]->form))
                                    <form method="post">
                                        @foreach($cont[$j]->form as $v)
                                            <input type = {{ $v['type'] }} name = {{ $v['name'] }}
                                                   placeholder = {{ $v['placeholder'] }}>
                                        @endforeach
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
