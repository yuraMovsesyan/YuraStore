<!doctype html>
<html lang="en" data-theme="dark">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Yura.Store</title>
        <meta name="description" content="Open source games.">
        <link rel="shortcut icon" href="./img/icon.png">
        <link rel="canonical" href="https://github.com/yuraMovsesyan">

        <!-- AMP runtime -->
        <script async src="https://cdn.ampproject.org/v0.js"></script>

        <!-- AMP components -->
        <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>

        <!-- AMP boilerplate -->
        <style amp-boilerplate="">body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style>
        <noscript><style amp-boilerplate="">body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>

        <!-- Google font: Calistoga -->
        <link href="https://fonts.googleapis.com/css2?family=Calistoga&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/pico.css" type="text/css">

    </head>

    <body>

        <?php
            include "./menu.php";
        ?>

        <!-- Nav -->
        <nav>
            <ul>
                <li>
                    <button on="tap:sidebar-left.toggle" aria-label="Close menu">
                        <svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="16px" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                    </button>
                </li>
            </ul>
            <ul>
                <li><h1>Yura.Store</h1></li>
            </ul>
            <ul>
                <li>
                <a href="https://github.com/yuraMovsesyan" aria-label="github">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                    </svg>
                </a>
                </li>
            </ul>
        </nav><!-- ./ Nav -->

        <!-- Main -->
        <main>
            <hgroup>
                <h1>H2</h1>
                <h2>Minimalistic anroid game</h2>
            </hgroup>
            <figure>
                <center>
                    <amp-img src="https://raw.githubusercontent.com/yuraMovsesyan/h2/android/h2-gif.gif"
                            width="300"
                            height="500"
                            layout=""
                            alt="Cupcake">
                    </amp-img>
                </center>
            </figure>
            <p>
                <a href="https://github.com/yuraMovsesyan/h2/releases/download/android/h2.apk" role="button">Download</a>
                <a href="https://github.com/yuraMovsesyan/h2" role="button">GitHub</a>
            </p>
            <p>
                Games are created using free tools. All materials for the game are taken from open sources in which they are distributed for free. At the same time, not a single game is not monetized and is created exclusively with open source code.
            </p>
        </main><!-- ./ Main -->

        <!-- Footer -->
        <footer>
            <small>Built with <a href="https://picocss.com">Pico</a> • <a href="https://github.com/yuraMovsesyan/YuraStore">Source code</a> • <a href="https://github.com/yuraMovsesyan">Author</a></small>
        </footer><!-- ./ Footer -->
    </body>
</html>