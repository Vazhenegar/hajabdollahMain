{{--<!-- Start Slider Home -->--}}

<style>

    .slideshow {
        position: absolute;
        width: 100%;
        height: 100vh;
        overflow: hidden;
    }

    .slideshow-image {
        position: absolute;
        width: 100%;
        height: 100%;
        background: no-repeat 50% 50%;
        background-size: cover;
        -webkit-animation-name: kenburns;
        animation-name: kenburns;
        -webkit-animation-timing-function: linear;
        animation-timing-function: linear;
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
        -webkit-animation-duration: 25s;
        animation-duration: 25s;
        opacity: 1;
        -webkit-transform: scale(1.2);
        transform: scale(1.2);
    }

    .slideshow-image:nth-child(1) {
        -webkit-animation-name: kenburns-1;
        animation-name: kenburns-1;
        z-index: 3;
    }

    .slideshow-image:nth-child(2) {
        -webkit-animation-name: kenburns-2;
        animation-name: kenburns-2;
        z-index: 2;
    }

    .slideshow-image:nth-child(3) {
        -webkit-animation-name: kenburns-3;
        animation-name: kenburns-3;
        z-index: 1;
    }

    .slideshow-image:nth-child(4) {
        -webkit-animation-name: kenburns-4;
        animation-name: kenburns-4;
        z-index: 0;
    }

    @-webkit-keyframes kenburns-1 {
        0% {
            opacity: 1;
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }
        1.5625% {
            opacity: 1;
        }
        23.4375% {
            opacity: 1;
        }
        26.5625% {
            opacity: 0;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
        100% {
            opacity: 0;
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }
        98.4375% {
            opacity: 0;
            -webkit-transform: scale(1.21176);
            transform: scale(1.21176);
        }
        100% {
            opacity: 1;
        }
    }

    @keyframes kenburns-1 {
        0% {
            opacity: 1;
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }
        1.5625% {
            opacity: 1;
        }
        23.4375% {
            opacity: 1;
        }
        26.5625% {
            opacity: 0;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
        100% {
            opacity: 0;
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }
        98.4375% {
            opacity: 0;
            -webkit-transform: scale(1.21176);
            transform: scale(1.21176);
        }
        100% {
            opacity: 1;
        }
    }

    @-webkit-keyframes kenburns-2 {
        23.4375% {
            opacity: 1;
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }
        26.5625% {
            opacity: 1;
        }
        48.4375% {
            opacity: 1;
        }
        51.5625% {
            opacity: 0;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
        100% {
            opacity: 0;
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }
    }

    @keyframes kenburns-2 {
        23.4375% {
            opacity: 1;
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }
        26.5625% {
            opacity: 1;
        }
        48.4375% {
            opacity: 1;
        }
        51.5625% {
            opacity: 0;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
        100% {
            opacity: 0;
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }
    }

    @-webkit-keyframes kenburns-3 {
        48.4375% {
            opacity: 1;
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }
        51.5625% {
            opacity: 1;
        }
        73.4375% {
            opacity: 1;
        }
        76.5625% {
            opacity: 0;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
        100% {
            opacity: 0;
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }
    }

    @keyframes kenburns-3 {
        48.4375% {
            opacity: 1;
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }
        51.5625% {
            opacity: 1;
        }
        73.4375% {
            opacity: 1;
        }
        76.5625% {
            opacity: 0;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
        100% {
            opacity: 0;
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }
    }

    @-webkit-keyframes kenburns-4 {
        73.4375% {
            opacity: 1;
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }
        76.5625% {
            opacity: 1;
        }
        98.4375% {
            opacity: 1;
        }
        100% {
            opacity: 0;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    @keyframes kenburns-4 {
        73.4375% {
            opacity: 1;
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }
        76.5625% {
            opacity: 1;
        }
        98.4375% {
            opacity: 1;
        }
        100% {
            opacity: 0;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }
</style>

<section class="bg_secondry" data-scroll-index="0">
    <canvas id="particles-js"></canvas>
    <a class="scroll-down" title="Scroll Down" href="#" data-scroll-nav="1"><i class="fa fa-circle" aria-hidden="true"></i></a>
    <div class="slideshow">
        <div class="slideshow-image" style="background-image: url({{asset('storage/Slider/s1.jpg')}})"></div>
        <div class="slideshow-image" style="background-image: url({{asset('storage/Slider/s2.jpg')}})"></div>
        <div class="slideshow-image" style="background-image: url({{asset('storage/Slider/s3.jpg')}})"></div>
        <div class="slideshow-image" style="background-image: url({{asset('storage/Slider/s2.jpg')}})"></div>
    </div>
</section>
{{--<!--// End Slider Home-->--}}
