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



            <h2>Nom Entreprise</h2><br/>

            <div class="row" >
                <div class="pull-left col-md-3" >
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="images/yes-we-code.png" width="150px"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" >
                    <div class="panel panel-default" >
                        <div class="panel-heading" >Coordonées</div>
                        <div class="panel-body spinning " >91 Route d'Abbeville</br>80000 Amiens</br>0605040302<br/>gbailleul@yes-we-code.fr</div>
                    </div>
                </div>
                <div class="pull-left col-md-3" >
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <a data-widget="itineraire" href="#itineraire-widget" class="btn  blue" style="display:block;margin:auto," data-toggle="modal">
                                Postulez
                            </a>
                        </div>
                    </div>
                </div>
                <div class="pull-left col-md-3" >
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <a class="btn  blue" style="display:block;margin:auto;" data-toggle="modal">
                                Déjà travaillé ici ?
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row" >


                <div class="col-md-4" >
                    <div class=" panel panel-default ">
                        <div class="panel-heading">Annonces</div>
                        <div class="panel-body">"Recherche étudiant Bac +2 minimum développement web (stage)"</div>
                    </div>
                </div>
                <div class="col-md-4" >
                    <div class=" panel panel-default ">
                        <div class="panel-heading">Commentaires</div>
                        <div class="panel-body">"Je garde un super souvenir de ce stage dans cette entreprise" <a>Marine</a></div>
                    </div>
                </div>

            </div>


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
