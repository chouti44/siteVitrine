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
    <div id="bannerLogo">
        <img id="bannerLogoContent" src="image/logo/logoTraderBookFinal.png">
    </div>
    <div id="bannerTitle">
        <h1 id="bannerTitleContent"><span class="colorBlue">Trader</span><span class="colorGolden">Book</span></h1>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 mh-50">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div id="step1" class="step stepOdd swiper-slide">
                        <div class="col-sm-12 col-md-4 stepCol stepColCircle">
                            <!-- <span class="arrowRond"></span> -->
                            <div class="stepCircle">
                                <div class="stepCircleText">
                                    @lang('content.step1.circle')
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 stepCol stepColArrow stepArrowHorizontal">
                            <span class="stepArrow"></span>
                            <img src="{{url('/image/icon/iconArrow.svg')}}" class="stepArrowImg"/>
                        </div>
                        <div class="col-sm-12 col-md-5 stepCol stepColContent">
                            <div class="stepContent img-thumbnail">
                                <h2 class="stepContentTitle">
                                    @lang('content.step1.title')
                                </h2>
                                <p class="stepContentText">
                                    @lang('content.step1.text')
                                </p>
                            </div>
                            <div class="stepArrowVertical stepArrowVerticalBottom">
                                <span class="stepArrow"></span>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div id="step2" class="step stepEven swiper-slide">
                        <div class="col-sm-12 col-md-4 stepCol stepColCircle">
                            <div class="stepCircle">
                                <div class="stepArrowVertical stepArrowVerticalTop">
                                    <span class="stepArrow"></span>
                                    <img src="{{url('/image/icon/iconArrow.svg')}}" class="stepArrowImg"/>
                                </div>
                                <div class="stepCircleText">
                                    @lang('content.step2.circle')
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 stepCol stepColArrow stepArrowHorizontal">
                            <img src="{{url('/image/icon/iconArrow.svg')}}" class="stepArrowImg"/>
                            <span class="stepArrow"></span>
                        </div>
                        <div class="col-sm-12 col-md-5 stepCol stepColContent">
                            <div class="stepContent img-thumbnail">
                                <h2 class="stepContentTitle">
                                    @lang('content.step2.title')
                                </h2>
                                <p class="stepContentText">
                                    @lang('content.step1.text')
                                </p>
                            </div>
                            <div class="stepArrowVertical stepArrowVerticalBottom">
                                <span class="stepArrow"></span>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div id="step3" class="step stepOdd swiper-slide">
                        <div class="col-sm-12 col-md-4 stepCol stepColCircle">
                            <div class="stepCircle">
                                <div class="stepArrowVertical stepArrowVerticalTop">
                                    <span class="stepArrow"></span>
                                    <img src="{{url('/image/icon/iconArrow.svg')}}" class="stepArrowImg"/>
                                </div>
                                <div class="stepCircleText">
                                    @lang('content.step3.circle')
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 stepCol stepColArrow stepArrowHorizontal">
                            <span class="stepArrow"></span>
                            <img src="{{url('/image/icon/iconArrow.svg')}}" class="stepArrowImg"/>
                        </div>
                        <div class="col-sm-12 col-md-5 stepCol stepColContent">
                            <div class="stepContent img-thumbnail">
                                <h2 class="stepContentTitle">
                                    @lang('content.step3.title')
                                </h2>
                                <p class="stepContentText">
                                    @lang('content.step3.text')
                                </p>
                            </div>
                            <div class="stepArrowVertical">
                                <span class="stepArrow"></span>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div id="step4" class="step stepEven swiper-slide">
                        <div class="col-sm-12 col-md-4 stepCol stepColCircle">
                            <div class="stepCircle">
                                <div class="stepArrowVertical stepArrowVerticalTop">
                                    <span class="stepArrow"></span>
                                    <img src="{{url('/image/icon/iconArrow.svg')}}" class="stepArrowImg"/>
                                </div>
                                <div class="stepCircleText">
                                    @lang('content.step4.circle')
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 stepCol stepColArrow stepArrowHorizontal">
                            <img src="{{url('/image/icon/iconArrow.svg')}}" class="stepArrowImg"/>
                            <span class="stepArrow"></span>
                        </div>
                        <div class="col-sm-12 col-md-5 stepCol stepColContent">
                            <div class="stepContent img-thumbnail">
                                <h2 class="stepContentTitle">
                                    @lang('content.step4.title')
                                </h2>
                                <p class="stepContentText">
                                    @lang('content.step4.text')
                                </p>
                            </div>
                            <div class="stepArrowVertical stepArrowVerticalBottom">
                                <span class="stepArrow"></span>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div id="step5" class="step stepOdd swiper-slide">
                        <div id="stepNewsletter" class="col-sm-12">
                            <div id="newsletter">
                                <p>Inscrivez-vous à la newsletter pour être au courant des nouvautés</p>
                            </div>
                            {{ Form::open(array('url' => '/index/', 'method' => 'POST', 'class'=>'form-horizontal')) }}
                            {!! Form::open(['url' => '/index/' , 'method' => 'POST'], ['class' => 'form-horizontal']) !!}
                                <div class="form-group has-success has-feedback">
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon">@</span>
                                            {!! Form::email('email', '', ['placeholder' => __('content.form.email')], ['id' => 'email, inputGroupSuccess2'], ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                </div>
                            {{ csrf_field() }}
                            {!! Form::submit(__('content.form.button'), ['id' => 'email'] , ['class' => 'btn btn-lg active'])!!}
                            {!! Form::close() !!}
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div id="step6" class="stepEven swiper-slide">
                        <div class="row">
                            <div class="container-fluid" id="stepSocialNetworks">
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
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
</body>
</html>
