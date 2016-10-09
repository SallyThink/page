jQuery(function($)
{

// color or image on main page
    if(window.location.pathname == '/admin/mains')
    {
        $('.thumbnail').each(function(index,element)
        {
            if($(this).attr('src').substr(0,4) != 'http')
            {
                var color = $(this).attr('src');
                $(this).after('<div style="width:80px;height:80px;background-color:'+color+' "></div>');
                $(this).remove();
            }
        })
    }



//color picker
    $(document).ready(function() {
        if(window.location.pathname == '/admin/mains')
        {
            $('.form-control:last').val("#123456");
            $('.form-group:last').append('<div id="picker"></div>');
            $('#picker').farbtastic('.form-group:last input');
        }
    });
/*
    $('.form-control').eq(5).hide();
    $('.form-control').eq(6).hide();
    $('select').on('change', function ()
    {
        $('[name=image]').parent().hide();
        $('#color').parent().hide();
        var data = $(this).val();
        $('[name='+data+']').parent().show();
    })*/

})