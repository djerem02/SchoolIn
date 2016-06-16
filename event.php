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


    <!--Windy-->
    <link rel="stylesheet" type="text/css" href="css/windy.css" />
    <link rel="stylesheet" type="text/css" href="css/style1.css" />
    <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
    <noscript><link rel="stylesheet" type="text/css" href="css/noJS.css" /></noscript>

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

        .demo-card-event.mdl-card {
            width: 256px;
            height: 256px;
            background: #3E4EB8;
        }
        .demo-card-event > .mdl-card__actions {
            border-color: rgba(255, 255, 255, 0.2);
        }
        .demo-card-event > .mdl-card__title {
            align-items: flex-start;
        }
        .demo-card-event > .mdl-card__title > h4 {
            margin-top: 0;
        }
        .demo-card-event > .mdl-card__actions {
            display: flex;
            box-sizing:border-box;
            align-items: center;
        }
        .demo-card-event > .mdl-card__actions > .material-icons {
            padding-right: 10px;
        }
        .demo-card-event > .mdl-card__title,
        .demo-card-event > .mdl-card__actions,
        .demo-card-event > .mdl-card__actions > .mdl-button {
            color: #fff;
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


            <div class="windy-demo">
                <ul id="wi-el" class="wi-container">
                    <li><img src="images/demo1/1.jpg" alt="image1"/><h4>Coco Loko</h4><p>Total bicycle rights in blog four loko raw denim ex, helvetica sapiente odio placeat.</p></li>
                    <li><img src="images/demo1/2.jpg" alt="image2"/><h4>Vermouth Land</h4><p>Velit chambray fugiat, enim aesthetic esse ullamco typewriter.</p></li>
                    <li><img src="images/demo1/3.jpg" alt="image3"/><h4>Electrodynamics</h4><p>Before they sold out PBR magna jean shorts non seitan ea. Dolor wolf pop-up.</p></li>
                    <li><img src="images/demo1/4.jpg" alt="image4"/><h4>Retinal Bliss</h4><p>Locavore vero ad, before they sold out food truck bushwick helvetica.</p></li>
                    <li><img src="images/demo1/5.jpg" alt="image5"/><h4>Disco Fever</h4><p>Cillum laboris consequat, qui elit retro next level skateboard freegan hella.</p></li>
                    <li><img src="images/demo1/6.jpg" alt="image6"/><h4>Serenity</h4><p>Truffaut wes anderson hoodie 3 wolf moon labore, fugiat lomo iphone eiusmod vegan.</p></li>
                    <li><img src="images/demo1/7.jpg" alt="image7"/><h4>Dark Honor</h4><p>Chillwave mustache pinterest, marfa seitan umami id farm-to-table iphone.</p></li>
                    <li><img src="images/demo1/8.jpg" alt="image8"/><h4>Nested Happiness</h4><p>Minim post-ironic banksy american apparel iphone wayfarers.</p></li>
                    <li><img src="images/demo1/9.jpg" alt="image9"/><h4>Cherry Country</h4><p>Sint vinyl Austin street art odd future id trust fund, terry richardson cray.</p></li>
                    <li><img src="images/demo1/10.jpg" alt="image10"/><h4>Blossom Delight</h4><p>Craft beer gentrify nihil pariatur aliqua high life, irony cosby sweater.</p></li>
                    <li><img src="images/demo1/11.jpg" alt="image11"/><h4>Heartbeat</h4><p>Cliche vinyl consequat, carles wolf Austin williamsburg post-ironic mcsweeney's.</p></li>
                    <li><img src="images/demo1/12.jpg" alt="image12"/><h4>Inner Organs</h4><p>Deserunt reprehenderit pour-over marfa VHS occaecat, aesthetic belly DIY.</p></li>
                    <li><img src="images/demo1/13.jpg" alt="image13"/><h4>Wanted Darkness</h4><p>Organic irony incididunt blog retro, fanny pack nisi salvia.</p></li>
                    <li><img src="images/demo1/14.jpg" alt="image14"/><h4>Blessed Fever</h4><p>Twee biodiesel fugiat ut. Thundercats mcsweeney's occaecat brooklyn mollit.</p></li>
                    <li><img src="images/demo1/15.jpg" alt="image15"/><h4>Origins</h4><p>Quinoa marfa banksy nostrud brunch bushwick PBR. Mcsweeney's bushwick banksy.</p></li>
                    <li><img src="images/demo1/16.jpg" alt="image16"/><h4>Fire Lime</h4><p>Brunch fugiat locavore, swag photo booth keffiyeh labore small batch.</p></li>
                    <li><img src="images/demo1/17.jpg" alt="image17"/><h4>Host Rumor</h4><p>Helvetica wayfarers ea enim, street art you probably haven't heard of.</p></li>
                    <li><img src="images/demo1/18.jpg" alt="image18"/><h4>Lovely Feast</h4><p>Semiotics ennui VHS high life you probably haven't heard of them sed craft beer.</p></li>
                    <li><img src="images/demo1/19.jpg" alt="image19"/><h4>Red Greatness</h4><p>Cray 8-bit cliche, consequat VHS mumblecore salvia tattooed typewriter.</p></li>
                    <li><img src="images/demo1/20.jpg" alt="image20"/><h4>Hollow Soul</h4><p>Kale chips enim eiusmod narwhal, magna before they sold out locavore.</p></li>
                    <li><img src="images/demo1/1.jpg" alt="image1"/><h4>Coco Loko</h4><p>Total bicycle rights in blog four loko raw denim ex, helvetica sapiente odio placeat.</p></li>
                    <li><img src="images/demo1/2.jpg" alt="image2"/><h4>Vermouth Land</h4><p>Velit chambray fugiat, enim aesthetic esse ullamco typewriter.</p></li>
                    <li><img src="images/demo1/3.jpg" alt="image3"/><h4>Electrodynamics</h4><p>Before they sold out PBR magna jean shorts non seitan ea. Dolor wolf pop-up.</p></li>
                    <li><img src="images/demo1/4.jpg" alt="image4"/><h4>Retinal Bliss</h4><p>Locavore vero ad, before they sold out food truck bushwick helvetica.</p></li>
                    <li><img src="images/demo1/5.jpg" alt="image5"/><h4>Disco Fever</h4><p>Cillum laboris consequat, qui elit retro next level skateboard freegan hella.</p></li>
                    <li><img src="images/demo1/6.jpg" alt="image6"/><h4>Serenity</h4><p>Truffaut wes anderson hoodie 3 wolf moon labore, fugiat lomo iphone eiusmod vegan.</p></li>
                    <li><img src="images/demo1/7.jpg" alt="image7"/><h4>Dark Honor</h4><p>Chillwave mustache pinterest, marfa seitan umami id farm-to-table iphone.</p></li>
                    <li><img src="images/demo1/8.jpg" alt="image8"/><h4>Nested Happiness</h4><p>Minim post-ironic banksy american apparel iphone wayfarers.</p></li>
                    <li><img src="images/demo1/9.jpg" alt="image9"/><h4>Cherry Country</h4><p>Sint vinyl Austin street art odd future id trust fund, terry richardson cray.</p></li>
                    <li><img src="images/demo1/10.jpg" alt="image10"/><h4>Blossom Delight</h4><p>Craft beer gentrify nihil pariatur aliqua high life, irony cosby sweater.</p></li>
                    <li><img src="images/demo1/11.jpg" alt="image11"/><h4>Heartbeat</h4><p>Cliche vinyl consequat, carles wolf Austin williamsburg post-ironic mcsweeney's.</p></li>
                    <li><img src="images/demo1/12.jpg" alt="image12"/><h4>Inner Organs</h4><p>Deserunt reprehenderit pour-over marfa VHS occaecat, aesthetic belly DIY.</p></li>
                    <li><img src="images/demo1/13.jpg" alt="image13"/><h4>Wanted Darkness</h4><p>Organic irony incididunt blog retro, fanny pack nisi salvia.</p></li>
                    <li><img src="images/demo1/14.jpg" alt="image14"/><h4>Blessed Fever</h4><p>Twee biodiesel fugiat ut. Thundercats mcsweeney's occaecat brooklyn mollit.</p></li>
                    <li><img src="images/demo1/15.jpg" alt="image15"/><h4>Origins</h4><p>Quinoa marfa banksy nostrud brunch bushwick PBR. Mcsweeney's bushwick banksy.</p></li>
                    <li><img src="images/demo1/16.jpg" alt="image16"/><h4>Fire Lime</h4><p>Brunch fugiat locavore, swag photo booth keffiyeh labore small batch.</p></li>
                    <li><img src="images/demo1/17.jpg" alt="image17"/><h4>Host Rumor</h4><p>Helvetica wayfarers ea enim, street art you probably haven't heard of.</p></li>
                    <li><img src="images/demo1/18.jpg" alt="image18"/><h4>Lovely Feast</h4><p>Semiotics ennui VHS high life you probably haven't heard of them sed craft beer.</p></li>
                    <li><img src="images/demo1/19.jpg" alt="image19"/><h4>Red Greatness</h4><p>Cray 8-bit cliche, consequat VHS mumblecore salvia tattooed typewriter.</p></li>
                    <li><img src="images/demo1/20.jpg" alt="image20"/><h4>Hollow Soul</h4><p>Kale chips enim eiusmod narwhal, magna before they sold out locavore.</p></li>
                    <li><img src="images/demo1/1.jpg" alt="image1"/><h4>Coco Loko</h4><p>Total bicycle rights in blog four loko raw denim ex, helvetica sapiente odio placeat.</p></li>
                    <li><img src="images/demo1/2.jpg" alt="image2"/><h4>Vermouth Land</h4><p>Velit chambray fugiat, enim aesthetic esse ullamco typewriter.</p></li>
                    <li><img src="images/demo1/3.jpg" alt="image3"/><h4>Electrodynamics</h4><p>Before they sold out PBR magna jean shorts non seitan ea. Dolor wolf pop-up.</p></li>
                    <li><img src="images/demo1/4.jpg" alt="image4"/><h4>Retinal Bliss</h4><p>Locavore vero ad, before they sold out food truck bushwick helvetica.</p></li>
                    <li><img src="images/demo1/5.jpg" alt="image5"/><h4>Disco Fever</h4><p>Cillum laboris consequat, qui elit retro next level skateboard freegan hella.</p></li>
                    <li><img src="images/demo1/6.jpg" alt="image6"/><h4>Serenity</h4><p>Truffaut wes anderson hoodie 3 wolf moon labore, fugiat lomo iphone eiusmod vegan.</p></li>
                    <li><img src="images/demo1/7.jpg" alt="image7"/><h4>Dark Honor</h4><p>Chillwave mustache pinterest, marfa seitan umami id farm-to-table iphone.</p></li>
                    <li><img src="images/demo1/8.jpg" alt="image8"/><h4>Nested Happiness</h4><p>Minim post-ironic banksy american apparel iphone wayfarers.</p></li>
                    <li><img src="images/demo1/9.jpg" alt="image9"/><h4>Cherry Country</h4><p>Sint vinyl Austin street art odd future id trust fund, terry richardson cray.</p></li>
                    <li><img src="images/demo1/10.jpg" alt="image10"/><h4>Blossom Delight</h4><p>Craft beer gentrify nihil pariatur aliqua high life, irony cosby sweater.</p></li>
                    <li><img src="images/demo1/11.jpg" alt="image11"/><h4>Heartbeat</h4><p>Cliche vinyl consequat, carles wolf Austin williamsburg post-ironic mcsweeney's.</p></li>
                    <li><img src="images/demo1/12.jpg" alt="image12"/><h4>Inner Organs</h4><p>Deserunt reprehenderit pour-over marfa VHS occaecat, aesthetic belly DIY.</p></li>
                    <li><img src="images/demo1/13.jpg" alt="image13"/><h4>Wanted Darkness</h4><p>Organic irony incididunt blog retro, fanny pack nisi salvia.</p></li>
                    <li><img src="images/demo1/14.jpg" alt="image14"/><h4>Blessed Fever</h4><p>Twee biodiesel fugiat ut. Thundercats mcsweeney's occaecat brooklyn mollit.</p></li>
                    <li><img src="images/demo1/15.jpg" alt="image15"/><h4>Origins</h4><p>Quinoa marfa banksy nostrud brunch bushwick PBR. Mcsweeney's bushwick banksy.</p></li>
                    <li><img src="images/demo1/16.jpg" alt="image16"/><h4>Fire Lime</h4><p>Brunch fugiat locavore, swag photo booth keffiyeh labore small batch.</p></li>
                    <li><img src="images/demo1/17.jpg" alt="image17"/><h4>Host Rumor</h4><p>Helvetica wayfarers ea enim, street art you probably haven't heard of.</p></li>
                    <li><img src="images/demo1/18.jpg" alt="image18"/><h4>Lovely Feast</h4><p>Semiotics ennui VHS high life you probably haven't heard of them sed craft beer.</p></li>
                    <li><img src="images/demo1/19.jpg" alt="image19"/><h4>Red Greatness</h4><p>Cray 8-bit cliche, consequat VHS mumblecore salvia tattooed typewriter.</p></li>
                    <li><img src="images/demo1/20.jpg" alt="image20"/><h4>Hollow Soul</h4><p>Kale chips enim eiusmod narwhal, magna before they sold out locavore.</p></li>
                </ul>
                <nav>
                    <span id="nav-prev">prev</span>
                    <span id="nav-next">next</span>
                </nav>
            </div>


        </div>
    </main>
</div>



<a target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect blue mdl-color-text--white">Chat</a>
<script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--Windy-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.windy.js"></script>
<script type="text/javascript">
    $(function() {

        var $el = $( '#wi-el' ),
            windy = $el.windy(),
            allownavnext = false,
            allownavprev = false;

        $( '#nav-prev' ).on( 'mousedown', function( event ) {

            allownavprev = true;
            navprev();

        } ).on( 'mouseup mouseleave', function( event ) {

            allownavprev = false;

        } );

        $( '#nav-next' ).on( 'mousedown', function( event ) {

            allownavnext = true;
            navnext();

        } ).on( 'mouseup mouseleave', function( event ) {

            allownavnext = false;

        } );

        function navnext() {
            if( allownavnext ) {
                windy.next();
                setTimeout( function() {
                    navnext();
                }, 150 );
            }
        }

        function navprev() {
            if( allownavprev ) {
                windy.prev();
                setTimeout( function() {
                    navprev();
                }, 150 );
            }
        }

    });
</script>
</body>
</html>