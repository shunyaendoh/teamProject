<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>



    <link rel="stylesheet" href="{{ asset('css/main.css') }}" >
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script defer src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    
</head>
<body>
    
    <header>
    
        <div>

        <nav class="navbar navbar-light navbar-expand bg-dark d-flex justify-content-between">
                <a class="navbar-brand" href="http://127.0.0.1:8000/">アイデア村
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true"
                            class="mr-2" viewBox="0 0 24 24" focusable="false">
                            <path
                                d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                            <circle cx="12" cy="13" r="4" /></svg> -->
                </a>


                <div id="menu" class="collapse">

                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="">ホームページ</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="">マイページ</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="">お問い合わせ</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="">ログアウト</a>
                        </li>

                    </ul>

                    

                </div>  
                
                
                
                <button class="navbar-toggler-right" type="button" data-toggle="collapse" data-target="#menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    
                    
            </nav>       

        </div>






    </header>

    <main class="py-4 container">
    @yield('content')
    </main>

    <!-- ここからフッター -->
    <footer class="text-center text-muted py-4">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Ideathon.com
            <!-- <a href="https://mdbootstrap.com/education/bootstrap/"> ◯◯◯</a> -->
        </div>

    </footer>
</body>
</html>


