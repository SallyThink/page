

<div class="forkit-curtain" style='background-color:{{ $ribbon[0]->background_color }};
        background-image: url({{ $ribbon[0]->background_image }});z-index:99'>
    {!! $ribbon[0]->main_text !!}

    <div class="close-button" style="z-index: 99">X</div>
</div>


<a class="forkit" style='z-index:99' data-text="{{ $ribbon[0]->first_text }}" data-text-detached="{{ $ribbon[0]->second_text }}"
   href="https://github.com/hakimel/forkit.js"><img style="position: absolute; top: 0; right: 0; border: 0;"
   src="https://github-camo.global.ssl.fastly.net/365986a132ccd6a44c23a9169022c0b5c890c387/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67"
   alt="Fork me on GitHub"></a>

<link rel="stylesheet" type="text/css" href="{!! asset('css/forkit.css') !!}" />
<script type="text/javascript" src="{!! asset('js/forkit.js') !!}"></script>