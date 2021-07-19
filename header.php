<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>"> 

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/common/ico/favicon.ico">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <section class="l-container u-m-base u-mb-m">
        <header class="l-header p-header">
            <section class="p-top">
                <h1 class="c-title--top"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                <button class="c-hamburger l-aside--bt is-hamburger">
                    <xml version="1.0" encoding="utf-8">
                    <!-- Generator: Adobe Illustrator 25.2.3, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="&#x30EC;&#x30A4;&#x30E4;&#x30FC;_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                        style="enable-background:new 0 0 50 50;" xml:space="preserve">
                        <style type="text/css">
                            .st0{fill:#ffffff;}
                            .st1{fill:#585858;}   
                        </style>
                        <rect x="0" class="st0" width="50" height="50"/>
                        <rect x="10" y="10" class="st1" width="30" height="2"/>
                        <rect x="10" y="20" class="st2" width="30" height="2"/>
                        <rect x="10" y="30" class="st3" width="30" height="2"/> 
                    </svg>
                    <span>MENU</span>

                </button>
            </section>
            <section class="p-hero">
                <h2 class="c-title--heading">大人<span>のための</span><br>バレエサークル</h2>
                <?php //bloginfo( 'description' ); ?>
                <div class="c-shadow"></div>
                <img class="c-logo" src="/img/logo2.svg" alt="">
            </section>
            <?php wp_nav_menu(); ?>
            <!-- <nav class="p-subnav">
                <ul>
                    <li><a href="">タガラのこと<span><br>About us</span></a></li>
                    <li><a href="">日程・料金<span><br>Schedule/Fee</span></a></li>
                    <li><a href="">講師紹介<span><br>Instructors</span></a></li>
                    <li><a href="">ブログ<span><br>Blog</span></a></li>
                </ul>
            </nav> -->
        </header><!-- /.l-header -->