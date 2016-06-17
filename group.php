<?php
    session_start();/*
    var_dump($_SESSION);*/
    require "connect.php";
    if (!isset($_SESSION['id_user']) || empty($_SESSION['id_user'])) {
        //header('location:login.php');
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
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
        <!--
            SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones
        -->
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
        <title>SchoolGroup</title>
    </head>
    <body>
        <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
            <?php
                include ('header.php');
                include ('nav.php');
            ?>
            <main class="mdl-layout__content mdl-color--grey-100">
                <div class="mdl-grid demo-content sky" >
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="row" id="col1" style="overflow:auto;">
                                <div class="col-sm-12">
                                    <h2 id="connected">
                                    </h2>
                                    <div id="tchat">
                                        <?php
                                            $sql = "SELECT * FROM si_messages ORDER BY date DESC LIMIT 1";
                                            $req = mysqli_query($link, $sql) or die(mysql_error());
                                            $d = array();
                                            while ($data = $req->fetch_assoc()) {
                                                $d[] = $data;
                                            }
                                            for($i = count($d)-1; $i>=0; $i--) {
                                        ?>
                                                <p>
                                                    <strong>
                                                        <?php
                                                            $sql = "SELECT * FROM si_users WHERE id ='" . $d[$i]['id_user'] . "' ";
                                                            $req = mysqli_query($link, $sql) or die(mysql_error());
                                                            $data= $req->fetch_assoc();
                                                            if ( ($data['firstname'] == '') && ($data['lastname'] == '') ) { //1
                                                                echo $data['email'];
                                                            } elseif ($data['firstname'] == '') { // 2
                                                                echo $data['lastname'];
                                                            } elseif ($data['lastname'] == '') { // 3
                                                                echo $data['firstname'];
                                                            } else { // 4
                                                                echo $data['firstname'] . ' ' . $data['lastname'];;
                                                            }
                                                            //echo $d[$i]['pseudo']; ?>
                                                    </strong> (
                                                    <?php
                                                        echo date("d/m/Y H:i:s", $d[$i]['date']); ?>) : <?php echo htmlentities($d[$i]['message']);
                                                    ?>
                                                </p>
                                        <?php
                                            }
                                        ?>
                                    </div> <!--/#tchat-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <form class="form-inline" id="tchatForm">
                                        <div class="form-group">
                                            <textarea name="" class="form-control" id="message" placeholder="Tapez votre message ici." style="width:200%;"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default" style="margin-left:200px;margin-bottom:-30px">Envoyer</button>
                                    </form>
                                </div>
                            </div>

                        </div><!--/.col-sm-8-->
                        <br>
                        <div class="col-sm-4" id="col2" style="overflow:auto;">

                            <div class="panel panel-default">
                              <div class="panel-heading">Panel Heading 1</div>
                              <div class="panel-body" style="height:250px">Panel Content 1</div>
                            </div>

                            <div class="panel panel-default">
                              <div class="panel-heading">Panel Heading 2</div>
                              <div class="panel-body" style="height:250px">Panel Content 2</div>
                            </div>

                        </div><!--/.col-sm-4-->
                    </div><!--/.row-->
                   
                </div>

            </main>
        
        </div>
        <?php /*
        <!--
        <a target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect blue mdl-color-text--white">
            Chat
        </a>
        -->*/
        ?>
            <?php
                $sql = "SELECT id FROM si_messages ORDER BY id DESC LIMIT 1";
                $req = mysqli_query($link,$sql) or die(mysql_error());
                $data= mysqli_fetch_assoc($req);
                $lastid=$data['id'];
                echo "<input type=\"hidden\" id=\"lastid\" value=\"" . $lastid . "\" >";
            ?>
        <!--JAVASCRIPT-->

        <!--JQUERY-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--BOOTSTRAP-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!--Materialize -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
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
            function autoResizeDiv(){
                document.getElementById('col1').style.height = (window.innerHeight-250) +'px';
                document.getElementById('col2').style.height = (window.innerHeight-250) +'px';
            }
            window.onresize = autoResizeDiv;
            autoResizeDiv();
        </script>
        <script type="text/javascript" src="tchat.js"></script>
    </body>
</html>