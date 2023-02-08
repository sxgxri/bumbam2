<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" type="image/x-icon" href="images/ico.ico">
    <script src="js/scrollUp.js"></script>
    <title>GAMEJUICE | Новости</title>
</head>
<body>
    <header>
                                <a name="up"></a>  <!-- ЯКОРЬ -->
        <div class="header">
            <div class="logo">

            </div>
        </div>

        <div class="menu">
            <div class="menu-btns">
                <div class="btns1">
                    <a href="{{ route('welcome') }}">главная</a>
                    <a href="{{ route('news') }}" style="text-decoration: underline;">новости</a>
                    <a href="{{ route('games') }}">игры</a>
                </div>
                <div class="btns2">
                    <a href="{{ route('login') }}">Войти в аккаунт</a>
                </div>
            </div>
        </div>
    </header>

    <main>
    <div class="search">
            <input type="text" placeholder="Поиск по сайту...">
        </div>
        <div class="main-container">
            <div class="page-name">
                <a>Новости</a>
            </div>

            <div class="block">
                <div class="blockimg">

                </div>
                <div class="blocktext">
                    <a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet laborum iure fugit corporis debitis. Ex, deserunt fugiat. A, in excepturi?</a>
                </div>
               
            </div>

        </div>
        <div class="up">
            <a href="#up" id="button-up"><img src="images/up1.png"></a>      <!-- ЯКОРЬ -->
        </div>
    </main>

    <footer>

    </footer>

</body>
</html>