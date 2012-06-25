<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en-us" class="no-js"> <!--<![endif]-->
    <head>
        <?php
            require 'functions.php';
            $slogan = get_slogan();
            $social = get_social();
        ?>
        <meta charset="utf-8" />
        <title>SeanJA.info | <?php echo strip_tags($slogan) ?></title>
        <meta name="description" content="SeanJA's Info" />
        <meta name="author" content="SeanJA" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="http://seanja.com/favicon.ico" />
        <script src="js/libs/modernizr-1.7.min.js"></script>

        <style>
           body{
                visibility: hidden;
            }
        </style>
    </head>
    <body>
        <div id="container">
            <div id="ch-ch-ch-ch-ch"></div>
            <header>
                <h1>Interact with SeanJA</h1>
                <h2><?php echo $slogan; ?></h2>
            </header>
            <div id="main" role="main">
                <div id="social">
                    <?php foreach ($social as $s): ?>
                        <div class="links blur" id="<?php echo $s['id']; ?>" >
                            <a target="_blank" title="<?php echo $s['id']; ?>" href="<?php echo $s['link']; ?>">
                                <img src="img/social/<?php echo $s['id']; ?>.png" alt="<?php echo $s['id']; ?>" />
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <footer>
                <a class="disclaimer" href="http://seanja.mtamo.com" target="_blank">Disclaimer</a>
            </footer>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
        <script>window.jQuery || document.write("<script src='js/libs/jquery-1.5.1.min.js'>\x3C/script>")</script>
        <script src="js/plugins.js"></script>
        <script src="js/script.js"></script>
        <!--[if lt IE 7 ]>
          <script src="js/libs/dd_belatedpng.js"></script>
          <script>DD_belatedPNG.fix("img, .png_bg"); // Fix any <img> or .png_bg bg-images. Also, please read goo.gl/mZiyb </script>
        <![endif]-->
        <script type="text/javascript" src="http://www.cornify.com/js/cornify.js"></script>
        <script>
            var _gaq=[["_setAccount","UA-4779209-8"],["_trackPageview"]];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
                g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
                s.parentNode.insertBefore(g,s)}(document,"script"));
        </script>
        <link href='http://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="css/style.css" />
    </body>
</html>