@extends('admin.layouts.layout')

@section('container')

    <?php
            $a = ['red darken-1', 'blue darken-1', 'green darken-1', 'blue darken-3', 'lime darken-1', 'lime darken-3', 'light-green darken-1',
            'green accent-3'];
    ?>

    <div class="carousel">
        <a class="carousel-item" href="{{ route('admin.all', ['page']) }}">
            <div class="{{ $a[mt_rand(0,7)] }} indexCarousel center-align  white-text">
                Pages
            </div>
        </a>
        <a class="carousel-item" href="{{ route('admin.all', ['page']) }}">
            <div class="{{ $a[mt_rand(0,7)] }} indexCarousel center-align  white-text">
                Pages
            </div>
        </a>

    </div>

    <script>
        jQuery(function($)
        {
            $(document).ready(function(){
                $('.carousel').carousel({
                    padding: 100,
                    dist: -60,
                });


            });
        })
    </script>
@endsection