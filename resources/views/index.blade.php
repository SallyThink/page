<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/jquery.pagepiling.css') !!}" />
    <link rel="stylesheet" type="text/css" href="{!! asset('css/examples.css') !!}" />
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}" />

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="{!! asset('js/jquery.pagepiling.min.js') !!}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            /*
             * Plugin intialization
             */
            $('#pagepiling').pagepiling({
                //direction: 'horizontal',
                menu: '#menu',
                anchors: [
                    @foreach($pages as $v)
                            '{{ $v->page_name }}',
                    @endforeach
                ],

                sectionsColor: [
                    @foreach($pages as $v)
                            '{{ $v->background }}',
                    @endforeach
                ],
                navigation: {
                    'position': 'right',
                    'tooltips': [
                        @foreach($pages as $v)
                                '{{ $v->page_name }}',
                        @endforeach
                    ],
                },
                afterRender: function(){
                    $('#pp-nav').addClass('custom');
                },
                afterLoad: function(anchorLink, index){
                    if(index>1){
                        $('#pp-nav').removeClass('custom');
                    }else{
                        $('#pp-nav').addClass('custom');
                    }
                }
            });
        });
    </script>




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
                            <div class="sectionElement col-lg-{{ $cont[$j]->width }} col-lg-push-{{ $cont[$j]->positionX }}"  style="top:{{ $cont[$j]->positionY }}%">
                                {{ $cont[$j]->content }}
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
