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

    $('#pages #background').change(function()
    {
        if($(this).val() == 'color')
        {
            $('#pages #background_color').parent().show();
            $('[for=background]:eq(1)').parent().hide();
        }
        else
        {
            $('#pages #background_color').parent().hide();
            $('[for=background]:eq(1)').parent().show();
        }
    });

    $('#pages #background_color').parent().hide();
    $('[for=background]:eq(1)').parent().hide();
})