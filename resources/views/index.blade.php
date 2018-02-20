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
<div class="container-fluid swiper-container">
    <div class="swiper-wrapper">
        <div id="bloc1" class="bloc swiper-slide">
            <div class="col-sm-12 col-md-4 blocRond">
                <span class="arrowRond"></span>
                <div class="rond">
                    <div class="textrond">
                        Tester
                    </div>
                </div>
            </div>

            <div class="col-md-4 arrowHorizontal">
                <span class="arrow"></span>
            </div>
            <div class="col-sm-12 col-md-4 paragraphe">
                <div class="text">
                    <h2 class="loremtitle">
                        Lorem ipsum
                    </h2>
                    <p class="loremtext">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci iusto facere cumque, reiciendis dolores illum quos perferendis maiores harum quis dolorem consequatur beatae blanditiis esse aliquid nostrum. Placeat, modi, porro!
                    </p>
                </div>
            </div>
        </div>
        <span class="arrowVertical"></span>
        <div id="bloc2" class="bloc swiper-slide">
            <div class="col-sm-12 col-md-4
                blocRond2">
                <span class="arrowRond2"></span>
                <div class="rond2">
                    <div class="textrond">
                        Analyser
                    </div>
                </div>
            </div>
            <div class="col-md-4 arrowHorizontal2">
                <span class="arrow"></span>
            </div>
            <div class="col-sm-12 col-md-4 paragraphe2">
                <div class="text2">
                    <h2 class="loremtitle">
                        Lorem ipsum
                    </h2>
                    <p class="loremtext">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci iusto facere cumque, reiciendis dolores illum quos perferendis maiores harum quis dolorem consequatur beatae blanditiis esse aliquid nostrum. Placeat, modi, porro!
                    </p>
                </div>
            </div>
        </div>
        <div id="bloc3" class="bloc swiper-slide">
            <div class="col-sm-12 col-md-4 blocRond">
                <span class="arrowRond"></span>
                <div class="rond">
                    <div class="textrond">
                        Déployer
                    </div>
                </div>
            </div>
            <div class="col-md-4 arrowHorizontal">
                <span class="arrow"></span>
            </div>
            <div class="col-sm-12 col-md-4 paragraphe">
                <div class="text">
                    <h2 class="loremtitle">
                        Lorem ipsum
                    </h2>
                    <p class="loremtext">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci iusto facere cumque, reiciendis dolores illum quos perferendis maiores harum quis dolorem consequatur beatae blanditiis esse aliquid nostrum. Placeat, modi, porro!
                    </p>
                </div>
            </div>
        </div>
        <div id="bloc4" class="bloc swiper-slide">
            <div class="col-sm-12 col-md-4 blocRond2">
                <span class="arrowRond2"></span>
                <div class="rond2">
                    <div class="textrond">
                        Optimiser
                    </div>
                </div>
            </div>
            <div class="col-md-4 arrowHorizontal2">
                <span class="arrow"></span>
            </div>
            <div class="col-sm-12 col-md-4 paragraphe2">
                <div class="text2">
                    <h2 class="loremtitle">
                        Lorem ipsum
                    </h2>
                    <p class="loremtext">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci iusto facere cumque, reiciendis dolores illum quos perferendis maiores harum quis dolorem consequatur beatae blanditiis esse aliquid nostrum. Placeat, modi, porro!
                    </p>
                </div>
            </div>
        </div>
        <div id="bloc5" class="bloc swiper-slide">
            <div id="newsletter">
                <p>Inscrivez-vous à la newsletter pour être au courant des nouvautés</p>
            </div>
            {!! Form::open(['url' => '/index/' , 'method' => 'POST']) !!}
            {!! Form::label('email', '') !!}
            {!! Form::email('email', '', ['placeholder' => /* @lang('content.form.email') */ ''], ['id' => 'email']) !!} <br/> <br/>
            {{ csrf_field() }}
            {!! Form::submit('Send', ['id' => 'email'])!!}
            {!! Form::close() !!}
        </div>
        <div id="bloc6" class="bloc swiper-slide">
            <div class="row">
                <div class="container-fluid" id="reseaux">
                    <div id="reseaux1">
                        <div id="reseau1" class="reseau">
                        </div>
                        <div id="reseau2" class="reseau">
                        </div>
                        <div id="reseau3" class="reseau">
                        </div>
                        <div id="reseau4" class="reseau">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>
<footer class="container-fluid" id="footer">
    <p>Footer</p>
</footer>
<script src="/js/swiper.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        direction: 'vertical',
        noSwiping: false,
        allowSlidePrev: false,
        allowSlideNext: false,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            992: {
                noSwiping: true,
                allowSlidePrev: true,
                allowSlideNext: true
            },
            2500: {
                noSwiping: false,
                allowSlidePrev: false,
                allowSlideNext: false
            }
        },
    });
</script>
</body>
</html>
