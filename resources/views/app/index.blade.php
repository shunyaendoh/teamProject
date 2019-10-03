<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>アイデア村-Ideathon</title>
    {{-- jquery-ui.cssの呼び出し --}}
    <link rel="stylesheet" href="/css/jquery-ui.min.css" type="text/css">
    {{-- photopile.cssの呼び出し --}}
    <link rel="stylesheet" href="/css/photopile.css">
    {{-- index.cssの呼び出し --}}
    <link rel="stylesheet" href="/css/index.css">

</head>
<body>
    <div id="content">
        <div class="photopile_wrapper">
            <ul class="photopile">
                 <li class="ui-draggable first">
                    <a href="#"><img src="images/sample.png"" alt="idea"></a>
                </li>
                @for ($i = 0; $i <= 10; $i++)
                <li class="ui-draggable">
                    <a href="#"><img src="images/sample.png"" alt="idea"></a>
                </li>
                @endfor
                 <li class="ui-draggable last">
                    <a href="#"><img src="images/sample.png"" alt="idea"></a>
                </li>
            </ul>
        </div>
    {{-- jqueryの呼び出し --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    {{-- jquery-uiの呼び出し --}}
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    {{-- photopileの呼び出し --}}
    <script src="/js/photopile.js"></script>
    <script src="/js/app.js"></script>
    </div>
</body>
</html>