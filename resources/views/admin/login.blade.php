<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Chicago Deal of The Day</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
        <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
        <link href="css/main.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="loginWrapper">
            <div class="login">
                <div class="loginHeader"><h4>Login To Your Account</h4></div>
                <form action="login" method="post">
                    <input class="text" name="username" placeholder="Username" />
                    <input class="text" name="password" placeholder="Password" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input class="submitButton" type="submit" value="Login" />
                </form>
            </div>
        </div>
        <script  src="https://code.jquery.com/jquery-3.2.1.min.js"   integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>
    </body>
</html>
