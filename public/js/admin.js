jQuery(function($)
{
    $(document).ready(function() {
        $('.form-control:last').val("#123456");
        $('.form-group:last').append('<div id="picker"></div>');
        $('#picker').farbtastic('#color');
    });
})