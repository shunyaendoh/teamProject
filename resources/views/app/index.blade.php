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
                    <a href="#" class="bg-success" data-toggle="modal" data-target="#exampleModalCenter"><img src="images/fuma.jpg"" alt="idea"></a>

                     <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              ...
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
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