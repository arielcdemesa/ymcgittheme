<!doctype html>
<html>
    <body>

        <head>
            <title>A Basic Starting Point</title>
            <meta charset="utf-8" />
            <meta name="author" content="Your name here" />
            <meta name="description" content="A description of your web page" />
            <meta name="keywords" content="keywords, that, summarize, the, type, of, content, that, is, on, this, page" />

            <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
        </head>

        <!-- Linking jQuery and Javascript files -->
        <script src="jquery-1.8.3.js"></script>
        <script src="action.js"></script>

        <!-- <img src="img/logo.png" width="300" height="80" /> -->

        <header>
            <a href="<?php bloginfo('url'); ?>" title="Home">
                <?php bloginfo('name'); ?>
            </a>
        </header>

        <nav>
            <?php wp_nav_menu(); ?>
        </nav>