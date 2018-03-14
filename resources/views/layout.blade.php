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
    <link rel="stylesheet" href="css/cookie.css">
    <link rel="stylesheet" href="css/swiper.min.css">

</head>
<body>
@include('cookie')
<div id="banner" class="container-fluid">
    <a href="{{ action('EmailCustomerController@email') }}">
    <div id="bannerLogo">
        <img id="bannerLogoContent" src="image/logo/logoTraderBookFinal.png">
    </div>
    <div id="bannerTitle">
        <h1 id="bannerTitleContent"><span class="colorBlue">Trader</span><span class="colorGolden">Book</span></h1>
    </div>
    </a>
    <div id="bannerLang">
        {!! Form::open(['method' => 'POST', 'route' => 'changelocale', 'class' => 'form-inline navbar-select']) !!}

        <div class="form-group @if($errors->first('locale')) has-error @endif">
            <span aria-hidden="true"><i class="fa fa-flag"></i></span>
            {!! Form::select(
                'locale',
                ['en' => __('content.en'), 'fr' => __('content.fr')],
                \App::getLocale(),
                [
                    'id'       => 'locale',
                    'class'    => 'form-control custom-select bannerLangForm custom-select-lg mb-3',
                    'required' => 'required',
                    'onchange' => 'this.form.submit()',
                ]
            ) !!}
            <small class="text-danger">{{ $errors->first('locale') }}</small>
        </div>

        <div class="btn-group pull-right sr-only">
            {!! Form::submit("Change", ['class' => 'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}
    </div>
</div>
    @yield('content')
<footer class="container-fluid" id="footer">
    <span id="footerText"><span class="colorBlue">&#9400; </span><span class="colorGolden">2018 </span><span class="colorBlue"> Trader</span><span class="colorGolden">Book</span></span>
    <a id="footerLink" href="{{ action('EmailCustomerController@legalNotice') }}" class="link">@lang('content.legalNotice')</a>
</footer>
<script src="/js/swiper.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        direction: 'vertical',
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        }
    });
</script>
<script type="text/javascript" src="/js/cookie.js"></script>
</body>
</html>