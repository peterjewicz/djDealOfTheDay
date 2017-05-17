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
        <div id="mainWrapper">
            <div id="header">
                <div class="headerContent">
                    <h1>DJ Deal Of The Day </h1>
                    <h2>  Get Daily Deals Delivered</br>
                        Directly To Your Inbox Or Phone
                    </h2>
                    <a href="#" class="button">Get The App</a>
                    <a href="#" class="button">Email Me Deals</a>
                </div>
                <div class="downWard">
                    <h4>Scroll For Today's Deal</h4>
                    <i class="fa fa-angle-double-down flash" aria-hidden="true"></i>
                </div>
            </div>
            <div id="itemWrapper">
                <div class="item">
                    <div class="productImage column-small-7">
                        <div class="imagesWrapper">
                            <div class="slider">
                                @foreach ($deal->images as $image)
                                    <img src="{{ $image  }}" width="75%" />
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="productContent column-small-5">
                        <div class="productContentInner">
                            <h3> {{ $deal->title }}</h3>
                            <div class="divider"></div>
                            <div class="scrollerShadow">
                                <div class="textWrapper scrollbar-rail">
                                    <p>
                                        {{ $deal->description }}
                                    </p>
                                </div>
                            </div>
                            <div class="pricing">
                                Regular Price: ${{ $deal->regularPrice }}
                            </div>
                            <div class="greenText">
                                Today's Price: ${{ $deal->salePrice }}
                            </div>
                            <a href="{{ $deal->link }}" class="button">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script  src="https://code.jquery.com/jquery-3.2.1.min.js"   integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>
        <script  src="js/jquery.scrollbar.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
        <script>
        jQuery(document).ready(function(){
            jQuery('.scrollbar-rail').scrollbar();

            jQuery('.slider').slick({
                dots: true,
                autoplay: true,
                autoplaySpeed: 4000,
            });
        });
        </script>
    </body>
</html>
