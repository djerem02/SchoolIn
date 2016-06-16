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



    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="mdl/material.css">
    <link rel="stylesheet" href="css/schoolin.css">
    <link rel="stylesheet" href="css/search/component.css">


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


        <div class=" mdl-grid demo-content sky" >

            <div id="morphsearch" class="morphsearch">
                <form class="morphsearch-form">
                    <input class="morphsearch-input" type="search" placeholder="Search..."/>
                    <button class="morphsearch-submit" type="submit">Search</button>
                </form>
                <div class="morphsearch-content">
                    <div class="dummy-column">
                        <h2>People</h2>
                        <a class="dummy-media-object" href="http://twitter.com/SaraSoueidan">
                            <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G" alt="Sara Soueidan"/>
                            <h3>Sara Soueidan</h3>
                        </a>
                        <a class="dummy-media-object" href="http://twitter.com/rachsmithtweets">
                            <img class="round" src="http://0.gravatar.com/avatar/48959f453dffdb6236f4b33eb8e9f4b7?s=50&d=identicon&r=G" alt="Rachel Smith"/>
                            <h3>Rachel Smith</h3>
                        </a>
                        <a class="dummy-media-object" href="http://www.twitter.com/peterfinlan">
                            <img class="round" src="http://0.gravatar.com/avatar/06458359cb9e370d7c15bf6329e5facb?s=50&d=identicon&r=G" alt="Peter Finlan"/>
                            <h3>Peter Finlan</h3>
                        </a>
                        <a class="dummy-media-object" href="http://www.twitter.com/pcridesagain">
                            <img class="round" src="http://1.gravatar.com/avatar/db7700c89ae12f7d98827642b30c879f?s=50&d=identicon&r=G" alt="Patrick Cox"/>
                            <h3>Patrick Cox</h3>
                        </a>
                        <a class="dummy-media-object" href="https://twitter.com/twholman">
                            <img class="round" src="http://0.gravatar.com/avatar/cb947f0ebdde8d0f973741b366a51ed6?s=50&d=identicon&r=G" alt="Tim Holman"/>
                            <h3>Tim Holman</h3>
                        </a>
                        <a class="dummy-media-object" href="https://twitter.com/shaund0na">
                            <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G" alt="Shaun Dona"/>
                            <h3>Shaun Dona</h3>
                        </a>
                    </div>
                    <div class="dummy-column">
                        <h2>Popular</h2>
                        <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/08/05/page-preloading-effect/">
                            <img src="img/thumbs/PagePreloadingEffect.png" alt="PagePreloadingEffect"/>
                            <h3>Page Preloading Effect</h3>
                        </a>
                        <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/05/28/arrow-navigation-styles/">
                            <img src="img/thumbs/ArrowNavigationStyles.png" alt="ArrowNavigationStyles"/>
                            <h3>Arrow Navigation Styles</h3>
                        </a>
                        <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/06/19/ideas-for-subtle-hover-effects/">
                            <img src="img/thumbs/HoverEffectsIdeasNew.png" alt="HoverEffectsIdeasNew"/>
                            <h3>Ideas for Subtle Hover Effects</h3>
                        </a>
                        <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/07/14/freebie-halcyon-days-one-page-website-template/">
                            <img src="img/thumbs/FreebieHalcyonDays.png" alt="FreebieHalcyonDays"/>
                            <h3>Halcyon Days Template</h3>
                        </a>
                        <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/05/22/inspiration-for-article-intro-effects/">
                            <img src="img/thumbs/ArticleIntroEffects.png" alt="ArticleIntroEffects"/>
                            <h3>Inspiration for Article Intro Effects</h3>
                        </a>
                        <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/06/26/draggable-dual-view-slideshow/">
                            <img src="img/thumbs/DraggableDualViewSlideshow.png" alt="DraggableDualViewSlideshow"/>
                            <h3>Draggable Dual-View Slideshow</h3>
                        </a>
                    </div>
                    <div class="dummy-column">
                        <h2>Recent</h2>
                        <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/10/07/tooltip-styles-inspiration/">
                            <img src="img/thumbs/TooltipStylesInspiration.png" alt="TooltipStylesInspiration"/>
                            <h3>Tooltip Styles Inspiration</h3>
                        </a>
                        <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/09/23/animated-background-headers/">
                            <img src="img/thumbs/AnimatedHeaderBackgrounds.png" alt="AnimatedHeaderBackgrounds"/>
                            <h3>Animated Background Headers</h3>
                        </a>
                        <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/09/16/off-canvas-menu-effects/">
                            <img src="img/thumbs/OffCanvas.png" alt="OffCanvas"/>
                            <h3>Off-Canvas Menu Effects</h3>
                        </a>
                        <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/09/02/tab-styles-inspiration/">
                            <img src="img/thumbs/TabStyles.png" alt="TabStyles"/>
                            <h3>Tab Styles Inspiration</h3>
                        </a>
                        <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/08/19/making-svgs-responsive-with-css/">
                            <img src="img/thumbs/ResponsiveSVGs.png" alt="ResponsiveSVGs"/>
                            <h3>Make SVGs Responsive with CSS</h3>
                        </a>
                        <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/07/23/notification-styles-inspiration/">
                            <img src="img/thumbs/NotificationStyles.png" alt="NotificationStyles"/>
                            <h3>Notification Styles Inspiration</h3>
                        </a>
                    </div>
                </div><!-- /morphsearch-content -->
                <span class="morphsearch-close"></span>
            </div><!-- /morphsearch -->

            <script src="js/classie.js"></script>
            <script>
                (function() {
                    var morphSearch = document.getElementById( 'morphsearch' ),
                        input = morphSearch.querySelector( 'input.morphsearch-input' ),
                        ctrlClose = morphSearch.querySelector( 'span.morphsearch-close' ),
                        isOpen = isAnimating = false,
                    // show/hide search area
                        toggleSearch = function(evt) {
                            // return if open and the input gets focused
                            if( evt.type.toLowerCase() === 'focus' && isOpen ) return false;

                            var offsets = morphsearch.getBoundingClientRect();
                            if( isOpen ) {
                                classie.remove( morphSearch, 'open' );

                                // trick to hide input text once the search overlay closes
                                // todo: hardcoded times, should be done after transition ends
                                if( input.value !== '' ) {
                                    setTimeout(function() {
                                        classie.add( morphSearch, 'hideInput' );
                                        setTimeout(function() {
                                            classie.remove( morphSearch, 'hideInput' );
                                            input.value = '';
                                        }, 300 );
                                    }, 500);
                                }

                                input.blur();
                            }
                            else {
                                classie.add( morphSearch, 'open' );
                            }
                            isOpen = !isOpen;
                        };

                    // events
                    input.addEventListener( 'focus', toggleSearch );
                    ctrlClose.addEventListener( 'click', toggleSearch );
                    // esc key closes search overlay
                    // keyboard navigation events
                    document.addEventListener( 'keydown', function( ev ) {
                        var keyCode = ev.keyCode || ev.which;
                        if( keyCode === 27 && isOpen ) {
                            toggleSearch(ev);
                        }
                    } );


                    /***** for demo purposes only: don't allow to submit the form *****/
                    morphSearch.querySelector( 'button[type="submit"]' ).addEventListener( 'click', function(ev) { ev.preventDefault(); } );
                })();
            </script>
        </div>
    </main>
</div>

<a target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect blue mdl-color-text--white">Chat</a>

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
</script>
</body>
</html>
