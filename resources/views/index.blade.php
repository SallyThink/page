<!DOCTYPE html>
<html lang="en">

<head>

    <title>{{ isset($generalSetting[0]) ? $generalSetting[0]->headTitle : 'Page' }}</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</head>
<body>

    @if(isset($generalSetting[0]))
        @include($generalSetting[0]->plugin.'.'.$generalSetting[0]->plugin)
    @else
        @include('pagepilling.pagepilling')
    @endif

</body>
</html>
