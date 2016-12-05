<script>
    $(function () {
        var controller = new ScrollMagic.Controller();

        var wipeAnimation = new TimelineMax()

        @for($i=0; $i<count($pages); ++$i)
             .fromTo("section.panel.c{{ $i }}", 1, {y: "100%"}, {y: "0%", ease: Linear.easeNone})
        @endfor

            new ScrollMagic.Scene({
            triggerElement: "#pinContainer",
            triggerHook: "onLeave",
            duration: "300%"
        })
            .setPin("#pinContainer")
            .setTween(wipeAnimation)
            .addIndicators()
            .addTo(controller);
    });
</script>