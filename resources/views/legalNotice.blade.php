<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="image/logo/faviconFinal2.png" />

    <title>Traderbook</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="css/app.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/index.css">
    <?php // <link rel="stylesheet" href="{{url('/resources/assets/sass/index.scss')}}"> ?>
    <link rel="stylesheet" href="css/cookie.css">
    <link rel="stylesheet" href="css/swiper.min.css">

</head>
<body>
@include('cookie')
<div id="banner" class="container-fluid">
    <div id="bannerLogo">
        <img id="bannerLogoContent" src="image/logo/logoTraderBookFinal.png">
    </div>
    <div id="bannerTitle">
        <h1 id="bannerTitleContent"><span class="colorBlue">Trader</span><span class="colorGolden">Book</span></h1>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <h1>@lang('content.legalNotice')</h1>
        </div>
    </div>
</div>
<footer class="container-fluid" id="footer">
    <a href="{{url('/image/logo/logoTraderBookFinal.png')}}">@lang('content.legalNotice')</a>
</footer>
</body>
</html>
