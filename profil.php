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
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.cyan-light_blue.min.css">
      <link rel="stylesheet" href="mdl/material.css">


    <link rel="stylesheet" href="css/_panels.scss">

      <!--Materialize-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">



      <!--Bootstrap-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

      <!--TABS-->
      <link rel="stylesheet" type="text/css" href="css/tabs/demo.css" />
      <link rel="stylesheet" type="text/css" href="css/tabs/tabs.css" />
      <link rel="stylesheet" type="text/css" href="css/tabs/tabstyles.css" />

      <!--Search-->
      <link rel="stylesheet" type="text/css" href="css/search/component.css" />

      <link rel="stylesheet" href="css/styles.css">
      <link rel="stylesheet" href="mdl/material.css">
      <link rel="stylesheet" href="css/schoolin.css">


  </head>
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <?php
      include ('header.php');
      include ('nav.php');
      ?>

        <main class="mdl-layout__content mdl-color--grey-100">

            <div class="mdl-grid demo-content sky bleu" >
                <!--<a target="_blank" id="edit" class="edit mdl-button mdl-js-button mdl-button--raised   mdl-color-text--white blue">Modifier</a>
                <a target="_blank" id="save" class="save mdl-button mdl-js-button mdl-button--raised   mdl-color-text--white blue " style="display: none;">Sauvegarder</a>
                -->

                <div class="row" >
                    <div col-md-6 style="display: inline-block;">
                        <h3>Pierre Delacourt</h3>
                        <h4>pierre.delacourt@gmail.com</h4><br/>
                    </div>


                    <div class="demo-card-image mdl-card mdl-shadow--2dp col-md-6" style="display: inline-block;float: right;width: 200px;">
                        <div class="mdl-card__title mdl-card--expand"></div>
                        <div class="mdl-card__actions">
                            <span class="demo-card-image__filename">Votre photo</span>
                        </div>
                    </div>
                </div>


                <div class="tag">
                  <?php
                  include_once('Models/groups.php');
                  $objGroup = new Groups();

                  $groups = $objGroup->getAll();

                  foreach($groups as $group):
                      echo '<div class="chip"><a href="group.php">'.$group['name'].'</a><i class="material-icons close">close</i></div>';
                  endforeach;
                  ?>
                <!--div class="chip"><a href="group.php">CCM</a><i class="material-icons close">close</i></div>
                <div class="chip"><a href="group.php">M1</a><i class="material-icons close">close</i></div>
                <div class="chip"><a href="group.php">Insset</a><i class="material-icons close">close</i></div><div class="chip"><a href="group.php">Football</a><i class="material-icons close">close</i></div-->
                <div class="chip"><input id="tag"  placeholder="..."/><i class="material-icons close">close</i></div>

        </div>

                <hr/>

                <svg class="hidden">
                    <defs>
                        <path id="tabshape" d="M80,60C34,53.5,64.417,0,0,0v60H80z"/>
                    </defs>
                </svg>
                <div class="container">
                    <div class="tabs tabs-style-shape">
                        <nav>
                            <ul>
                                <li>
                                    <a href="#section-shape-1">
                                        <svg viewBox="0 0 80 60" preserveAspectRatio="none"><use xlink:href="#tabshape"></use></svg>
                                        <span>Infos</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#section-shape-2">
                                        <svg viewBox="0 0 80 60" preserveAspectRatio="none"><use xlink:href="#tabshape"></use></svg>
                                        <svg viewBox="0 0 80 60" preserveAspectRatio="none"><use xlink:href="#tabshape"></use></svg>
                                        <span>Publications</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#section-shape-3">
                                        <svg viewBox="0 0 80 60" preserveAspectRatio="none"><use xlink:href="#tabshape"></use></svg>
                                        <svg viewBox="0 0 80 60" preserveAspectRatio="none"><use xlink:href="#tabshape"></use></svg>
                                        <span>Camarades</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="content-wrap">
                            <section id="section-shape-1">
                                <div class="panel panel-default ">
                                    <div class="panel-heading"><i class="material-icons">work</i> Expérience</div>
                                    <div class="panel-body">
                                        <p>est en stage (3mois) dans l'entreprise <a class="bleu" href="espacepro.php">Yes-We-Code</a></p>
                                    </div>
                                </div>

                                <div class="panel panel-default  ">
                                    <div class="panel-heading"><i class="material-icons">school</i> Formation</div>
                                    <div class="panel-body"><p>a été acceptée en M2 Cloud Computing&Mobility à l'<a href="formation.php">INSSET</a></p></div>
                                </div></section>

                            <section id="section-shape-2"><p>2</p></section>
                            <section id="section-shape-3"><p>3</p></section>

                        </div><!-- /content -->
                    </div><!-- /tabs -->


                </div><!-- /container -->


            </div>
        </main>
    </div>

    <?php include('chat.php');?>
    <!--JAVASCRIPT-->
        <!--JQUERY-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--BOOTSTRAP-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!--Materialize -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
        <!--Tabs-->
        <script src="js/tabs/cbpFWTabs.js"></script>
        <!--Search-->
        <script type="text/javascript" src="js/search/classie.js"></script>
        <script src="js/search/search.js"></script>
        <script>
        (function() {

            [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
                new CBPFWTabs( el );
            });

        })();
        </script>
        <script src="https://code.getmdl.io/1.1.3/material.min.js"></script>

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
  <script src="js/profil.js" ></script>
</body>
</html>
