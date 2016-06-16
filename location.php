<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>SchoolPro</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/schoolin.css">
    <link rel="stylesheet" href="css/_panels.scss">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">



    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


    <!--Pin-->

    <link rel="stylesheet" type="text/css" href="css/pin/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/pin/component.css" />
    <script src="js/pin/modernizr.custom.js"></script>

    <style>
        #view-source {
            position: fixed;
            display: block;
            right: 0;
            bottom: 0;
            margin-right: 40px;
            margin-bottom: 40px;
            z-index: 900;
        }
    </style>
</head>
<body>
<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <?php
    include ('header.php');
    include ('nav.php');
    ?>


    <main class="mdl-layout__content  mdl-color--grey-100">


        <div class="mdl-grid demo-content sky"  >



            <h2>Logement étudiant</h2><br/>
            <input placeholder="Où?"/>
            <input type="button" value="Rechercher"/>

            <div class="row" >
                <div class="pull-left col-md-12 col-sm-12" >
                    <div class="panel panel-default">
                        <div class="panel-heading">A louer 2 chambres d'étudiant</div>
                        <div class="panel-body">
                            <img src="images/yes-we-code.png" width="150px"/>
                            <span>250€</span><br/>
                            <span>13 Juin,22h09</span>

                        </div>
                        <div class="panel-footer" >
                            <a href="https://www.leboncoin.fr/locations/980377484.htm?ca=19_s" target=_blank>En savoir plus </a><button>Partager</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">

                <div id="grid-gallery" class="grid-gallery">
                    <section class="grid-wrap">
                        <ul class="grid">
                            <li class="grid-sizer"></li><!-- for Masonry column width -->
                            <li>
                                <figure>
                                    <img src="images/h1.jpg" alt="img01"/>
                                    <figcaption><h3>A louer 2 chambres d'étudiant</h3><p>250€<br/>
                                            13 Juin,22h09</p><a href="https://www.leboncoin.fr/locations/980377484.htm?ca=19_s" target=_blank>En savoir plus </a>
                                        <button>Partager</button></figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="images/h2.jpg" alt="img02"/>
                                    <figcaption><h3>Appartement F1 Spécial étudiant</h3><p>340€</p><button>Partager</button></figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="images/h3.jpg" alt="img03"/>
                                    <figcaption><h3>Brunch semiotics</h3><p>Ex disrupt cray yr, butcher pour-over magna umami kitsch before they sold out commodo.</p></figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="images/h4.jpg" alt="img04"/>
                                    <figcaption><h3>Chillwave nihil occupy</h3><p>In post-ironic gluten-free deserunt, PBR&amp;B non pork belly cupidatat polaroid. </p></figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="images/h5.jpg" alt="img05"/>
                                    <figcaption><h3>Kale chips lomo biodiesel</h3><p>Pariatur food truck street art consequat sustainable, et kogi beard qui paleo. </p></figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="images/h6.jpg" alt="img06"/>
                                    <figcaption><h3>Exercitation occaecat</h3><p>Street chillwave hoodie ea gentrify.</p></figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="images/h7.jpg" alt="img01"/>
                                    <figcaption><h3>Selfies viral four</h3><p>Raw denim duis Tonx Shoreditch labore swag artisan High Life cred, stumptown Schlitz quinoa flexitarian mollit fanny pack.</p></figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="images/h8.jpg" alt="img02"/>
                                    <figcaption><h3>Photo booth skateboard</h3><p>Vinyl squid ex High Life. Paleo Neutra nulla master cleanse, Helvetica et enim nesciunt esse.</p></figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="images/h9.jpg" alt="img03"/>
                                    <figcaption><h3>Ex fashion axe</h3><p>Qui nesciunt et, in chia cliche irure. Eu YOLO nihil mollit twee locavore, tempor keytar asymmetrical irure aute sriracha consequat.</p></figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="images/h10.jpg" alt="img04"/>
                                    <figcaption><h3>Thundercats next level</h3><p>Portland nulla butcher ea XOXO, consequat Bushwick Pinterest elit twee pickled direct trade vero. </p></figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="images/h1.jpg" alt="img05"/>
                                    <figcaption><h3>Bushwick selvage synth</h3><p>Bicycle rights flannel Shoreditch, art party laboris Bushwick sriracha authentic chambray hella umami sed distillery master cleanse.</p></figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="images/h2.jpg" alt="img01"/>
                                    <figcaption><h3>Bottle wayfarers locavore</h3><p>Once there was a little asparagus, he was green and lonely.</p></figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="images/h3.jpg" alt="img01"/>
                                    <figcaption><h3>Letterpress asymmetrical</h3><p>Chillwave hoodie ea gentrify aute sriracha consequat.</p></figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="images/h4.jpg" alt="img02"/>
                                    <figcaption><h3>Vice velit chia</h3><p>Laborum tattooed iPhone, Schlitz irure nulla Tonx retro 90's chia cardigan quis asymmetrical paleo. </p></figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="images/h5.jpg" alt="img03"/>
                                    <figcaption><h3>Brunch semiotics</h3><p>Ex disrupt cray yr, butcher pour-over magna umami kitsch before they sold out commodo.</p></figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="images/h1.jpg" alt="img04"/>
                                    <figcaption><h3>Chillwave nihil occupy</h3><p>In post-ironic gluten-free deserunt, PBR&amp;B non pork belly cupidatat polaroid. </p></figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="img/thumb/5.png" alt="img05"/>
                                    <figcaption><h3>Kale chips lomo biodiesel</h3><p>Pariatur food truck street art consequat sustainable, et kogi beard qui paleo. </p></figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="img/thumb/6.png" alt="img06"/>
                                    <figcaption><h3>Exercitation occaecat</h3><p>Street chillwave hoodie ea gentrify.</p></figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="img/thumb/1.png" alt="img01"/>
                                    <figcaption><h3>Selfies viral four</h3><p>Raw denim duis Tonx Shoreditch labore swag artisan High Life cred, stumptown Schlitz quinoa flexitarian mollit fanny pack.</p></figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="img/thumb/2.png" alt="img02"/>
                                    <figcaption><h3>Photo booth skateboard</h3><p>Vinyl squid ex High Life. Paleo Neutra nulla master cleanse, Helvetica et enim nesciunt esse.</p></figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="img/thumb/3.png" alt="img03"/>
                                    <figcaption><h3>Ex fashion axe</h3><p>Qui nesciunt et, in chia cliche irure. Eu YOLO nihil mollit twee locavore, tempor keytar asymmetrical irure aute sriracha consequat.</p></figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="img/thumb/4.png" alt="img04"/>
                                    <figcaption><h3>Thundercats next level</h3><p>Portland nulla butcher ea XOXO, consequat Bushwick Pinterest elit twee pickled direct trade vero. </p></figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="img/thumb/5.png" alt="img05"/>
                                    <figcaption><h3>Bushwick selvage synth</h3><p>Bicycle rights flannel Shoreditch, art party laboris Bushwick sriracha authentic chambray hella umami sed distillery master cleanse.</p></figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="img/thumb/1.png" alt="img01"/>
                                    <figcaption><h3>Bottle wayfarers locavore</h3><p>Once there was a little asparagus, he was green and lonely.</p></figcaption>
                                </figure>
                            </li>
                        </ul>
                    </section><!-- // grid-wrap -->
                    <section class="slideshow" style="display:none;">
                        <ul>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>A louer 2 chambres d'étudiant</h3>
                                        <p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
                                    </figcaption>
                                    <img src="images/h1.jpg" alt="img01"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Vice velit chia</h3>
                                        <p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
                                    </figcaption>
                                    <img src="img/large/2.png" alt="img02"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Brunch semiotics</h3>
                                        <p>IPhone PBR polaroid before they sold out meh you probably haven't heard of them leggings tattooed tote bag, butcher paleo next level single-origin coffee photo booth.</p>
                                    </figcaption>
                                    <img src="img/large/3.png" alt="img03"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Chillwave nihil occupy</h3>
                                        <p>Vice cliche locavore mumblecore vegan wayfarers asymmetrical letterpress hoodie mustache. Shabby chic lomo polaroid, scenester 8-bit Portland Pitchfork VHS tote bag.</p>
                                    </figcaption>
                                    <img src="img/large/4.png" alt="img04"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Kale chips lomo biodiesel</h3>
                                        <p>Chambray Schlitz pug YOLO, PBR Tumblr semiotics. Flexitarian YOLO ennui Blue Bottle, forage dreamcatcher chillwave put a bird on it craft beer Etsy.</p>
                                    </figcaption>
                                    <img src="img/large/5.png" alt="img05"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Exercitation occaecat</h3>
                                        <p>Cosby sweater hella lomo Thundercats VHS occupy High Life. Synth pop-up readymade single-origin coffee, fanny pack tousled retro. Fingerstache mlkshk ugh hashtag, church-key ethnic street art pug yr.</p>
                                    </figcaption>
                                    <img src="img/large/6.png" alt="img06"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Selfies viral four</h3>
                                        <p>Ethnic readymade pug, small batch XOXO Odd Future normcore kogi food truck craft beer single-origin coffee banh mi photo booth raw denim. XOXO messenger bag pug VHS. Forage gluten-free polaroid, twee hoodie chillwave Helvetica.</p>
                                    </figcaption>
                                    <img src="img/large/1.png" alt="img01"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Photo booth skateboard</h3>
                                        <p>Thundercats pour-over four loko skateboard Brooklyn, Etsy sriracha leggings dreamcatcher narwhal authentic 3 wolf moon synth Portland. Shabby chic photo booth Blue Bottle keffiyeh, McSweeney's roof party Carles.</p>
                                    </figcaption>
                                    <img src="img/large/2.png" alt="img02"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Ex fashion axe</h3>
                                        <p>Ennui Blue Bottle shabby chic, organic butcher High Life tattooed meggings jean shorts Brooklyn sartorial polaroid. Cray raw denim +1, bespoke High Life Odd Future banh mi chillwave Marfa kogi disrupt paleo direct trade 90's Godard. </p>
                                    </figcaption>
                                    <img src="img/large/3.png" alt="img03"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Thundercats next level</h3>
                                        <p>Typewriter authentic PBR, iPhone mixtape fixie post-ironic fingerstache Pitchfork artisan. Wayfarers master cleanse occupy, Tonx lo-fi swag Truffaut irony whatever Blue Bottle readymade PBR gluten-free. Lomo Pinterest Banksy fap. Retro ennui you probably haven't heard of them iPhone, PBR fashion axe polaroid.</p>
                                    </figcaption>
                                    <img src="img/large/4.png" alt="img04"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Bushwick selvage synth</h3>
                                        <p>Schlitz deserunt pour-over consectetur. Selfies plaid asymmetrical farm-to-table, cred gastropub photo booth narwhal non roof party velit raw denim slow-carb meggings pug. Tempor post-ironic seitan cliche bicycle rights. Meh viral Williamsburg, quinoa 8-bit kale chips YOLO Marfa accusamus.</p>
                                    </figcaption>
                                    <img src="img/large/5.png" alt="img05"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Bottle wayfarers locavore</h3>
                                        <p>Aliqua High Life art party fixie farm-to-table. Kitsch Echo Park shabby chic, narwhal fugiat Cosby sweater asymmetrical gastropub tofu. Authentic minim Pinterest Blue Bottle beard, aliqua chia XOXO dolor freegan banh mi vegan fugiat.</p>
                                    </figcaption>
                                    <img src="img/large/1.png" alt="img01"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Letterpress asymmetrical</h3>
                                        <p>Pickled hoodie Pinterest 90's proident church-key chambray. Salvia incididunt slow-carb ugh skateboard velit, flannel authentic hoodie lomo fixie photo booth farm-to-table. Minim meggings Bushwick, semiotics Vice put a bird.</p>
                                    </figcaption>
                                    <img src="img/large/1.png" alt="img01"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Vice velit chia</h3>
                                        <p>Tattooed assumenda chambray cray officia. 90's mollit ethnic church-key ex eu pop-up gentrify. Tonx raw denim eu, bitters nesciunt distillery Neutra pop-up. Drinking vinegar Helvetica Truffaut tattooed.</p>
                                    </figcaption>
                                    <img src="img/large/2.png" alt="img02"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Brunch semiotics</h3>
                                        <p>Gentrify High Life adipisicing, duis slow-carb kogi Tumblr raw denim freegan Echo Park. Fingerstache laboris pork belly messenger bag, you probably haven't heard of them vegan twee Intelligentsia Vice Etsy pickled put a bird on it Godard roof party. Meggings small batch dreamcatcher velit.</p>
                                    </figcaption>
                                    <img src="img/large/3.png" alt="img03"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Chillwave nihil occupy</h3>
                                        <p>Marfa exercitation non, beard +1 hashtag cardigan gluten-free mixtape church-key ugh eu Portland leggings. Ennui farm-to-table fingerstache keytar Echo Park tattooed. Seitan qui artisan, aliquip cupidatat sunt Portland wayfarers duis.</p>
                                    </figcaption>
                                    <img src="img/large/4.png" alt="img04"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Kale chips lomo biodiesel</h3>
                                        <p>Lomo church-key whatever, seitan laborum drinking vinegar lo-fi semiotics nihil meh. Skateboard irure before they sold out Banksy. Narwhal High Life lomo aliqua drinking vinegar. PBR&B placeat proident, craft beer forage DIY nostrud meh flexitarian keytar Helvetica.</p>
                                    </figcaption>
                                    <img src="img/large/5.png" alt="img05"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Exercitation occaecat</h3>
                                        <p>Skateboard Truffaut bicycle rights seitan normcore. Culpa lo-fi ennui, Pinterest before they sold out Echo Park roof party sapiente aesthetic consequat Truffaut freegan voluptate. Kogi banh mi vero nihil, freegan gluten-free cliche. Forage Etsy laboris anim normcore, McSweeney's ex.</p>
                                    </figcaption>
                                    <img src="img/large/6.png" alt="img06"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Selfies viral four</h3>
                                        <p>Viral roof party locavore flexitarian nihil fanny pack actually Odd Future anim commodo. Sunt yr aute, enim quis plaid sartorial duis leggings lo-fi gluten-free. Tote bag flexitarian pug stumptown, Cosby sweater try-hard ethnic scenester. Mumblecore +1 hoodie accusamus skateboard slow-carb, Thundercats Godard placeat craft beer meh enim trust fund.</p>
                                    </figcaption>
                                    <img src="img/large/1.png" alt="img01"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Photo booth skateboard</h3>
                                        <p>Culpa pour-over cray nesciunt dreamcatcher. Meggings distillery cillum raw denim voluptate, single-origin coffee lo-fi ethical iPhone four loko nihil salvia. Biodiesel ea Intelligentsia quis deep v, American Apparel trust fund slow-carb synth semiotics quinoa Brooklyn pour-over nulla Godard.</p>
                                    </figcaption>
                                    <img src="img/large/2.png" alt="img02"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Ex fashion axe</h3>
                                        <p>Bespoke irony tousled nihil flexitarian, salvia tempor nostrud Bushwick hashtag Austin ethnic disrupt. Beard Helvetica nihil, chia craft beer Wes Anderson keytar dolore. Irure incididunt flexitarian photo booth cillum, YOLO deserunt Brooklyn artisan. Brunch assumenda irony, Blue Bottle roof party DIY ullamco quis.</p>
                                    </figcaption>
                                    <img src="img/large/3.png" alt="img03"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Thundercats next level</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                                    </figcaption>
                                    <img src="img/large/4.png" alt="img04"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Bushwick selvage synth</h3>
                                        <p>Ethical Truffaut tofu food truck cred cornhole. Irure umami Austin cornhole blog ethical. Aliqua yr Truffaut, adipisicing hashtag Shoreditch eiusmod tempor literally vinyl.</p>
                                    </figcaption>
                                    <img src="img/large/5.png" alt="img05"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Bottle wayfarers locavore</h3>
                                        <p>Pork belly irony Shoreditch fashion axe DIY. Portland banjo irony, squid gentrify Austin fixie church-key magna. Marfa artisan Echo Park, McSweeney's banjo sunt keytar tofu. Brooklyn PBR single-origin coffee disrupt polaroid ut, gluten-free XOXO plaid magna.</p>
                                    </figcaption>
                                    <img src="img/large/1.png" alt="img01"/>
                                </figure>
                            </li>
                        </ul>
                        <nav>
                            <span class="icon nav-prev"></span>
                            <span class="icon nav-next"></span>
                            <span class="icon nav-close"></span>
                        </nav>
                        <div class="info-keys icon">Navigate with arrow keys</div>
                    </section><!-- // slideshow -->
                </div><!-- // grid-gallery -->
            </div>

            <script src="js/pin/imagesloaded.pkgd.min.js"></script>
            <script src="js/pin/masonry.pkgd.min.js"></script>
            <script src="js/pin/classie.js"></script>
            <script src="js/pin/cbpGridGallery.js"></script>
            <script>
                new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
            </script>



            <?php
            if(!$fp = fopen("http://www.zappos.com/nike-free-run-black-victory-green-anthracite-white?zlfid=111" ,"r" )) {
                return false; }
            //our fopen is right, so let's go
            $content = "";
            while(!feof($fp)) {
                //while it is not the last line, we will add the current line to our $content
                $content .= fgets($fp, 1024);
            }
            fclose($fp);
            // //we are done here, don't need the main source anymore
            preg_match_all("/([$][0-9]*[,]*[.][0-9]{2})/", $content, $prices, PREG_SET_ORDER);
            echo $prices[0][0]."";
            ?>
    </main>
</div>

<a target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect blue mdl-color-text--white">Chat</a>
<script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    $(".edit").click(function(){
        $(".close").css("display","block");
        $(this).css("display","none");
        $(".save").css("display","block");


    })
    $(".save").click(function(){
        $(".close").css("display","none");
        $(this).css("display","none");
        $(".edit").css("display","block");


    })
    $(".close").click(function(){
        $(this).closest("div").fadeOut();
    })
</script>
</body>
</html>
