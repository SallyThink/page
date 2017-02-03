
    <ul id="slide-out" class="side-nav">

        <li>
            <div class="card teal darken-2">
                <div class="card-content white-text">
                    <span class="card-title">Admin</span>
                    <span class="right">
                       <i class="material-icons" id="closeBar">replay</i>
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
        @foreach(\App\Classes\Menu::getItems() as $item)
            <li>
                <a class="waves-effect" href={{ route('admin.all', [str_replace(' ', '', $item)]) }}>
                    {{ ucfirst($item) }}
                </a>
            </li>
        @endforeach

    </ul>

    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

    <script>
        jQuery(function($)
        {
            // sideBar init
            $(".button-collapse").sideNav(
                {
                    draggable: false
                }
            );

            //open
            $('a[data-activates="slide-out"]').on('click', function(){
                $('#sidenav-overlay').css({'display':'none'});
            });
            //close
            $('#closeBar').click(function () {
                $('.button-collapse').sideNav('hide');
            })

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
