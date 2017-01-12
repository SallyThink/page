
    <ul id="slide-out" class="side-nav">

        <li>
            <div class="card teal darken-2">
                <div class="card-content white-text">
                    <span class="card-title">Admin</span>
                    <span class="right">
                       <i class="material-icons">replay</i>
                    </span>
                </div>
                <div class="card-action">
                    <label>Open this after download page</label>
                    {{ Form::open(['route' => 'admin.sideBar']) }}

                    <div class="switch">
                        <label>
                            Off
                            <input type="checkbox" name="openAfterDownload" {{ session()->get('sideBar')['openAfterDownload'] ? 'checked' : '' }}>
                            <span class="lever"></span>
                            On
                        </label>
                    </div>

                    {{ Form::close() }}
                </div>
            </div>
        </li>
        <li><a class="subheader">Settings</a></li>
        <li><div class="divider"></div></li>
        <li><a class="waves-effect" href={{ route('admin.allPages') }}>Pages</a></li>
        <li><a class="waves-effect" href={{ route('admin.allContent') }}>Content</a></li>

    </ul>

    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
{{session()->get('sideBar')['openAfterDownload']}}
    <script>
        jQuery(function($)
        {
            // sideBar init
            $(".button-collapse").sideNav(
                {
                    draggable: false // Choose whether you can drag to open on touch screens
                }
            );

            $('a[data-activates="slide-out"]').on('click', function(){
                $('#sidenav-overlay').css({'display':'none'});
            });


            //ajax init
            $('.side-nav form input').click(function () {
                Global.Ajax.Send($(this).parents('form'));
            });

            //sidebar input
            @if(session()->get('sideBar')['openAfterDownload'])
                $('.button-collapse').sideNav('show');
            @endif
        })
    </script>
