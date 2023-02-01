<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" type="image/x-icon" href="images/ico.ico">
    <script src="js/scrollUp.js"></script>
    <title>GAMEJUICE | Игры</title>
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
                    <a href="{{ route('news') }}" >новости</a>
                    <a href="{{ route('games') }}" style="text-decoration: underline;">игры</a>
                </div>
                <div class="btns2">
                    <a href="{{ route('login') }}">Войти в аккаунт</a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="search">
            <input type="text" placeholder=" Поиск по сайту...">
        </div>
        <div class="main-container">
            <div class="page-name">
                <a>Игры</a>
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