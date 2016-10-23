<script type="text/javascript">

    // get direction
    @if($generalSetting[0]->direction == 'random')
        <? $random = [0=>'vertical',1=>'horizontal'];
            $direction = $random[mt_rand(0,1)]; ?>
    @else
        <? $direction = $generalSetting[0]->direction ?>
    @endif


    $(document).ready(function() {
        /*
         * Plugin intialization
         */
        $('#pagepiling').pagepiling({

            menu: '#menu',
            direction: '{{ $direction }}',
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
            navigation:
                @if($generalSetting[0]->navigation)
            {
                'position': '{{ $generalSetting[0]->navigationPosition }}',
                'tooltips': [
                    @foreach($pages as $v)
                            '{{ $v->page_name }}',
                    @endforeach
                ],
            },
            @else
                    false,
            @endif
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