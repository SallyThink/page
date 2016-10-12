<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/jquery.pagepiling.css') !!}" />
    <link rel="stylesheet" type="text/css" href="{!! asset('css/examples.css') !!}" />
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
agasgasg
    <script type="text/javascript" src="{!! asset('js/jquery.pagepiling.min.js') !!}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            /*
             * Plugin intialization
             */
            $('#pagepiling').pagepiling({
                //direction: 'horizontal',
                menu: '#menu',
                anchors: ['page1', 'page2', 'page3', 'page4'],
                sectionsColor: ['white', '#ee005a', '#2C3E50', '#39C'],
                navigation: {
                    'position': 'right',
                    'tooltips': ['Page 1', 'Page 2', 'Page 3', 'Pgae 4']
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
    <li data-menuanchor="page1" class="active"><a href="#page1">Page 1</a></li>
    <li data-menuanchor="page2"><a href="#page2">Page 2</a></li>
    <li data-menuanchor="page3"><a href="#page3">Page 3</a></li>
</ul>


<div id="pagepiling">

    @for($i=0;$i<count($pages);++$i)

        <div class="section" id="section1">
            {{ $pages[$i]->menu }}
        @for($j=0;$j<count($cont);++$j)

            @if($pages[$i]->id == $cont[$j]->mains_id)

                <div class="container-fluid" >
                    <div class="row">
                        <div class="col-lg-3 col-lg-push-{{ $cont[$j]->positionX }}"  style="position:absolute;top:{{ $cont[$j]->positionY }}%">
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
