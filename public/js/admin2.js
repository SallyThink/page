var Global =
    {
        Css:
            {
                editCheckbox: function ()
                {
                    $('input[type="submit"], button').click(function () {

                        var checkbox = $(this).parents('form').find('input[type=checkbox]');
                        checkbox.val(Number(checkbox.prop('checked')));
                    })
                }
            },
        Farbtastic:
            {
                init: function ()
                {
                    $('form input[name=background_color]').after('<div id="farbtasticPicker"><div class="close">close</div><br>'+
                        '<input type="text" id="farbtasticInput" class="form-control" value="#123456">'+
                        '<br><div id="picker"></div>'+
                        '<button class = "btn btn-success">OK</button></div>');

                    $('#picker').farbtastic('#farbtasticInput');

                    $('input[name=background_color]').click(function()
                    {
                        $('#farbtasticPicker').fadeIn('fast');
                    })

                    $('#farbtasticPicker button').on('click', function(event)
                    {
                        event.preventDefault();
                        var data = $('#farbtasticInput').val();

                        $('form input[name=background_color]').val(data);
                        $('#farbtasticPicker').fadeOut('fast');
                    })

                    $('#farbtasticPicker .close').click(function()
                    {
                        $('#farbtasticPicker').hide();
                    })
                }
            },
        Form:
            {
                imageInput:  function ()
                {
                   $('form input[name=background_image]').change(function()
                   {
                       $('#imagePreview img').attr('src', window.URL.createObjectURL(this.files[0]));
                       $('#imagePreview').fadeIn('slow');
                   });
                },

                colorOrImage: function()
                {
                    $('form').on('change', 'select[name=background]', function()
                    {
                        var data = $(this).val();

                        $('form input[name=background_color], form input[name=background_image]').parents('.input-field').hide();
                        $('form input[name=background_' + data + ']').parents('.input-field').show();
                    })
                }
            }
    }


