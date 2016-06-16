<!doctype html>

<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>SchoolProfil</title>

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
    <!--<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.cyan-light_blue.min.css">-->


    <!--Materialize-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">


    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!--TABS-->
    <link rel="stylesheet" type="text/css" href="css/tabs/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/tabs/tabs.css" />
    <link rel="stylesheet" type="text/css" href="css/tabs/tabstyles.css" />

    <!--Search-->
    <link rel="stylesheet" type="text/css" href="css/search/component.css" />

    <link rel="stylesheet" type="text/css" href="noiuslider/nouislider.css"/>

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="mdl/material.css">
    <link rel="stylesheet" href="css/schoolin.css">


</head>
<body>
<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <!-- Button trigger modal -->
    <?php
    include ('header.php');
    include ('nav.php');
    ?>

    <main class="mdl-layout__content mdl-color--grey-100">

        <div class="mdl-grid demo-content sky" >
            <h3>INstitut Supérieur des Sciences Et Techniques</h3><br/>

            <div class="row" >
                <div class="pull-left col-md-4" >
                    <div class="panel panel-default">
                        <div class="panel-body logo" >
                            <img src="images/insset.png" width="150px"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" >
                    <div class="panel panel-default" >
                        <div class="panel-heading" >Coordonées</div>
                        <div class="panel-body spinning " >
                            48 rue d'Ostende<br/>
                            02315 Saint-Quentin<br/>
                            03 23 62 89 59<br/>
                            accueil@insset.u-picardie.fr<br/>
                            <a href="http://www.insset.u-picardie.fr/">http://www.insset.u-picardie.fr/</a>
                        </div>
                    </div>
                </div>
                <div class="pull-left col-md-4" >
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <a data-widget="itineraire" href="#itineraire-widget" class="btn  blue" style="display:block;margin:auto," data-toggle="modal">
                                Candidatez
                            </a>
                        </div>
                    </div>
                </div>
                <div class="pull-left col-md-4" >
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <a class="btn  blue" style="display:block;margin:auto;"id="show-dialog" >
                                Déjà étudié ici ?
                            </a>
                        </div>
                    </div>
                </div>
                </div>

            <div class="row" >

                <div class="col-md-4" >
                    <div class=" panel panel-default ">
                        <div class="panel-heading">Domaine(s) d'études</div>
                        <div class="panel-body block"><ul><li>Système Embarqué</li><li>Logistique</li>Web</ul></div>
                    </div>
                </div>

                <div class="col-md-4" >
                    <div class=" panel panel-default ">
                        <div class="panel-heading">Diplômes</div>
                        <div class="panel-body block"><ul><div class="list"><li>Licence SPI</li><li>Licence Pro Web</li><li>Master CCM</li></div><div class="list"><li>Master CSP</li><li>Master SE</li><li>Master MIL-LI</li></div></ul></div>
                    </div>
                </div>
                <div class="col-md-4" >
                    <div class=" panel panel-default ">
                        <div class="panel-heading">Commentaires</div>
                        <div class="panel-body">"Des cours toujours à la pointe ! "<br/><a href="profil.php">Christian</a></div>
                    </div>
                </div>
                </div>



    </main>


    <dialog class="mdl-dialog">
        <h4 class="mdl-dialog__title ">Déjà étudié ici ?</h4>
        <div class="mdl-dialog__content">
            <form class="form-horizontal">

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Diplôme</label>
                    <div class="col-sm-10">
                        <select class="form-control">
                            <option>Aucun</option>
                            <optgroup label="Licence">
                                <option>Licence SPI</option>
                                <option>Licence Pro Web</option>
                            </optgroup>
                            <optgroup label="Master">
                                <option>Master CCM</option>
                                <option>Master MIL-LI</option>
                                <option>Master SE</option>
                                <option>Master CSP</option>
                        </select>
                    </div>
                </div>
                <div class="form-group" style="margin-left: 20%;">
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
                        <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input">
                        <span class="mdl-checkbox__label">Ceci est ma formation actuelle</span>
                    </label>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Commentaire</label>
                    <div class="col-sm-10">
                        <textarea id="mycom" placeholder="Donnez votre avis sur cet établissement..."></textarea>
                    </div>
                </div>
            </form>
        </div>
        <div class="mdl-dialog__actions">

            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect close">
                Valider
            </button>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect close" >
                Annuler</button>
        </div>
    </dialog>
</div>

<?php include('chat.php');?>

<!--JAVASCRIPT-->
<!--JQUERY-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--BOOTSTRAP-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!--Materialize -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>-->
<!--Tabs-->
<script src="js/tabs/cbpFWTabs.js"></script>

<script src="noiuslider/nouislider.js"></script>
<script>
    (function() {

        [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
            new CBPFWTabs( el );
        });

    })();
</script>
<script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
<script src="js/search/search.js"></script>

<script>
    var dialog = document.querySelector('dialog');
    var showDialogButton = document.querySelector('#show-dialog');
    if (! dialog.showModal) {
        dialogPolyfill.registerDialog(dialog);
    }
    showDialogButton.addEventListener('click', function() {
        dialog.showModal();
        $('body').css('opacity','0.1');
    });
    dialog.querySelector('.close').addEventListener('click', function() {
        dialog.close();
        $('body').css('opacity','1');
        mycom='"'+$('#mycom').val()+'"';
        $('.montxt').text(mycom);
        $('.moncom').fadeIn();
    });
</script>
<script>
    var slider = document.getElementById('periode');
    noUiSlider.create(slider, {
        start: [1950, 2016],
        connect: true,
        step: 1,
        range: {
            'min': 0,
            'max': 100
        }

    });

    if()
</script>

</body>
</html>
