<!doctype html>

<html lang="en">
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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

  <!--Windy-->
  <link rel="stylesheet" type="text/css" href="css/windy.css" />
  <link rel="stylesheet" type="text/css" href="css/style1.css" />
  <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
  <noscript><link rel="stylesheet" type="text/css" href="css/noJS.css" /></noscript>

  <!--Bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!--Search-->
  <link rel="stylesheet" type="text/css" href="css/search/component.css" />

  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="mdl/material.css">
  <link rel="stylesheet" href="css/schoolin.css">


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

  <main class="mdl-layout__content mdl-color--grey-100">


    <div class="mdl-grid demo-content sky" >
      <h3>Le monde étudiant aujourd'hui...</h3>
      <div class="row">
        <article class="col-md-8 windy-demo ">

            <?php include('bloc_event.php') ?>

        </article>
        <aside class="col-md-4">
          <h4><i class="material-icons">thumb_up</i> Bons plans</h4>
            <div class=" panel panel-default ">
              <div class="panel-heading  blue">Cinéma Cinéquai Saint-Quentin</div>
              <div class="panel-body">7€ la place avec votre carte étudiante !</div>
            </div>
            <div class=" panel panel-default ">
              <div class="panel-heading  blue">Yann Coiffure Saint-Quentin</div>
              <div class="panel-body">Tarif réduit pour les étudiants</div>
            </div>
        </aside>
      </div>


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

<!--Search-->
<script type="text/javascript" src="js/search/classie.js"></script>
<script src="js/search/search.js"></script>

<!--Event-->
<script type="text/javascript" src="js/jquery.windy.js"></script>
<script type="text/javascript" src="js/event.js"></script>

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


</body>
</html>
