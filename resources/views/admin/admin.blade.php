<?php
    if(isset($alert)){
        echo('
            <script>
                alert("'.$alert.'");
            </script>
        ');
    }
 ?>
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
        <div class="adminWrapper">
            <div class="addDealWrapper">
                <form action="admin" method="post">
                    <input type="text" name="title" placeholder="Title"/>
                    <textarea name="description">Item Description</textarea>
                    <input type="text" name="link" placeholder="Link"/>
                    <input type="text" name="regularPrice" placeholder="Regular Price"/>
                    <input type="text" name="salePrice" placeholder="Sale Price"/>
                    <input type="text" name="images" placeholder="Image Link (comma separated)"/>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="submitButton" />
                </form>
            </div>
        </div>
        <script  src="https://code.jquery.com/jquery-3.2.1.min.js"   integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>
    </body>
</html>
