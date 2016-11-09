
<style>

    .cssload1-wrap {
        width: 195px;
        height: 195px;
       /* margin: 97px auto;*/
        position: relative;
        perspective: 3900px;
        -o-perspective: 3900px;
        -ms-perspective: 3900px;
        -webkit-perspective: 3900px;
        -moz-perspective: 3900px;
        transform-style: preserve-3d;
        -o-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
    }

    .cssload1-circle {
        transform-style: preserve-3d;
        -o-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        box-sizing: border-box;
        -o-box-sizing: border-box;
        -ms-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        opacity: 0;
        width: 195px;
        height: 195px;
        border: 2px solid rgba(0,0,0,0.8);
        border-radius: 146px;
        position: absolute;
        top: 0;
        left: 0;
        animation: cssload1-spin 34.5s ease-in-out alternate infinite;
        -o-animation: cssload1-spin 34.5s ease-in-out alternate infinite;
        -ms-animation: cssload1-spin 34.5s ease-in-out alternate infinite;
        -webkit-animation: cssload1-spin 34.5s ease-in-out alternate infinite;
        -moz-animation: cssload1-spin 34.5s ease-in-out alternate infinite;
    }
    .cssload1-circle:nth-of-type(1) {
        animation-delay: 575ms;
        -o-animation-delay: 575ms;
        -ms-animation-delay: 575ms;
        -webkit-animation-delay: 575ms;
        -moz-animation-delay: 575ms;
    }
    .cssload1-circle:nth-of-type(2) {
        animation-delay: 1150ms;
        -o-animation-delay: 1150ms;
        -ms-animation-delay: 1150ms;
        -webkit-animation-delay: 1150ms;
        -moz-animation-delay: 1150ms;
    }
    .cssload1-circle:nth-of-type(3) {
        animation-delay: 1725ms;
        -o-animation-delay: 1725ms;
        -ms-animation-delay: 1725ms;
        -webkit-animation-delay: 1725ms;
        -moz-animation-delay: 1725ms;
    }
    .cssload1-circle:nth-of-type(4) {
        animation-delay: 2300ms;
        -o-animation-delay: 2300ms;
        -ms-animation-delay: 2300ms;
        -webkit-animation-delay: 2300ms;
        -moz-animation-delay: 2300ms;
    }
    .cssload1-circle:nth-of-type(5) {
        animation-delay: 2875ms;
        -o-animation-delay: 2875ms;
        -ms-animation-delay: 2875ms;
        -webkit-animation-delay: 2875ms;
        -moz-animation-delay: 2875ms;
    }



    @keyframes cssload1-spin {
        0% {
            transform: rotateY(0deg) rotateX(0deg);
            opacity: 1;
        }
        25% {
            transform: rotateY(180deg) rotateX(360deg);
        }
        50% {
            transform: rotateY(540deg) rotateX(540deg);
        }
        75% {
            transform: rotateY(720deg) rotateX(900deg);
        }
        100% {
            transform: rotateY(900deg) rotateX(1080deg);
            opacity: 1;
        }
    }

    @-o-keyframes cssload1-spin {
        0% {
            -o-transform: rotateY(0deg) rotateX(0deg);
            opacity: 1;
        }
        25% {
            -o-transform: rotateY(180deg) rotateX(360deg);
        }
        50% {
            -o-transform: rotateY(540deg) rotateX(540deg);
        }
        75% {
            -o-transform: rotateY(720deg) rotateX(900deg);
        }
        100% {
            -o-transform: rotateY(900deg) rotateX(1080deg);
            opacity: 1;
        }
    }

    @-ms-keyframes cssload1-spin {
    0% {
        -ms-transform: rotateY(0deg) rotateX(0deg);
        opacity: 1;
    }
    25% {
        -ms-transform: rotateY(180deg) rotateX(360deg);
    }
    50% {
        -ms-transform: rotateY(540deg) rotateX(540deg);
    }
    75% {
        -ms-transform: rotateY(720deg) rotateX(900deg);
    }
    100% {
        -ms-transform: rotateY(900deg) rotateX(1080deg);
        opacity: 1;
    }
    }

    @-webkit-keyframes cssload1-spin {
        0% {
            -webkit-transform: rotateY(0deg) rotateX(0deg);
            opacity: 1;
        }
        25% {
            -webkit-transform: rotateY(180deg) rotateX(360deg);
        }
        50% {
            -webkit-transform: rotateY(540deg) rotateX(540deg);
        }
        75% {
            -webkit-transform: rotateY(720deg) rotateX(900deg);
        }
        100% {
            -webkit-transform: rotateY(900deg) rotateX(1080deg);
            opacity: 1;
        }
    }

    @-moz-keyframes cssload1-spin {
        0% {
            -moz-transform: rotateY(0deg) rotateX(0deg);
            opacity: 1;
        }
        25% {
            -moz-transform: rotateY(180deg) rotateX(360deg);
        }
        50% {
            -moz-transform: rotateY(540deg) rotateX(540deg);
        }
        75% {
            -moz-transform: rotateY(720deg) rotateX(900deg);
        }
        100% {
            -moz-transform: rotateY(900deg) rotateX(1080deg);
            opacity: 1;
        }
    }

</style>

<div class="cssload1-wrap" style="position:fixed;top:41%;left:41%">
    <div class="cssload1-circle"></div>
    <div class="cssload1-circle"></div>
    <div class="cssload1-circle"></div>
    <div class="cssload1-circle"></div>
    <div class="cssload1-circle"></div>
</div>