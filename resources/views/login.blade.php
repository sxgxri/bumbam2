<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" type="image/x-icon" href="images/ico.ico">
    <script src="js/modalWin.js"></script>
    <script src="../node_modules\jquery\dist\jquery.min.js"></script>
    <title>GAMEJUICE | Вход</title>
</head>
<body>
    <header>
        <div class="header">
            <div class="logo">

            </div>
        </div>

        <div class="menu">
            <div class="menu-btns">
                <div class="btns1">
                    <a href="{{ route('welcome') }}">главная</a>
                    <a href="{{ route('news') }}" >новости</a>
                    <a href="{{ route('games') }}" >игры</a>
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
                <a>Авторизация</a>
            </div>

   
                    <div class="sign-in">
                            <form action="">
                                <a>Войдите в аккаунт</a>
                                <input type="text" placeholder=" Введите логин">
                                <input type="text" placeholder=" Введите пароль">
                                <a class="recovery" href="{{ route('login') }}">Забыли пароль?</a>
                                <input type="submit" id="sign-in-btn" value="ВОЙТИ">
                            </form>
                        </div>
                        
                            <p class="or">ИЛИ</p>

                        <div class="sign-in">
                            <form action="">
                                <a>Зарегистрируйтесь</a>
                                <input type="text" placeholder=" Введите логин">
                                <input type="text" placeholder=" Введите пароль">
                                <a class="recovery" href="{{ route('login') }}">Забыли пароль?</a>
                                <input type="submit" id="sign-in-btn" value="Зарегистрироваться">
                            </form>
                        </div> 
        </div>
    </main>

    <footer>

    </footer>

</body>
</html>