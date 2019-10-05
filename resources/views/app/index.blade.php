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
    {{-- app.cssの呼び出し --}}
    <link rel="stylesheet" href="css/app.css">

</head>
<body>
    <div id="content">
        <div class="photopile_wrapper">
            <ul class="photopile">
                @for ($i = 0; $i <= 10; $i++)
                <li>
                    <a href="#" class="bg-success float"><img src="images/fuma.jpg"" alt="idea"></a>
                </li>
                @endfor
                @for ($i = 0; $i <= 10; $i++)
                <li>
                    <a href="#" class="bg-primary float"><img src="images/fuma.jpg"" alt="idea"></a>
                </li>
                @endfor
                @for ($i = 0; $i <= 10; $i++)
                <li>
                    <a href="#" class="bg-danger float"><img src="images/fuma.jpg"" alt="idea"></a>
                </li>
                @endfor
                @for ($i = 0; $i <= 10; $i++)
                <li>
                    <a href="#" class="bg-warning float"><img src="images/fuma.jpg" alt="idea"></a>
                </li>
                @endfor
  
            </ul>
        </div>
    {{-- jqueryの呼び出し --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/js/app.js"></script>
    {{-- jquery-uiの呼び出し --}}
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    {{-- photopileの呼び出し --}}
    <script src="/js/photopile.js"></script>
    </div>
    {{-- jqfloat.jsの呼び出し --}}
    <script src="/js/jqfloat.js"></script>
    {{-- bootstrap.jsの呼び出し --}}
    <script src=""></script>
</body>
</html>