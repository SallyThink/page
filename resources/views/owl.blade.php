<link rel="stylesheet" type="text/css" href="{!! asset('css/owlcarousel/owl.carousel.css') !!}" />
<link rel="stylesheet" type="text/css" href="{!! asset('css/owlcarousel/owl.theme.css') !!}" />

<script type="text/javascript" src="{!! asset('js/owlcarousel/owl.carousel.js') !!}"></script>




<style>
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
</style>

<div id="owl-demo" class="owl-carousel owl-theme">

    <div class="item">TEST1</div>
    <div class="item">TEST2</div>
    <div class="item">TEST3</div>

</div>

<script>
    jQuery(function($)
    {
        $(document).ready(function() {

            $("#owl-demo").owlCarousel({

                navigation : true, // Show next and prev buttons
                slideSpeed : 300,
                paginationSpeed : 400,
                singleItem:true

                // "singleItem:true" is a shortcut for:
                // items : 1,
                // itemsDesktop : false,
                // itemsDesktopSmall : false,
                // itemsTablet: false,
                // itemsMobile : false

            });

        });
    })
</script>