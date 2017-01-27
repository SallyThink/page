<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <meta charset="utf-8">

    @include('admin.layouts.include')

</head>
<body class="blue-grey lighten-4">


        <div class="row">
            <div class="col s12 m12 l12">
                @include('admin.layouts.navigation')
            </div>
        </div>

        <div class="row">
            <div class="col l11 s11 m11 {{ session()->get('sideBar')['openAfterDownload'] ? 'push-l1 push-m3 push-s5' : '' }} blue-grey lighten-4">
                @yield('container')
            </div>
        </div>

</body>
</html>