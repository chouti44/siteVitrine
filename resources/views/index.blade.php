<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Traderbook</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php
        /*
         * index
         */
?>
<div class="container-fluid bandeau">
    <img src="logo.png" id="logo">
    <div id="title">
        <h1>Traderbook</h1>
    </div>
</div>
<div class="container-fluid bloc" id="bloc1">
    <div class="row">
        <div class="col-sm-12 col-lg-4 blocRond">
            <div class="rond">
                <div class="textrond">
                    Tester
                </div>
            </div>
        </div>

        <div class="col-lg-3 arrowHorizontal">
            <span class="arrow"></span>
        </div>
        <div class="col-sm-12 col-lg-5 paragraphe">
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
</div>
<div class="container-fluid bloc" id="bloc2">
    <div class="row">
        <div class="col-sm-12 col-lg-4
			blocRond2">
            <div class="rond">
                <div class="textrond">
                    Analyser
                </div>
            </div>
        </div>
        <div class="col-lg-3 arrowHorizontal">
            <span class="arrow"></span>
        </div>
        <div class="col-sm-12 col-lg-5 paragraphe2">
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
</div>
<div class="container-fluid bloc" id="bloc3">
    <div class="row">
        <div class="col-sm-12 col-lg-4 blocRond">
            <div class="rond">
                <div class="textrond">
                    Déployer
                </div>
            </div>
        </div>
        <div class="col-lg-3 arrowHorizontal">
            <span class="arrow"></span>
        </div>
        <div class="col-sm-12 col-lg-5 paragraphe">
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
</div>
<div class="container-fluid bloc" id="bloc4">
    <div class="row">
        <div class="col-sm-12 col-lg-4 blocRond2">
            <div class="rond">
                <div class="textrond">
                    Optimiser
                </div>
            </div>
        </div>
        <div class="col-lg-3 arrowHorizontal">
            <span class="arrow"></span>
        </div>
        <div class="col-sm-12 col-lg-5 paragraphe">
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
</div>
<div class="container-fluid bloc" id="bloc5">
    <div id="newsletter">
        <p>Inscrivez-vous à la newsletter pour être au courant des nouvautés</p>
    </div>
    <input type="text" placeholder="Adresse mail" id="mail">
    <input type="button" value="Envoyer" id="envoyer">

    {!! Form::open(['url' => '/index/' , 'method' => 'POST']) !!}
    {!! Form::label('email', 'Enter email')  !!}
    {!! Form::email('email', '') !!} <br/> <br/>
    {{ csrf_field() }}
    {!! Form::submit('Send') !!}
    {!! Form::close() !!}
</div>
<div class="container-fluid bloc" id="bloc6">
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
        <div class="container-fluid" id="footer">
            <p>Footer</p>
        </div>
    </div>
</div>
</body>
</html>
