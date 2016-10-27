<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HelloMind</title>
    <link rel="icon" type="image/png" href="<?= base_url('assets/images/favicon-32x32.png'); ?>">
    <link rel='stylesheet' id='style.css-css' href='<?= base_url("assets/css/style.css"); ?>'  type='text/css' media='all'/>

</head>
<body class="debug_">
<div class="component-loader">
    <!-- These images will be forced to preload -->
    <div class="preload">
        <img src="<?=  base_url('assets/images/sprites/sprite_logo_loop_white.png') ?>" alt title>
    </div>
    <div class="sprite"
         data-sprite-image="<?= base_url('assets/images/sprites/sprite_logo_loop_white.png') ?>">
        <img class="init" src="<?= base_url('assets/images/logo_loop.png') ?>" alt title>
        <canvas></canvas>
    </div>
    <div class="partial-symbol">
        <svg class="symbol symbol--logo">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#symbol--logo"></use>
        </svg>
    </div>
</div>

<header class="header">
    <div class="fixed">
        <div class="navigation section">
            <div class="navigation-background"></div>
            <div class="content">
                <div class="topbar">
                    <div class="topbar-item">
                        <div class="component-language-selector">
                            <ul>
                                <li>
                                    <a class="active" href="index.html">EN</a>
                                </li>
                                <li>
                                    <a class="" href="dk/index.html">DK</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="topbar-item topbar-item-social">
                        <div class="component-social component-topbar">
                            <ul>
                                <li class="dim">
                                    Follow us
                                </li>
                                <li>
                                    <ul class="stack-down">
                                        <li>
                                            <a href="https://www.facebook.com/#"
                                               target="_blank">Facebook</a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/#" target="_blank">Twitter</a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/hellomind.app/"
                                               target="_blank">Instagram</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="container-fluid">
                        <div class="row flex--alignCenter">
                            <div class="col-lg-5 col-lg-offset-1 text-right">
                                <ul id="menu-primary" class="nav nav--primary">
                                    <li id="menu-item-91"
                                        class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-7 current_page_item menu-item-91">
                                        <a href="index.html">The app</a></li>
                                    <li id="menu-item-92"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-92"><a
                                            href="#">About us</a></li>
                                    <li id="menu-item-97"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97"><a
                                            href="#">Result Driven Hypnosis</a></li>
                                    <li id="menu-item-739"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-739"><a
                                            href="#">Other minds</a></li>
                                </ul>
                                <ul id="menu-secondary" class="nav--secondary text-uppercase">
                                    <li id="menu-item-103"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-103">
                                        <a href="#">Media</a></li>
                                    <li id="menu-item-106"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-106">
                                        <a href="#">Legal</a></li>
                                    <li id="menu-item-107"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-107">
                                        <a href="#">Support</a></li>
                                    <li id="menu-item-323"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-323">
                                        <a href="#">Contact</a></li>
                                </ul>
                            </div>

                            <div class="col-lg-4 col-lg-offset-1 hidden-md-down theme--green column-secondary">
                                <blockquote><p>Try <strong>HelloMind</strong> and experience  how you begin to  think
                                        better and feel stronger.</p></blockquote>
                                <div class="partial partial-badge">
                                    <a href="https://itunes.apple.com/us/app/hellomind/id327538172?mt=8"
                                       target="_blank">
                                        <svg class="symbol symbol--badge" viewBox="0 0 135 40">

                                            <path class="color" d="M134,35.3V4.7c0-2.1-1.7-3.8-3.8-3.8H4.7c-2.1,0-3.8,1.7-3.8,3.8v30.5c0,2.1,1.7,3.8,3.8,3.8h125.5
		C132.3,39.1,134,37.4,134,35.3L134,35.3z"/>
                                            <path class="color--bg" d="M33.5,24.9c0,0.1-0.5,1.8-1.8,3.6c-1,1.6-2.1,3.1-3.9,3.1c-1.7,0-2.3-1-4.2-1c-2,0-2.6,1-4.2,1
			c-1.7,0.1-2.9-1.7-4-3.2c-2.2-3.2-3.9-8.9-1.6-12.9c1.1-1.9,3.1-3.2,5.2-3.2c1.7,0,3.2,1.1,4.2,1.1c1,0,2.9-1.4,4.9-1.2
			c0.8,0,3.2,0.3,4.7,2.5c-0.1,0.1-2.8,1.6-2.8,4.9C30.2,23.6,33.5,24.9,33.5,24.9z M26.9,10.3c0.9-1.1,1.5-2.6,1.3-4.1
			c-1.3,0.1-2.8,0.9-3.8,1.9c-0.8,0.9-1.5,2.5-1.3,3.9C24.6,12.2,26,11.4,26.9,10.3z M49.3,18.2h-2.6l-4.3,13.3h2.2l1.2-3.9h4.3
			l1.2,3.9h2.3L49.3,18.2z M46.2,26l1.1-3.5c0.3-1.1,0.5-1.9,0.6-2.5h0c0.3,1.3,0.6,2.2,0.7,2.5l1.1,3.5H46.2z M63.5,23.1
			c-0.8-0.9-1.7-1.3-2.8-1.3c-1.4,0-2.5,0.6-3.2,1.7h0l-0.1-1.5h-1.9c0.1,1.1,0.1,2.1,0.1,3.2v10.3h2.1v-5.1h0
			c0.6,0.9,1.5,1.4,2.7,1.4c1.2,0,2.2-0.4,2.9-1.3c0.9-0.9,1.3-2.2,1.3-3.9C64.7,25.1,64.3,23.9,63.5,23.1z M61.8,29.1
			c-0.4,0.6-1.1,0.9-1.9,0.9c-0.7,0-1.2-0.2-1.7-0.7c-0.4-0.5-0.6-1.1-0.6-1.8V26c0-0.2,0-0.4,0.1-0.7c0.1-0.6,0.4-1,0.8-1.4
			c0.4-0.3,0.9-0.5,1.4-0.5c0.8,0,1.4,0.3,1.9,0.9c0.4,0.6,0.6,1.4,0.6,2.3C62.5,27.7,62.3,28.5,61.8,29.1z M74.6,23.1
			c-0.8-0.9-1.7-1.3-2.8-1.3c-1.4,0-2.5,0.6-3.2,1.7h0l-0.1-1.5h-1.9c0.1,1.1,0.1,2.1,0.1,3.2v10.3h2.1v-5.1h0
			c0.6,0.9,1.5,1.4,2.7,1.4c1.2,0,2.2-0.4,2.9-1.3c0.9-0.9,1.3-2.2,1.3-3.9C75.7,25.1,75.3,23.9,74.6,23.1z M72.9,29.1
			C72.4,29.7,71.8,30,71,30c-0.7,0-1.2-0.2-1.7-0.7c-0.4-0.5-0.6-1.1-0.6-1.8V26c0-0.2,0-0.4,0.1-0.7c0.1-0.6,0.4-1,0.8-1.4
			c0.4-0.3,0.9-0.5,1.4-0.5c0.8,0,1.4,0.3,1.9,0.9c0.4,0.6,0.6,1.4,0.6,2.3C73.5,27.7,73.3,28.5,72.9,29.1z M87.2,25.5
			c-0.5-0.6-1.4-1.2-2.5-1.6c-0.9-0.4-1.6-0.7-1.9-1c-0.4-0.3-0.6-0.8-0.6-1.3c0-0.5,0.2-0.9,0.5-1.2c0.4-0.4,1-0.6,1.8-0.6
			c0.9,0,1.8,0.2,2.5,0.6l0.5-1.7c-0.8-0.4-1.8-0.6-3-0.6c-1.4,0-2.4,0.3-3.3,1c-0.8,0.7-1.2,1.6-1.2,2.7c0,1.7,1.2,2.9,3.5,3.8
			c0.9,0.3,1.5,0.7,1.8,1c0.4,0.4,0.6,0.8,0.6,1.4c0,0.6-0.2,1.1-0.7,1.5c-0.4,0.4-1.1,0.5-1.9,0.5c-1.1,0-2.1-0.3-3.1-0.8l-0.5,1.8
			c0.9,0.6,2,0.8,3.4,0.8c1.6,0,2.8-0.4,3.6-1.2c0.8-0.7,1.2-1.6,1.2-2.8C88,26.9,87.8,26.1,87.2,25.5z M95.1,21.9h-2.3v-2.4l-2.1,0.6
			v1.8h-1.4v1.6h1.4v4.8c0,1.2,0.2,2.1,0.7,2.6c0.5,0.5,1.1,0.8,2,0.8c0.7,0,1.2-0.1,1.7-0.2l-0.1-1.6c-0.2,0.1-0.6,0.1-0.9,0.1
			c-0.8,0-1.2-0.6-1.2-1.8v-4.7h2.3V21.9z M104.5,23.1c-0.9-0.9-2-1.4-3.4-1.4c-1.5,0-2.6,0.5-3.5,1.4c-0.9,0.9-1.3,2.2-1.3,3.7
			c0,1.4,0.4,2.6,1.3,3.5c0.8,0.9,2,1.4,3.4,1.4c1.5,0,2.6-0.5,3.5-1.5c0.8-0.9,1.3-2.2,1.3-3.6C105.7,25.2,105.3,24,104.5,23.1z
			 M102.9,29c-0.5,0.8-1.1,1.2-1.9,1.2c-0.8,0-1.5-0.4-1.9-1.1c-0.4-0.6-0.6-1.4-0.6-2.3c0-0.9,0.2-1.7,0.6-2.3c0.4-0.8,1.1-1.1,2-1.1
			c0.8,0,1.5,0.4,1.9,1.1c0.4,0.6,0.6,1.4,0.6,2.3C103.5,27.6,103.3,28.3,102.9,29z M112.6,21.8c-0.2,0-0.3,0-0.5,0
			c-0.6,0-1.1,0.2-1.5,0.5c-0.5,0.4-0.8,0.9-1.1,1.5h-0.1l-0.1-1.8h-1.9c0.1,0.9,0.1,1.9,0.1,3l0,6.6h2.1v-5c0-0.8,0.2-1.4,0.5-1.9
			c0.4-0.6,1-0.8,1.7-0.8c0.2,0,0.5,0,0.7,0.1V21.8z M121.3,23.2c-0.7-1-1.8-1.5-3.1-1.5c-1.4,0-2.5,0.5-3.4,1.5
			c-0.8,1-1.2,2.2-1.2,3.6c0,1.5,0.4,2.6,1.3,3.5c0.8,0.9,2,1.3,3.5,1.3c1.2,0,2.3-0.2,3.2-0.6l-0.3-1.5c-0.8,0.3-1.6,0.5-2.6,0.5
			c-0.9,0-1.6-0.2-2.1-0.7c-0.6-0.5-0.9-1.2-0.9-2.2h6.4c0.1-0.3,0.1-0.6,0.1-1C122.2,25.1,121.9,24,121.3,23.2z M115.7,25.7
			c0.1-0.6,0.3-1.2,0.6-1.7c0.4-0.6,1-0.9,1.7-0.9c0.8,0,1.3,0.3,1.7,0.9c0.3,0.5,0.4,1,0.4,1.6H115.7z M48.1,7.6
			c-0.6-0.5-1.4-0.7-2.6-0.7c-0.6,0-1.2,0-1.8,0.1v6.4c0.4,0.1,0.9,0.1,1.5,0.1c1.2,0,2.1-0.3,2.8-0.8c0.7-0.6,1.1-1.5,1.1-2.7
			C49.1,9,48.7,8.2,48.1,7.6z M47.3,12c-0.4,0.4-1.1,0.7-1.9,0.7c-0.3,0-0.6,0-0.7,0V7.7c0.2,0,0.5-0.1,0.8-0.1c0.8,0,1.4,0.2,1.8,0.6
			c0.4,0.4,0.6,1,0.6,1.8C47.9,10.9,47.7,11.5,47.3,12z M54.3,9.3c-0.4-0.5-1-0.7-1.7-0.7c-0.7,0-1.3,0.2-1.7,0.7
			c-0.4,0.5-0.6,1.1-0.6,1.8c0,0.7,0.2,1.3,0.6,1.7c0.4,0.5,1,0.7,1.7,0.7c0.7,0,1.3-0.2,1.7-0.7c0.4-0.5,0.6-1.1,0.6-1.8
			C54.9,10.3,54.7,9.8,54.3,9.3z M53.5,12.2c-0.2,0.4-0.5,0.6-0.9,0.6c-0.4,0-0.7-0.2-1-0.6c-0.2-0.3-0.3-0.7-0.3-1.1
			c0-0.4,0.1-0.8,0.3-1.1c0.2-0.4,0.5-0.6,1-0.6c0.4,0,0.7,0.2,0.9,0.6c0.2,0.3,0.3,0.7,0.3,1.1C53.8,11.5,53.7,11.9,53.5,12.2z
			 M61.7,8.7l-0.6,2.2c-0.1,0.5-0.2,1.1-0.3,1.6h0c-0.1-0.5-0.2-1-0.4-1.6l-0.6-2.2h-0.9L58.3,11c-0.2,0.6-0.3,1.1-0.4,1.5h0
			c-0.1-0.5-0.2-1-0.3-1.5L57,8.7h-1.1l1.4,4.7h1l0.6-2c0.2-0.5,0.3-1,0.4-1.5h0c0.1,0.5,0.2,1,0.4,1.5l0.6,2h1l1.5-4.7H61.7z
			 M68.2,10.6c0-0.7-0.2-1.2-0.5-1.6c-0.3-0.3-0.7-0.4-1.1-0.4c-0.3,0-0.7,0.1-1,0.3c-0.2,0.2-0.4,0.3-0.5,0.6h0l0-0.7h-0.9
			c0,0.5,0,0.9,0,1.3v3.4h1v-2.8c0-0.3,0.1-0.6,0.3-0.8c0.2-0.2,0.4-0.3,0.8-0.3c0.6,0,1,0.4,1,1.2v2.7h1V10.6z M71.1,6.6h-1v6.9h1
			V6.6z M76.7,9.3c-0.4-0.5-1-0.7-1.7-0.7c-0.7,0-1.3,0.2-1.7,0.7c-0.4,0.5-0.6,1.1-0.6,1.8c0,0.7,0.2,1.3,0.6,1.7
			c0.4,0.5,1,0.7,1.7,0.7c0.7,0,1.3-0.2,1.7-0.7c0.4-0.5,0.6-1.1,0.6-1.8C77.3,10.3,77.1,9.8,76.7,9.3z M75.9,12.2
			c-0.2,0.4-0.5,0.6-0.9,0.6c-0.4,0-0.7-0.2-1-0.6c-0.2-0.3-0.3-0.7-0.3-1.1c0-0.4,0.1-0.8,0.3-1.1c0.2-0.4,0.5-0.6,1-0.6
			c0.4,0,0.7,0.2,0.9,0.6c0.2,0.3,0.3,0.7,0.3,1.1C76.2,11.5,76.1,11.9,75.9,12.2z M82.3,12.3v-1.7c0-1.3-0.6-1.9-1.8-1.9
			c-0.6,0-1.2,0.1-1.6,0.4L79,9.7c0.4-0.2,0.8-0.3,1.2-0.3c0.7,0,1,0.3,1,0.9v0.1c-0.9,0-1.6,0.1-2,0.4c-0.5,0.3-0.7,0.7-0.7,1.3
			c0,0.4,0.1,0.7,0.4,1c0.3,0.3,0.6,0.4,1.1,0.4c0.6,0,1.1-0.2,1.4-0.6h0l0.1,0.5h0.9C82.3,13.2,82.3,12.8,82.3,12.3z M81.2,12
			c0,0.2-0.2,0.4-0.4,0.6c-0.2,0.1-0.4,0.2-0.6,0.2c-0.2,0-0.4-0.1-0.5-0.2c-0.1-0.1-0.2-0.3-0.2-0.6c0-0.7,0.6-1,1.7-1v0.7
			C81.2,11.9,81.2,11.9,81.2,12z M88.2,12.2V6.6h-1v2.7h0c-0.3-0.4-0.7-0.6-1.3-0.6c-0.6,0-1.1,0.2-1.5,0.7c-0.4,0.5-0.6,1.1-0.6,1.9
			c0,0.7,0.2,1.3,0.6,1.7c0.4,0.4,0.8,0.7,1.4,0.7c0.7,0,1.2-0.3,1.5-0.9h0l0,0.8h0.9C88.3,13,88.2,12.6,88.2,12.2z M86.9,12.3
			c-0.2,0.3-0.5,0.4-0.8,0.4c-0.4,0-0.7-0.2-0.9-0.5c-0.2-0.3-0.3-0.7-0.3-1.1c0-0.5,0.1-0.9,0.3-1.2c0.2-0.3,0.5-0.5,0.9-0.5
			c0.3,0,0.5,0.1,0.7,0.3c0.2,0.2,0.3,0.4,0.4,0.6c0,0.1,0,0.2,0,0.3v0.8C87.2,11.8,87.1,12.1,86.9,12.3z M96.6,9.3
			c-0.4-0.5-1-0.7-1.7-0.7c-0.7,0-1.3,0.2-1.7,0.7c-0.4,0.5-0.6,1.1-0.6,1.8c0,0.7,0.2,1.3,0.6,1.7c0.4,0.5,1,0.7,1.7,0.7
			c0.7,0,1.3-0.2,1.7-0.7c0.4-0.5,0.6-1.1,0.6-1.8C97.2,10.3,97,9.8,96.6,9.3z M95.9,12.2c-0.2,0.4-0.5,0.6-0.9,0.6
			c-0.4,0-0.7-0.2-1-0.6c-0.2-0.3-0.3-0.7-0.3-1.1c0-0.4,0.1-0.8,0.3-1.1c0.2-0.4,0.5-0.6,1-0.6c0.4,0,0.7,0.2,0.9,0.6
			c0.2,0.3,0.3,0.7,0.3,1.1C96.2,11.5,96.1,11.9,95.9,12.2z M102.9,10.6c0-0.7-0.2-1.2-0.5-1.6c-0.3-0.3-0.7-0.4-1.1-0.4
			c-0.3,0-0.7,0.1-1,0.3c-0.2,0.2-0.4,0.3-0.5,0.6h0l0-0.7h-0.9c0,0.5,0,0.9,0,1.3v3.4h1v-2.8c0-0.3,0.1-0.6,0.3-0.8s0.4-0.3,0.8-0.3
			c0.6,0,1,0.4,1,1.2v2.7h1V10.6z M109.9,8.7h-1.2V7.5l-1,0.3v0.9h-0.7v0.8h0.7v2.4c0,0.6,0.1,1,0.3,1.3c0.2,0.3,0.6,0.4,1,0.4
			c0.3,0,0.6,0,0.8-0.1l0-0.8c-0.1,0-0.3,0-0.5,0c-0.4,0-0.6-0.3-0.6-0.9V9.5h1.2V8.7z M115.5,10.6c0-0.7-0.2-1.2-0.5-1.6
			c-0.3-0.3-0.6-0.4-1.1-0.4c-0.6,0-1.1,0.3-1.4,0.8h0V6.6h-1v6.9h1v-2.8c0-0.1,0-0.3,0-0.4c0.2-0.5,0.5-0.7,1-0.7
			c0.6,0,0.9,0.4,0.9,1.3v2.7h1V10.6z M120.8,9.4c-0.3-0.5-0.9-0.8-1.5-0.8c-0.7,0-1.2,0.3-1.6,0.8c-0.4,0.5-0.6,1.1-0.6,1.8
			c0,0.7,0.2,1.3,0.6,1.7c0.4,0.4,1,0.6,1.7,0.6c0.6,0,1.1-0.1,1.6-0.3l-0.2-0.7c-0.4,0.1-0.8,0.2-1.3,0.2c-0.4,0-0.8-0.1-1-0.3
			c-0.3-0.2-0.4-0.6-0.5-1.1h3.1c0-0.1,0-0.3,0-0.5C121.2,10.3,121.1,9.8,120.8,9.4z M118,10.6c0-0.3,0.1-0.6,0.3-0.8
			c0.2-0.3,0.5-0.4,0.8-0.4c0.4,0,0.7,0.1,0.8,0.4c0.1,0.2,0.2,0.5,0.2,0.8H118z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="index.html" class="logo">
            <canvas class="canvas"></canvas>
        </a>
    </div>
</header>

<div class="aside">
    <div class="aside-item hamburger-container">
        <div class="hamburger">
            <canvas class="canvas"></canvas>
        </div>
    </div>
    <div class="aside-item subheading-container">
        <div class="rotate-cc subheading-bold white-space-nowrap color--secondary">
            <div class="partial-symbol">
                <svg class="symbol symbol--logo">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#symbol--logo"></use>
                </svg>
            </div>
        </div>
    </div>
</div>
<div class="partial partial-language-selector">

    <div class="component-language-selector">
        <ul>

            <li>
                <a class="active" href="index.html">EN</a>
            </li>
            <li>
                <a class="" href="dk/index.html">DK</a>
            </li>
        </ul>
    </div>
</div>

<main id="frontpage" role="main" data-loader="true">
    <div class="sections">


        <div class="section theme--green theme--green-transparent" id="deck1">
            <div class="content flex flex--alignCenter no-padding-breakpoint-down">
                <div class="background pb-1 pr-1" data-parallax-y=".5" data-background-scale-y="1"
                     style="transform-origin: 50% 34.6%;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12"></div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 hidden-lg-up no-padding">
                            <div class="ratio-xs-1-1">
                                <div class="partial-image">
                                    <div class="component-background-image backgroundImage fillAbsolute">
                                        <img draggable="false"
                                             src="<?= base_url('uploads/Hellomind-FP-section1-750x750.jpg') ?>"
                                             srcset="<?= base_url('uploads/Hellomind-FP-section1-750x750.jpg 750w') ?>,
                                              <?= base_url('uploads/Hellomind-FP-section1-1280x1280.jpg 1280w') ?>,
                                               <?= base_url('uploads/Hellomind-FP-section1-1920x1920.jpg 1920w') ?>"
                                             alt="" title="Hellomind-FP-section1" data-object-fit="cover">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="col-lg-4 col-lg-offset-0 colum-padding-left order-2-breakpoint-down pb-0 flex--alignSelfCenter"
                            data-parallax-y=".35">
                            <div class="inner trigger-element" data-text-always-show="true">
                                <h1>HelloMind.<br/>
<span class="text-weight--light">Think Better.<br/>
</span><span class="text-weight--light">Feel Stronger.</span></h1>
                                <p>Low self-esteem, stress, fear, bad sleep and unhealthy habits sometimes hold us back
                                    from enjoying life to the fullest. The good news is these negative patterns can be
                                    broken or eliminated.</p>
                                <p>We created the HelloMind app to help you make a change and feel stronger. You can use
                                    HelloMind anywhere, at any time, and at a low cost.</p>
                                <div class="partial partial-badge">
                                    <a href="https://itunes.apple.com/us/app/hellomind/id327538172?mt=8"
                                       target="_blank">
                                        <svg class="symbol symbol--badge" viewBox="0 0 135 40">

                                            <path class="color" d="M134,35.3V4.7c0-2.1-1.7-3.8-3.8-3.8H4.7c-2.1,0-3.8,1.7-3.8,3.8v30.5c0,2.1,1.7,3.8,3.8,3.8h125.5
		C132.3,39.1,134,37.4,134,35.3L134,35.3z"/>
                                            <path class="color--bg" d="M33.5,24.9c0,0.1-0.5,1.8-1.8,3.6c-1,1.6-2.1,3.1-3.9,3.1c-1.7,0-2.3-1-4.2-1c-2,0-2.6,1-4.2,1
			c-1.7,0.1-2.9-1.7-4-3.2c-2.2-3.2-3.9-8.9-1.6-12.9c1.1-1.9,3.1-3.2,5.2-3.2c1.7,0,3.2,1.1,4.2,1.1c1,0,2.9-1.4,4.9-1.2
			c0.8,0,3.2,0.3,4.7,2.5c-0.1,0.1-2.8,1.6-2.8,4.9C30.2,23.6,33.5,24.9,33.5,24.9z M26.9,10.3c0.9-1.1,1.5-2.6,1.3-4.1
			c-1.3,0.1-2.8,0.9-3.8,1.9c-0.8,0.9-1.5,2.5-1.3,3.9C24.6,12.2,26,11.4,26.9,10.3z M49.3,18.2h-2.6l-4.3,13.3h2.2l1.2-3.9h4.3
			l1.2,3.9h2.3L49.3,18.2z M46.2,26l1.1-3.5c0.3-1.1,0.5-1.9,0.6-2.5h0c0.3,1.3,0.6,2.2,0.7,2.5l1.1,3.5H46.2z M63.5,23.1
			c-0.8-0.9-1.7-1.3-2.8-1.3c-1.4,0-2.5,0.6-3.2,1.7h0l-0.1-1.5h-1.9c0.1,1.1,0.1,2.1,0.1,3.2v10.3h2.1v-5.1h0
			c0.6,0.9,1.5,1.4,2.7,1.4c1.2,0,2.2-0.4,2.9-1.3c0.9-0.9,1.3-2.2,1.3-3.9C64.7,25.1,64.3,23.9,63.5,23.1z M61.8,29.1
			c-0.4,0.6-1.1,0.9-1.9,0.9c-0.7,0-1.2-0.2-1.7-0.7c-0.4-0.5-0.6-1.1-0.6-1.8V26c0-0.2,0-0.4,0.1-0.7c0.1-0.6,0.4-1,0.8-1.4
			c0.4-0.3,0.9-0.5,1.4-0.5c0.8,0,1.4,0.3,1.9,0.9c0.4,0.6,0.6,1.4,0.6,2.3C62.5,27.7,62.3,28.5,61.8,29.1z M74.6,23.1
			c-0.8-0.9-1.7-1.3-2.8-1.3c-1.4,0-2.5,0.6-3.2,1.7h0l-0.1-1.5h-1.9c0.1,1.1,0.1,2.1,0.1,3.2v10.3h2.1v-5.1h0
			c0.6,0.9,1.5,1.4,2.7,1.4c1.2,0,2.2-0.4,2.9-1.3c0.9-0.9,1.3-2.2,1.3-3.9C75.7,25.1,75.3,23.9,74.6,23.1z M72.9,29.1
			C72.4,29.7,71.8,30,71,30c-0.7,0-1.2-0.2-1.7-0.7c-0.4-0.5-0.6-1.1-0.6-1.8V26c0-0.2,0-0.4,0.1-0.7c0.1-0.6,0.4-1,0.8-1.4
			c0.4-0.3,0.9-0.5,1.4-0.5c0.8,0,1.4,0.3,1.9,0.9c0.4,0.6,0.6,1.4,0.6,2.3C73.5,27.7,73.3,28.5,72.9,29.1z M87.2,25.5
			c-0.5-0.6-1.4-1.2-2.5-1.6c-0.9-0.4-1.6-0.7-1.9-1c-0.4-0.3-0.6-0.8-0.6-1.3c0-0.5,0.2-0.9,0.5-1.2c0.4-0.4,1-0.6,1.8-0.6
			c0.9,0,1.8,0.2,2.5,0.6l0.5-1.7c-0.8-0.4-1.8-0.6-3-0.6c-1.4,0-2.4,0.3-3.3,1c-0.8,0.7-1.2,1.6-1.2,2.7c0,1.7,1.2,2.9,3.5,3.8
			c0.9,0.3,1.5,0.7,1.8,1c0.4,0.4,0.6,0.8,0.6,1.4c0,0.6-0.2,1.1-0.7,1.5c-0.4,0.4-1.1,0.5-1.9,0.5c-1.1,0-2.1-0.3-3.1-0.8l-0.5,1.8
			c0.9,0.6,2,0.8,3.4,0.8c1.6,0,2.8-0.4,3.6-1.2c0.8-0.7,1.2-1.6,1.2-2.8C88,26.9,87.8,26.1,87.2,25.5z M95.1,21.9h-2.3v-2.4l-2.1,0.6
			v1.8h-1.4v1.6h1.4v4.8c0,1.2,0.2,2.1,0.7,2.6c0.5,0.5,1.1,0.8,2,0.8c0.7,0,1.2-0.1,1.7-0.2l-0.1-1.6c-0.2,0.1-0.6,0.1-0.9,0.1
			c-0.8,0-1.2-0.6-1.2-1.8v-4.7h2.3V21.9z M104.5,23.1c-0.9-0.9-2-1.4-3.4-1.4c-1.5,0-2.6,0.5-3.5,1.4c-0.9,0.9-1.3,2.2-1.3,3.7
			c0,1.4,0.4,2.6,1.3,3.5c0.8,0.9,2,1.4,3.4,1.4c1.5,0,2.6-0.5,3.5-1.5c0.8-0.9,1.3-2.2,1.3-3.6C105.7,25.2,105.3,24,104.5,23.1z
			 M102.9,29c-0.5,0.8-1.1,1.2-1.9,1.2c-0.8,0-1.5-0.4-1.9-1.1c-0.4-0.6-0.6-1.4-0.6-2.3c0-0.9,0.2-1.7,0.6-2.3c0.4-0.8,1.1-1.1,2-1.1
			c0.8,0,1.5,0.4,1.9,1.1c0.4,0.6,0.6,1.4,0.6,2.3C103.5,27.6,103.3,28.3,102.9,29z M112.6,21.8c-0.2,0-0.3,0-0.5,0
			c-0.6,0-1.1,0.2-1.5,0.5c-0.5,0.4-0.8,0.9-1.1,1.5h-0.1l-0.1-1.8h-1.9c0.1,0.9,0.1,1.9,0.1,3l0,6.6h2.1v-5c0-0.8,0.2-1.4,0.5-1.9
			c0.4-0.6,1-0.8,1.7-0.8c0.2,0,0.5,0,0.7,0.1V21.8z M121.3,23.2c-0.7-1-1.8-1.5-3.1-1.5c-1.4,0-2.5,0.5-3.4,1.5
			c-0.8,1-1.2,2.2-1.2,3.6c0,1.5,0.4,2.6,1.3,3.5c0.8,0.9,2,1.3,3.5,1.3c1.2,0,2.3-0.2,3.2-0.6l-0.3-1.5c-0.8,0.3-1.6,0.5-2.6,0.5
			c-0.9,0-1.6-0.2-2.1-0.7c-0.6-0.5-0.9-1.2-0.9-2.2h6.4c0.1-0.3,0.1-0.6,0.1-1C122.2,25.1,121.9,24,121.3,23.2z M115.7,25.7
			c0.1-0.6,0.3-1.2,0.6-1.7c0.4-0.6,1-0.9,1.7-0.9c0.8,0,1.3,0.3,1.7,0.9c0.3,0.5,0.4,1,0.4,1.6H115.7z M48.1,7.6
			c-0.6-0.5-1.4-0.7-2.6-0.7c-0.6,0-1.2,0-1.8,0.1v6.4c0.4,0.1,0.9,0.1,1.5,0.1c1.2,0,2.1-0.3,2.8-0.8c0.7-0.6,1.1-1.5,1.1-2.7
			C49.1,9,48.7,8.2,48.1,7.6z M47.3,12c-0.4,0.4-1.1,0.7-1.9,0.7c-0.3,0-0.6,0-0.7,0V7.7c0.2,0,0.5-0.1,0.8-0.1c0.8,0,1.4,0.2,1.8,0.6
			c0.4,0.4,0.6,1,0.6,1.8C47.9,10.9,47.7,11.5,47.3,12z M54.3,9.3c-0.4-0.5-1-0.7-1.7-0.7c-0.7,0-1.3,0.2-1.7,0.7
			c-0.4,0.5-0.6,1.1-0.6,1.8c0,0.7,0.2,1.3,0.6,1.7c0.4,0.5,1,0.7,1.7,0.7c0.7,0,1.3-0.2,1.7-0.7c0.4-0.5,0.6-1.1,0.6-1.8
			C54.9,10.3,54.7,9.8,54.3,9.3z M53.5,12.2c-0.2,0.4-0.5,0.6-0.9,0.6c-0.4,0-0.7-0.2-1-0.6c-0.2-0.3-0.3-0.7-0.3-1.1
			c0-0.4,0.1-0.8,0.3-1.1c0.2-0.4,0.5-0.6,1-0.6c0.4,0,0.7,0.2,0.9,0.6c0.2,0.3,0.3,0.7,0.3,1.1C53.8,11.5,53.7,11.9,53.5,12.2z
			 M61.7,8.7l-0.6,2.2c-0.1,0.5-0.2,1.1-0.3,1.6h0c-0.1-0.5-0.2-1-0.4-1.6l-0.6-2.2h-0.9L58.3,11c-0.2,0.6-0.3,1.1-0.4,1.5h0
			c-0.1-0.5-0.2-1-0.3-1.5L57,8.7h-1.1l1.4,4.7h1l0.6-2c0.2-0.5,0.3-1,0.4-1.5h0c0.1,0.5,0.2,1,0.4,1.5l0.6,2h1l1.5-4.7H61.7z
			 M68.2,10.6c0-0.7-0.2-1.2-0.5-1.6c-0.3-0.3-0.7-0.4-1.1-0.4c-0.3,0-0.7,0.1-1,0.3c-0.2,0.2-0.4,0.3-0.5,0.6h0l0-0.7h-0.9
			c0,0.5,0,0.9,0,1.3v3.4h1v-2.8c0-0.3,0.1-0.6,0.3-0.8c0.2-0.2,0.4-0.3,0.8-0.3c0.6,0,1,0.4,1,1.2v2.7h1V10.6z M71.1,6.6h-1v6.9h1
			V6.6z M76.7,9.3c-0.4-0.5-1-0.7-1.7-0.7c-0.7,0-1.3,0.2-1.7,0.7c-0.4,0.5-0.6,1.1-0.6,1.8c0,0.7,0.2,1.3,0.6,1.7
			c0.4,0.5,1,0.7,1.7,0.7c0.7,0,1.3-0.2,1.7-0.7c0.4-0.5,0.6-1.1,0.6-1.8C77.3,10.3,77.1,9.8,76.7,9.3z M75.9,12.2
			c-0.2,0.4-0.5,0.6-0.9,0.6c-0.4,0-0.7-0.2-1-0.6c-0.2-0.3-0.3-0.7-0.3-1.1c0-0.4,0.1-0.8,0.3-1.1c0.2-0.4,0.5-0.6,1-0.6
			c0.4,0,0.7,0.2,0.9,0.6c0.2,0.3,0.3,0.7,0.3,1.1C76.2,11.5,76.1,11.9,75.9,12.2z M82.3,12.3v-1.7c0-1.3-0.6-1.9-1.8-1.9
			c-0.6,0-1.2,0.1-1.6,0.4L79,9.7c0.4-0.2,0.8-0.3,1.2-0.3c0.7,0,1,0.3,1,0.9v0.1c-0.9,0-1.6,0.1-2,0.4c-0.5,0.3-0.7,0.7-0.7,1.3
			c0,0.4,0.1,0.7,0.4,1c0.3,0.3,0.6,0.4,1.1,0.4c0.6,0,1.1-0.2,1.4-0.6h0l0.1,0.5h0.9C82.3,13.2,82.3,12.8,82.3,12.3z M81.2,12
			c0,0.2-0.2,0.4-0.4,0.6c-0.2,0.1-0.4,0.2-0.6,0.2c-0.2,0-0.4-0.1-0.5-0.2c-0.1-0.1-0.2-0.3-0.2-0.6c0-0.7,0.6-1,1.7-1v0.7
			C81.2,11.9,81.2,11.9,81.2,12z M88.2,12.2V6.6h-1v2.7h0c-0.3-0.4-0.7-0.6-1.3-0.6c-0.6,0-1.1,0.2-1.5,0.7c-0.4,0.5-0.6,1.1-0.6,1.9
			c0,0.7,0.2,1.3,0.6,1.7c0.4,0.4,0.8,0.7,1.4,0.7c0.7,0,1.2-0.3,1.5-0.9h0l0,0.8h0.9C88.3,13,88.2,12.6,88.2,12.2z M86.9,12.3
			c-0.2,0.3-0.5,0.4-0.8,0.4c-0.4,0-0.7-0.2-0.9-0.5c-0.2-0.3-0.3-0.7-0.3-1.1c0-0.5,0.1-0.9,0.3-1.2c0.2-0.3,0.5-0.5,0.9-0.5
			c0.3,0,0.5,0.1,0.7,0.3c0.2,0.2,0.3,0.4,0.4,0.6c0,0.1,0,0.2,0,0.3v0.8C87.2,11.8,87.1,12.1,86.9,12.3z M96.6,9.3
			c-0.4-0.5-1-0.7-1.7-0.7c-0.7,0-1.3,0.2-1.7,0.7c-0.4,0.5-0.6,1.1-0.6,1.8c0,0.7,0.2,1.3,0.6,1.7c0.4,0.5,1,0.7,1.7,0.7
			c0.7,0,1.3-0.2,1.7-0.7c0.4-0.5,0.6-1.1,0.6-1.8C97.2,10.3,97,9.8,96.6,9.3z M95.9,12.2c-0.2,0.4-0.5,0.6-0.9,0.6
			c-0.4,0-0.7-0.2-1-0.6c-0.2-0.3-0.3-0.7-0.3-1.1c0-0.4,0.1-0.8,0.3-1.1c0.2-0.4,0.5-0.6,1-0.6c0.4,0,0.7,0.2,0.9,0.6
			c0.2,0.3,0.3,0.7,0.3,1.1C96.2,11.5,96.1,11.9,95.9,12.2z M102.9,10.6c0-0.7-0.2-1.2-0.5-1.6c-0.3-0.3-0.7-0.4-1.1-0.4
			c-0.3,0-0.7,0.1-1,0.3c-0.2,0.2-0.4,0.3-0.5,0.6h0l0-0.7h-0.9c0,0.5,0,0.9,0,1.3v3.4h1v-2.8c0-0.3,0.1-0.6,0.3-0.8s0.4-0.3,0.8-0.3
			c0.6,0,1,0.4,1,1.2v2.7h1V10.6z M109.9,8.7h-1.2V7.5l-1,0.3v0.9h-0.7v0.8h0.7v2.4c0,0.6,0.1,1,0.3,1.3c0.2,0.3,0.6,0.4,1,0.4
			c0.3,0,0.6,0,0.8-0.1l0-0.8c-0.1,0-0.3,0-0.5,0c-0.4,0-0.6-0.3-0.6-0.9V9.5h1.2V8.7z M115.5,10.6c0-0.7-0.2-1.2-0.5-1.6
			c-0.3-0.3-0.6-0.4-1.1-0.4c-0.6,0-1.1,0.3-1.4,0.8h0V6.6h-1v6.9h1v-2.8c0-0.1,0-0.3,0-0.4c0.2-0.5,0.5-0.7,1-0.7
			c0.6,0,0.9,0.4,0.9,1.3v2.7h1V10.6z M120.8,9.4c-0.3-0.5-0.9-0.8-1.5-0.8c-0.7,0-1.2,0.3-1.6,0.8c-0.4,0.5-0.6,1.1-0.6,1.8
			c0,0.7,0.2,1.3,0.6,1.7c0.4,0.4,1,0.6,1.7,0.6c0.6,0,1.1-0.1,1.6-0.3l-0.2-0.7c-0.4,0.1-0.8,0.2-1.3,0.2c-0.4,0-0.8-0.1-1-0.3
			c-0.3-0.2-0.4-0.6-0.5-1.1h3.1c0-0.1,0-0.3,0-0.5C121.2,10.3,121.1,9.8,120.8,9.4z M118,10.6c0-0.3,0.1-0.6,0.3-0.8
			c0.2-0.3,0.5-0.4,0.8-0.4c0.4,0,0.7,0.1,0.8,0.4c0.1,0.2,0.2,0.5,0.2,0.8H118z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 col-lg-offset-0 pb-1 mt-p18 mb-1--inverse" data-parallax-y=".5">

                            <div class="col-lg-9 col-lg-offset-3 hidden-md-down fillAbsolute">
                                <div class="component-poster-image">
                                    <div class="partial-image">
                                        <div class="component-background-image backgroundImage fillAbsolute">
                                            <img draggable="false" src="<?= base_url('assets/uploads/Hellomind-FP-section1-750x750.jpg') ?>" srcset="'assets/uploads/Hellomind-FP-section1-750x750.jpg 750w, 'assets/uploads/Hellomind-FP-section1-1280x1280.jpg 1280w, assets/uploads/Hellomind-FP-section1-1920x1920.jpg 1920w" alt="" title="Hellomind-FP-section1" data-object-fit="cover">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row pb-1">
                                <div class="col-lg-6 max-width-down">
                                    <div class="partial-phone margin-invert-up">
                                        <div class="screen-container">
                                            <div class="partial partial-sprite"
                                                 data-sprite-images="[&quot;http:\/\/hellomind.com\/wp-content\/uploads\/2016\/05\/EN_640h_01.png&quot;]"
                                                 data-sprite-images-down="[&quot;http:\/\/hellomind.com\/wp-content\/uploads\/2016\/05\/EN_444h_01.png&quot;]"
                                                 data-sprite-loop="" data-sprite-frame-height="640" data-sprite-frame-height-down="444" data-sprite-start-delay=""
                                                 data-sprite-end-delay="" data-sprite-disabled-on-down="" data-sprite-fallback-image="">
                                                <canvas width="361" height="640"></canvas>
                                                <div class="partial partial-small-loader hide" style="opacity: 0;">
                                                    <div class="dot"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="<?=base_url('assets/images/phone.png') ?>" alt title="phone">
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="deck2">
            <div class="content no-padding-breakpoint-down">
                <div class="background" data-parallax-y="1.5" data-background-start=".25" data-background-end=".4"
                     data-background-enable-log="true" data-background-origin-y=".385">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9"></div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">

                    <div class="row flex--alignEnd">

                        <div class="col-lg-4 col-lg-offset-6">
                            <div class="section-image" data-parallax-y="1">
                                <div class="component-poster-image">
                                    <div class="partial-image">
                                        <div class="component-background-image backgroundImage fillAbsolute">
                                            <img draggable="false"
                                                 src="<?=base_url('uploads/Hellomind-FP-section2-750x500.jpg') ?>"
                                                 srcset="<?=base_url('uploads/Hellomind-FP-section2-750x500.jpg 750w') ?>,
                                                 <?=base_url('uploads/Hellomind-FP-section2-1280x853.jpg 1280w') ?>,
                                                 <?=base_url('uploads/Hellomind-FP-section2-1920x1280.jpg 1920w') ?>"
                                                 alt="" title="Hellomind-FP-section2" data-object-fit="cover">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-lg-offset-0 colum-padding-left mt-8p" data-parallax-y="1">
                            <div class="inner trigger-element">
                                <h2>It's easy.</h2>
                                <h2><span class="text-weight--light">Just click your way to treatment.</span></h2>
                                <p>Choose the theme you want to work with. If you want to change or eliminate a negative
                                    thought pattern like a phobia or lack of self-esteem, start with that theme and
                                    click through to a specific treatment.</p>
                                <p>If you would rather strengthen a certain aspect of yourself by giving it a little
                                    extra attention, choose a Booster.</p>
                            </div>
                        </div>

                        <div class="col-lg-8 margin-phone-down colum-padding-right" data-parallax-y="1.35">
                            <div class="row pb-1 color-dark theme--down-grey">
                                <div class="pane pane-grey"></div>
                                <div class="col-lg-6 max-width-down">
                                    <div class="partial-phone margin-invert-up">
                                        <div class="screen-container">
                                            <div class="partial partial-sprite"
                                                 data-sprite-images='["http:\/\/hellomind.com\/wp-content\/uploads\/2016\/05\/EN_640h_01-02-03.png"]'
                                                 data-sprite-images-down='["http:\/\/hellomind.com\/wp-content\/uploads\/2016\/05\/EN_444h_01-02-03.png"]'
                                                 data-sprite-loop="1" data-sprite-frame-height="640"
                                                 data-sprite-frame-height-down="444" data-sprite-start-delay="1500"
                                                 data-sprite-end-delay="3000" data-sprite-disabled-on-down=""
                                                 data-sprite-fallback-image="">
                                                <canvas></canvas>
                                                <div class="partial partial-small-loader">
                                                    <div class="dot"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="<?= base_url('assets/images/phone.png') ?>" alt title="phone">
                                    </div>
                                </div>
                                <div class="col-lg-6 no-padding-left">
                                    <div class="inner">
                                        <h2>How do I choose?<br/>
                                            <span
                                                class="text-weight--light">By being open and honest with yourself.</span>
                                        </h2>
                                        <p>You should always begin with your main problem. The app will guide you to the
                                            right treatment or Booster with simple questions. Choosing the right
                                            treatment is actually an important part of the process. When you have
                                            consciously defined the problem, your subconscious will also know the
                                            solution.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="section" id="deck3">
            <div class="content flex flex--alignCenter no-padding-breakpoint-down">
                <div class="background pb-1" data-parallax-y="1" data-background-start=".28" data-background-end=".5"
                     data-background-origin-y=".343">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9 col-lg-offset-3"></div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row flex--alignCenter">
                        <div class="col-md-12 hidden-lg-up no-padding">
                            <div class="ratio-xs-1-1">
                                <div class="partial-image">
                                    <div class="component-background-image backgroundImage fillAbsolute">
                                        <img draggable="false"
                                             src="wp-content/uploads/2016/05/Hellomind-FP-section3-750x500.jpg"
                                             srcset="http://hellomind.com/wp-content/uploads/2016/05/Hellomind-FP-section3-750x500.jpg 750w, http://hellomind.com/wp-content/uploads/2016/05/Hellomind-FP-section3-1280x853.jpg 1280w, http://hellomind.com/wp-content/uploads/2016/05/Hellomind-FP-section3-1920x1280.jpg 1920w"
                                             alt="" title="Hellomind-FP-section3" data-object-fit="cover">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-lg-8 col-lg-offset-0 order-2-breakpoint-down margin-phone-down pb-1 mt-p18 mb-1--inverse"
                            data-parallax-y=".5">

                            <div class="col-lg-9 hidden-md-down theme--grey fillAbsolute">
                                <div class="component-poster-image">
                                    <div class="partial-image">
                                        <div class="component-background-image backgroundImage fillAbsolute">
                                            <img draggable="false"
                                                 src="wp-content/uploads/2016/05/Hellomind-FP-section3-750x500.jpg"
                                                 srcset="http://hellomind.com/wp-content/uploads/2016/05/Hellomind-FP-section3-750x500.jpg 750w, http://hellomind.com/wp-content/uploads/2016/05/Hellomind-FP-section3-1280x853.jpg 1280w, http://hellomind.com/wp-content/uploads/2016/05/Hellomind-FP-section3-1920x1280.jpg 1920w"
                                                 alt="" title="Hellomind-FP-section3" data-object-fit="cover">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row flex--justifyEnd theme--down-grey pb-1 pb-1--down">
                                <div class="col-lg-6 max-width-down">
                                    <div class="partial-phone margin-invert-up">
                                        <div class="screen-container">
                                            <div class="partial partial-sprite"
                                                 data-sprite-images='["http:\/\/hellomind.com\/wp-content\/uploads\/2016\/05\/EN_640h_03-04.png"]'
                                                 data-sprite-images-down='["http:\/\/hellomind.com\/wp-content\/uploads\/2016\/05\/EN_444h_03-04.png"]'
                                                 data-sprite-loop="1" data-sprite-frame-height="640"
                                                 data-sprite-frame-height-down="444" data-sprite-start-delay="1500"
                                                 data-sprite-end-delay="3000" data-sprite-disabled-on-down=""
                                                 data-sprite-fallback-image="">
                                                <canvas></canvas>
                                                <div class="partial partial-small-loader">
                                                    <div class="dot"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="<?= base_url('assets/images/phone.png') ?>" alt title="phone">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-lg-offset-0 colum-padding-right pb-2">
                            <div class="inner trigger-element">
                                <h2>Get started.</h2>
                                <h2><span class="text-weight--light">Just press play.</span></h2>
                                <p class="p1"><span class="s1">Sit or lie down with a pair of good headphones in a comfortable place where you won’t be disturbed. Set your phone to</span>
                                    <span class="s1">‘Airplane Mode’ and just press ‘play’ on your first session.</span>
                                </p>
                                <p>A treatment consist of 10 sessions of about half an hour. You should listen to a
                                    session every day or every other day and complete the treatment within 30 days to
                                    get the best result.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="rdh">
            <div class="content flex flex--alignCenter background-green--breakpoint-down no-padding-breakpoint-down">
                <div class="background" data-background-start="0" data-background-end=".3">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-8"></div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row flex--alignCenter">
                        <div class="col-lg-4 col-lg-offset-0 colum-padding-left order-2-xs">
                            <div class="inner trigger-element">
                                <h2>Result driven hypnosis.</h2>
                                <h2><span class="text-weight--light">Why it works.</span></h2>
                                <p class="p1"><span class="s1">Result Driven Hypnosis (RDH) is a form of treatment developed by the Danish hypnotherapist and lecturer Jacob Strachotta.</span>
                                </p>
                                <p>When you’re consciously able to define the problem, your subconscious can find the
                                    solution. You’re gently guided into your subconscious towards the root of your
                                    problem, then given the tools to fix it.</p>
                                <p class="p1"><a href="result-driven-hypnosis/index.html">Read more about RDH</a></p>
                                <p class="p1"><a href="about/index.html">Read more about Jacob Strachotta</a></p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-lg-offset-1 theme--grey no-padding mb-2--inverse">
                            <div class="ratio-xs-1-1">
                                <div class="component-poster-image">
                                    <div class="partial-image">
                                        <div class="component-background-image backgroundImage fillAbsolute">
                                            <img draggable="false"
                                                 src="wp-content/uploads/2016/05/Hellomind-FP-section4-750x750.jpg"
                                                 srcset="http://hellomind.com/wp-content/uploads/2016/05/Hellomind-FP-section4-750x750.jpg 750w, http://hellomind.com/wp-content/uploads/2016/05/Hellomind-FP-section4-1280x1280.jpg 1280w, http://hellomind.com/wp-content/uploads/2016/05/Hellomind-FP-section4-1920x1920.jpg 1920w"
                                                 alt="" title="Hellomind-FP-section4" data-object-fit="cover">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="content content-secondary theme--grey theme--grey-transparent theme--down-green no-padding">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-lg-offset-1">

                            <div class="flex-row">
                                <div class="item no-padding item--audio flex flex--justifyCenter">
                                    <div class="partial-audio"
                                         data-audio-url="http://hellomind.com/wp-content/uploads/2016/05/Web-Page-Trial-Session_Assembly_Mar-13.mp3">
                                        <div class="partial partial-player">
                                            <div class="arc">
                                                <canvas></canvas>
                                            </div>
                                            <div class="sprite">
                                                <canvas></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item item--fill small-gutter-left">
                                    <div class="inner inner-small">
                                        <p class="subheading-bold color--secondary no-margin">Try a Booster session</p>
                                        <p>Example of a Booster session that will make you more motivated.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="deck4">
            <div class="content no-padding-breakpoint-down">
                <div class="background hidden-md-down pt-1" data-background-origin-y=".4">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-4"></div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row theme--down-white-alt">

                        <div class="col-lg-6 col-lg-offset-0 mt-1--inverse no-padding-breakpoint-down">

                            <p class="subheading-white hidden-lg-up">User stories.</p>

                            <div class="gallery-container">
                                <div class="partial-slider gallery">
                                    <div class="slider-container">
                                        <div class="slide">
                                            <div class="ratio-xs-1-1">
                                                <div class="partial partial-video">

                                                    <div class="poster fillAbsolute" data-poster-scale="1">
                                                        <div class="component-poster-image">
                                                            <div
                                                                class="component-background-image backgroundImage fillAbsolute">
                                                                <img draggable="false"
                                                                     src="wp-content/uploads/2016/08/charlotte-750x1002.jpg"
                                                                     srcset="http://hellomind.com/wp-content/uploads/2016/08/charlotte-750x1002.jpg 750w, http://hellomind.com/wp-content/uploads/2016/08/charlotte.jpg 1280w, http://hellomind.com/wp-content/uploads/2016/08/charlotte.jpg 1920w"
                                                                     alt="" title="charlotte" data-object-fit="cover">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="overlay hide--inactive"> <!--@classes .active -->
                                                        <div class="partial partial-player">
                                                            <div class="arc">
                                                                <canvas></canvas>
                                                            </div>
                                                            <div class="sprite">
                                                                <canvas></canvas>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="back show--completed flex flex--alignCenter flex--justifyCenter">
                                                            <svg class="symbol symbol--arrowLeft">
                                                                <use xlink:href="#symbol--arrowLeft"/>
                                                            </svg>
                                                        </div>

                                                        <div class="time subheading-bold">
                                                            <span class="progress show--active">00:00</span><span
                                                                class="show--active"> / </span><span class="duration">00:00</span>
                                                        </div>

                                                    </div>

                                                    <div class="video-container show--completed">
                                                        <video preload="auto">
                                                            <source
                                                                src="http://hellomind.com/wp-content/uploads/2016/08/charlotte.mp4.mp4"
                                                                type="video/mp4">
                                                        </video>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="ratio-xs-1-1">
                                                <div class="partial partial-video">

                                                    <div class="poster fillAbsolute" data-poster-scale="1">
                                                        <div class="component-poster-image">
                                                            <div
                                                                class="component-background-image backgroundImage fillAbsolute">
                                                                <img draggable="false"
                                                                     src="wp-content/uploads/2016/09/gail.00_00_00_00.Still001-750x1001.jpg"
                                                                     srcset="http://hellomind.com/wp-content/uploads/2016/09/gail.00_00_00_00.Still001-750x1001.jpg 750w, http://hellomind.com/wp-content/uploads/2016/09/gail.00_00_00_00.Still001.jpg 1280w, http://hellomind.com/wp-content/uploads/2016/09/gail.00_00_00_00.Still001.jpg 1920w"
                                                                     alt="" title="gail-00_00_00_00-still001"
                                                                     data-object-fit="cover">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="overlay hide--inactive"> <!--@classes .active -->
                                                        <div class="partial partial-player">
                                                            <div class="arc">
                                                                <canvas></canvas>
                                                            </div>
                                                            <div class="sprite">
                                                                <canvas></canvas>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="back show--completed flex flex--alignCenter flex--justifyCenter">
                                                            <svg class="symbol symbol--arrowLeft">
                                                                <use xlink:href="#symbol--arrowLeft"/>
                                                            </svg>
                                                        </div>

                                                        <div class="time subheading-bold">
                                                            <span class="progress show--active">00:00</span><span
                                                                class="show--active"> / </span><span class="duration">00:00</span>
                                                        </div>

                                                    </div>

                                                    <div class="video-container show--completed">
                                                        <video preload="auto">
                                                            <source
                                                                src="http://hellomind.com/wp-content/uploads/2016/09/gail.mp4.mp4"
                                                                type="video/mp4">
                                                        </video>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="ratio-xs-1-1">
                                                <div class="partial partial-video">

                                                    <div class="poster fillAbsolute" data-poster-scale="1">
                                                        <div class="component-poster-image">
                                                            <div
                                                                class="component-background-image backgroundImage fillAbsolute">
                                                                <img draggable="false"
                                                                     src="wp-content/uploads/2016/10/daniel-engelsk.00_00_00_00.Still001.jpg"
                                                                     srcset="http://hellomind.com/wp-content/uploads/2016/10/daniel-engelsk.00_00_00_00.Still001.jpg 750w, http://hellomind.com/wp-content/uploads/2016/10/daniel-engelsk.00_00_00_00.Still001.jpg 1280w, http://hellomind.com/wp-content/uploads/2016/10/daniel-engelsk.00_00_00_00.Still001.jpg 1920w"
                                                                     alt="" title="daniel-engelsk-00_00_00_00-still001"
                                                                     data-object-fit="cover">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="overlay hide--inactive"> <!--@classes .active -->
                                                        <div class="partial partial-player">
                                                            <div class="arc">
                                                                <canvas></canvas>
                                                            </div>
                                                            <div class="sprite">
                                                                <canvas></canvas>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="back show--completed flex flex--alignCenter flex--justifyCenter">
                                                            <svg class="symbol symbol--arrowLeft">
                                                                <use xlink:href="#symbol--arrowLeft"/>
                                                            </svg>
                                                        </div>

                                                        <div class="time subheading-bold">
                                                            <span class="progress show--active">00:00</span><span
                                                                class="show--active"> / </span><span class="duration">00:00</span>
                                                        </div>

                                                    </div>

                                                    <div class="video-container show--completed">
                                                        <video preload="auto">
                                                            <source
                                                                src="http://hellomind.com/wp-content/uploads/2016/10/daniel-engelsklogo.mp4.mp4"
                                                                type="video/mp4">
                                                        </video>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="ratio-xs-1-1">
                                                <div class="partial partial-video">

                                                    <div class="poster fillAbsolute" data-poster-scale="1">
                                                        <div class="component-poster-image">
                                                            <div
                                                                class="component-background-image backgroundImage fillAbsolute">
                                                                <img draggable="false"
                                                                     src="wp-content/uploads/2016/08/paige-750x990.jpg"
                                                                     srcset="http://hellomind.com/wp-content/uploads/2016/08/paige-750x990.jpg 750w, http://hellomind.com/wp-content/uploads/2016/08/paige.jpg 1280w, http://hellomind.com/wp-content/uploads/2016/08/paige.jpg 1920w"
                                                                     alt="" title="paige" data-object-fit="cover">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="overlay hide--inactive"> <!--@classes .active -->
                                                        <div class="partial partial-player">
                                                            <div class="arc">
                                                                <canvas></canvas>
                                                            </div>
                                                            <div class="sprite">
                                                                <canvas></canvas>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="back show--completed flex flex--alignCenter flex--justifyCenter">
                                                            <svg class="symbol symbol--arrowLeft">
                                                                <use xlink:href="#symbol--arrowLeft"/>
                                                            </svg>
                                                        </div>

                                                        <div class="time subheading-bold">
                                                            <span class="progress show--active">00:00</span><span
                                                                class="show--active"> / </span><span class="duration">00:00</span>
                                                        </div>

                                                    </div>

                                                    <div class="video-container show--completed">
                                                        <video preload="auto">
                                                            <source
                                                                src="http://hellomind.com/wp-content/uploads/2016/08/paige_1_ny_slut.mp4.mp4"
                                                                type="video/mp4">
                                                        </video>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="ratio-xs-1-1">
                                                <div class="partial partial-video">

                                                    <div class="poster fillAbsolute" data-poster-scale="1">
                                                        <div class="component-poster-image">
                                                            <div
                                                                class="component-background-image backgroundImage fillAbsolute">
                                                                <img draggable="false"
                                                                     src="wp-content/uploads/2016/08/ryan-750x1005.jpg"
                                                                     srcset="http://hellomind.com/wp-content/uploads/2016/08/ryan-750x1005.jpg 750w, http://hellomind.com/wp-content/uploads/2016/08/ryan.jpg 1280w, http://hellomind.com/wp-content/uploads/2016/08/ryan.jpg 1920w"
                                                                     alt="" title="ryan" data-object-fit="cover">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="overlay hide--inactive"> <!--@classes .active -->
                                                        <div class="partial partial-player">
                                                            <div class="arc">
                                                                <canvas></canvas>
                                                            </div>
                                                            <div class="sprite">
                                                                <canvas></canvas>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="back show--completed flex flex--alignCenter flex--justifyCenter">
                                                            <svg class="symbol symbol--arrowLeft">
                                                                <use xlink:href="#symbol--arrowLeft"/>
                                                            </svg>
                                                        </div>

                                                        <div class="time subheading-bold">
                                                            <span class="progress show--active">00:00</span><span
                                                                class="show--active"> / </span><span class="duration">00:00</span>
                                                        </div>

                                                    </div>

                                                    <div class="video-container show--completed">
                                                        <video preload="auto">
                                                            <source
                                                                src="http://hellomind.com/wp-content/uploads/2016/08/ryan_ny_slut.mp4.mp4"
                                                                type="video/mp4">
                                                        </video>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="ratio-xs-1-1">
                                                <div class="partial partial-video">

                                                    <div class="poster fillAbsolute" data-poster-scale="1">
                                                        <div class="component-poster-image">
                                                            <div
                                                                class="component-background-image backgroundImage fillAbsolute">
                                                                <img draggable="false"
                                                                     src="wp-content/uploads/2016/05/Oliver-1-750x530.jpg"
                                                                     srcset="http://hellomind.com/wp-content/uploads/2016/05/Oliver-1-750x530.jpg 750w, http://hellomind.com/wp-content/uploads/2016/05/Oliver-1-1280x905.jpg 1280w, http://hellomind.com/wp-content/uploads/2016/05/Oliver-1.jpg 1920w"
                                                                     alt="" title="Oliver" data-object-fit="cover">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="overlay hide--inactive"> <!--@classes .active -->
                                                        <div class="partial partial-player">
                                                            <div class="arc">
                                                                <canvas></canvas>
                                                            </div>
                                                            <div class="sprite">
                                                                <canvas></canvas>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="back show--completed flex flex--alignCenter flex--justifyCenter">
                                                            <svg class="symbol symbol--arrowLeft">
                                                                <use xlink:href="#symbol--arrowLeft"/>
                                                            </svg>
                                                        </div>

                                                        <div class="time subheading-bold">
                                                            <span class="progress show--active">00:00</span><span
                                                                class="show--active"> / </span><span class="duration">00:00</span>
                                                        </div>

                                                    </div>

                                                    <div class="video-container show--completed">
                                                        <video preload="auto">
                                                            <source
                                                                src="http://hellomind.com/wp-content/uploads/2016/08/Oliver-Final-Engelsk-Ny-1.mp4-1.mp4"
                                                                type="video/mp4">
                                                        </video>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="ratio-xs-1-1">
                                                <div class="partial partial-video">

                                                    <div class="poster fillAbsolute" data-poster-scale="1">
                                                        <div class="component-poster-image">
                                                            <div
                                                                class="component-background-image backgroundImage fillAbsolute">
                                                                <img draggable="false"
                                                                     src="wp-content/uploads/2016/05/simone-750x530.jpg"
                                                                     srcset="http://hellomind.com/wp-content/uploads/2016/05/simone-750x530.jpg 750w, http://hellomind.com/wp-content/uploads/2016/05/simone-1280x905.jpg 1280w, http://hellomind.com/wp-content/uploads/2016/05/simone.jpg 1920w"
                                                                     alt="" title="simone" data-object-fit="cover">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="overlay hide--inactive"> <!--@classes .active -->
                                                        <div class="partial partial-player">
                                                            <div class="arc">
                                                                <canvas></canvas>
                                                            </div>
                                                            <div class="sprite">
                                                                <canvas></canvas>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="back show--completed flex flex--alignCenter flex--justifyCenter">
                                                            <svg class="symbol symbol--arrowLeft">
                                                                <use xlink:href="#symbol--arrowLeft"/>
                                                            </svg>
                                                        </div>

                                                        <div class="time subheading-bold">
                                                            <span class="progress show--active">00:00</span><span
                                                                class="show--active"> / </span><span class="duration">00:00</span>
                                                        </div>

                                                    </div>

                                                    <div class="video-container show--completed">
                                                        <video preload="auto">
                                                            <source
                                                                src="http://hellomind.com/wp-content/uploads/2016/08/Simone-Final-Engelsk-Ny-1.mp4-1.mp4"
                                                                type="video/mp4">
                                                        </video>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="partial-thumbnails">
                                    <div class="scroller">
                                        <ul>
                                            <li class="thumbnail">
                                                <div class="ratio-xs-1-1">
                                                    <div class="partial-image">
                                                        <div
                                                            class="component-background-image backgroundImage fillAbsolute">
                                                            <img draggable="false"
                                                                 src="wp-content/uploads/2016/08/charlotte-750x1002.jpg"
                                                                 srcset="http://hellomind.com/wp-content/uploads/2016/08/charlotte-750x1002.jpg 750w, http://hellomind.com/wp-content/uploads/2016/08/charlotte.jpg 1280w, http://hellomind.com/wp-content/uploads/2016/08/charlotte.jpg 1920w"
                                                                 alt="" title="charlotte" data-object-fit="cover">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="thumbnail">
                                                <div class="ratio-xs-1-1">
                                                    <div class="partial-image">
                                                        <div
                                                            class="component-background-image backgroundImage fillAbsolute">
                                                            <img draggable="false"
                                                                 src="wp-content/uploads/2016/09/gail.00_00_00_00.Still001-750x1001.jpg"
                                                                 srcset="http://hellomind.com/wp-content/uploads/2016/09/gail.00_00_00_00.Still001-750x1001.jpg 750w, http://hellomind.com/wp-content/uploads/2016/09/gail.00_00_00_00.Still001.jpg 1280w, http://hellomind.com/wp-content/uploads/2016/09/gail.00_00_00_00.Still001.jpg 1920w"
                                                                 alt="" title="gail-00_00_00_00-still001"
                                                                 data-object-fit="cover">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="thumbnail">
                                                <div class="ratio-xs-1-1">
                                                    <div class="partial-image">
                                                        <div
                                                            class="component-background-image backgroundImage fillAbsolute">
                                                            <img draggable="false"
                                                                 src="wp-content/uploads/2016/10/daniel-engelsk.00_00_00_00.Still001.jpg"
                                                                 srcset="http://hellomind.com/wp-content/uploads/2016/10/daniel-engelsk.00_00_00_00.Still001.jpg 750w, http://hellomind.com/wp-content/uploads/2016/10/daniel-engelsk.00_00_00_00.Still001.jpg 1280w, http://hellomind.com/wp-content/uploads/2016/10/daniel-engelsk.00_00_00_00.Still001.jpg 1920w"
                                                                 alt="" title="daniel-engelsk-00_00_00_00-still001"
                                                                 data-object-fit="cover">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="thumbnail">
                                                <div class="ratio-xs-1-1">
                                                    <div class="partial-image">
                                                        <div
                                                            class="component-background-image backgroundImage fillAbsolute">
                                                            <img draggable="false"
                                                                 src="wp-content/uploads/2016/08/paige-750x990.jpg"
                                                                 srcset="http://hellomind.com/wp-content/uploads/2016/08/paige-750x990.jpg 750w, http://hellomind.com/wp-content/uploads/2016/08/paige.jpg 1280w, http://hellomind.com/wp-content/uploads/2016/08/paige.jpg 1920w"
                                                                 alt="" title="paige" data-object-fit="cover">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="thumbnail">
                                                <div class="ratio-xs-1-1">
                                                    <div class="partial-image">
                                                        <div
                                                            class="component-background-image backgroundImage fillAbsolute">
                                                            <img draggable="false"
                                                                 src="wp-content/uploads/2016/08/ryan-750x1005.jpg"
                                                                 srcset="http://hellomind.com/wp-content/uploads/2016/08/ryan-750x1005.jpg 750w, http://hellomind.com/wp-content/uploads/2016/08/ryan.jpg 1280w, http://hellomind.com/wp-content/uploads/2016/08/ryan.jpg 1920w"
                                                                 alt="" title="ryan" data-object-fit="cover">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="thumbnail">
                                                <div class="ratio-xs-1-1">
                                                    <div class="partial-image">
                                                        <div
                                                            class="component-background-image backgroundImage fillAbsolute">
                                                            <img draggable="false"
                                                                 src="wp-content/uploads/2016/05/Oliver-1-750x530.jpg"
                                                                 srcset="http://hellomind.com/wp-content/uploads/2016/05/Oliver-1-750x530.jpg 750w, http://hellomind.com/wp-content/uploads/2016/05/Oliver-1-1280x905.jpg 1280w, http://hellomind.com/wp-content/uploads/2016/05/Oliver-1.jpg 1920w"
                                                                 alt="" title="Oliver" data-object-fit="cover">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="thumbnail">
                                                <div class="ratio-xs-1-1">
                                                    <div class="partial-image">
                                                        <div
                                                            class="component-background-image backgroundImage fillAbsolute">
                                                            <img draggable="false"
                                                                 src="wp-content/uploads/2016/05/simone-750x530.jpg"
                                                                 srcset="http://hellomind.com/wp-content/uploads/2016/05/simone-750x530.jpg 750w, http://hellomind.com/wp-content/uploads/2016/05/simone-1280x905.jpg 1280w, http://hellomind.com/wp-content/uploads/2016/05/simone.jpg 1920w"
                                                                 alt="" title="simone" data-object-fit="cover">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <button class="prev disabled">
                                        <div class="partial-symbol">
                                            <svg class="symbol symbol--arrowRight">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xlink:href="#symbol--arrowLeft"></use>
                                            </svg>
                                        </div>
                                    </button>
                                    <button class="next">
                                        <div class="partial-symbol">
                                            <svg class="symbol symbol--arrowRight">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xlink:href="#symbol--arrowRight"></use>
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 col-lg-offset-1 pt-1" style="align-self: center">
                            <div class="inner trigger-element">
                                <div class="partial-slider quotes">
                                    <div class="slider-container">
                                        <div class="slide">
                                            <div class="subheading-group subheading-bold">
                                                <p>Charlotte</p>
                                                <p class="color--secondary hidden-lg-up"></p>
                                            </div>

                                            <div class="text hidden-md-down">
                                                <blockquote><p>“Charlotte was afraid of <strong>success</strong>”</p>
                                                </blockquote>
                                                <p>Afte using <strong>HelloMind </strong>she is not afraid of success
                                                    anymore. <strong>Not even a little bit.</strong></p>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="subheading-group subheading-bold">
                                                <p>Gail</p>
                                                <p class="color--secondary hidden-lg-up"></p>
                                            </div>

                                            <div class="text hidden-md-down">
                                                <blockquote><p>&#8220;This app makes it possible to
                                                        <strong>relax</strong>&#8220;</p></blockquote>
                                                <p>Gail is using <strong>HelloMind</strong> to relax after a long day at
                                                    work. Also on the subway train.</p>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="subheading-group subheading-bold">
                                                <p>Daniel</p>
                                                <p class="color--secondary hidden-lg-up"></p>
                                            </div>

                                            <div class="text hidden-md-down">
                                                <blockquote><p>&#8220;I have definitely felt that my <strong>sleep
                                                            patterns</strong> have gotten different. I would recommend
                                                        it <strong>to everyone</strong>&#8220;</p></blockquote>
                                                <p>Daniel used <strong>HelloMind</strong> to relax and have already felt
                                                    a change in his sleep pattern.</p>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="subheading-group subheading-bold">
                                                <p>Paige</p>
                                                <p class="color--secondary hidden-lg-up"></p>
                                            </div>

                                            <div class="text hidden-md-down">
                                                <blockquote><p>&#8220;I&#8217;ve been stressed for a long time. But the
                                                        app has been helping me <strong>not be so stressed</strong>&#8220;
                                                    </p></blockquote>
                                                <p>Paige was very stressed before she used <strong>HelloMind</strong>.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="subheading-group subheading-bold">
                                                <p>Ryan</p>
                                                <p class="color--secondary hidden-lg-up"></p>
                                            </div>

                                            <div class="text hidden-md-down">
                                                <blockquote><p>“This app is absolutely brilliant. It has given me
                                                        <strong>lots of confidence</strong>”</p></blockquote>
                                                <p><strong>HelloMind</strong> has given Ryan a lot of confidence, and he
                                                    is getting in a habit of doing a session every night.</p>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="subheading-group subheading-bold">
                                                <p>Oliver, 21</p>
                                                <p class="color--secondary hidden-lg-up">Sleeping problems for 8
                                                    years</p>
                                            </div>

                                            <div class="text hidden-md-down">
                                                <blockquote><p>“I had <strong>problems sleeping for 8 years</strong>. I
                                                        couldn’t even remember what a good night’s sleep felt like.”</p>
                                                </blockquote>
                                                <p>“On one of my better nights I would get 5 hours of sleep, and on my
                                                    worst nights I wouldn’t get any. Over the years I have tried
                                                    everything from conventional and natural medicine to reflexology and
                                                    a psychologist. Nothing helped me before <strong>HelloMind</strong>.”
                                                </p>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="subheading-group subheading-bold">
                                                <p>Simone, 24</p>
                                                <p class="color--secondary hidden-lg-up">Suffered from extreme test
                                                    anxiety</p>
                                            </div>

                                            <div class="text hidden-md-down">
                                                <blockquote><p>“I have always suffered from <strong>extreme test
                                                            anxiety</strong> and would feel bad just thinking about a
                                                        test.”</p></blockquote>
                                                <p>“My pulse would go up and I’d get all red-faced and feel like
                                                    vomiting. Even worse, I’d be crying before and during a test. The
                                                    different courses I’ve taken to battle my test anxiety haven’t
                                                    helped. But <strong>HelloMind</strong> has really made a
                                                    difference.”</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="section" id="appstore">
            <div class="content no-padding-breakpoint-down theme--down-green pb-2--up">
                <div class="container-fluid">
                    <div class="row mt-p18">
                        <div
                            class="col-lg-4 col-lg-offset-0 colum-padding-left mt-8p theme--white theme--down-white order-2-breakpoint-down"
                            data-parallax-y=".5">
                            <div class="inner">
                                <h2>Download.</h2>
                                <h2><span class="text-weight--light">Download the app from the App Store.</span></h2>
                                <p>Pick a treatment or try a Booster<br/>
                                    for only $8.99.</p>
                                <div class="partial partial-badge">
                                    <a href="https://itunes.apple.com/us/app/hellomind/id327538172?mt=8"
                                       target="_blank">
                                        <svg class="symbol symbol--badge" viewBox="0 0 135 40">

                                            <path class="color" d="M134,35.3V4.7c0-2.1-1.7-3.8-3.8-3.8H4.7c-2.1,0-3.8,1.7-3.8,3.8v30.5c0,2.1,1.7,3.8,3.8,3.8h125.5
		C132.3,39.1,134,37.4,134,35.3L134,35.3z"/>
                                            <path class="color--bg" d="M33.5,24.9c0,0.1-0.5,1.8-1.8,3.6c-1,1.6-2.1,3.1-3.9,3.1c-1.7,0-2.3-1-4.2-1c-2,0-2.6,1-4.2,1
			c-1.7,0.1-2.9-1.7-4-3.2c-2.2-3.2-3.9-8.9-1.6-12.9c1.1-1.9,3.1-3.2,5.2-3.2c1.7,0,3.2,1.1,4.2,1.1c1,0,2.9-1.4,4.9-1.2
			c0.8,0,3.2,0.3,4.7,2.5c-0.1,0.1-2.8,1.6-2.8,4.9C30.2,23.6,33.5,24.9,33.5,24.9z M26.9,10.3c0.9-1.1,1.5-2.6,1.3-4.1
			c-1.3,0.1-2.8,0.9-3.8,1.9c-0.8,0.9-1.5,2.5-1.3,3.9C24.6,12.2,26,11.4,26.9,10.3z M49.3,18.2h-2.6l-4.3,13.3h2.2l1.2-3.9h4.3
			l1.2,3.9h2.3L49.3,18.2z M46.2,26l1.1-3.5c0.3-1.1,0.5-1.9,0.6-2.5h0c0.3,1.3,0.6,2.2,0.7,2.5l1.1,3.5H46.2z M63.5,23.1
			c-0.8-0.9-1.7-1.3-2.8-1.3c-1.4,0-2.5,0.6-3.2,1.7h0l-0.1-1.5h-1.9c0.1,1.1,0.1,2.1,0.1,3.2v10.3h2.1v-5.1h0
			c0.6,0.9,1.5,1.4,2.7,1.4c1.2,0,2.2-0.4,2.9-1.3c0.9-0.9,1.3-2.2,1.3-3.9C64.7,25.1,64.3,23.9,63.5,23.1z M61.8,29.1
			c-0.4,0.6-1.1,0.9-1.9,0.9c-0.7,0-1.2-0.2-1.7-0.7c-0.4-0.5-0.6-1.1-0.6-1.8V26c0-0.2,0-0.4,0.1-0.7c0.1-0.6,0.4-1,0.8-1.4
			c0.4-0.3,0.9-0.5,1.4-0.5c0.8,0,1.4,0.3,1.9,0.9c0.4,0.6,0.6,1.4,0.6,2.3C62.5,27.7,62.3,28.5,61.8,29.1z M74.6,23.1
			c-0.8-0.9-1.7-1.3-2.8-1.3c-1.4,0-2.5,0.6-3.2,1.7h0l-0.1-1.5h-1.9c0.1,1.1,0.1,2.1,0.1,3.2v10.3h2.1v-5.1h0
			c0.6,0.9,1.5,1.4,2.7,1.4c1.2,0,2.2-0.4,2.9-1.3c0.9-0.9,1.3-2.2,1.3-3.9C75.7,25.1,75.3,23.9,74.6,23.1z M72.9,29.1
			C72.4,29.7,71.8,30,71,30c-0.7,0-1.2-0.2-1.7-0.7c-0.4-0.5-0.6-1.1-0.6-1.8V26c0-0.2,0-0.4,0.1-0.7c0.1-0.6,0.4-1,0.8-1.4
			c0.4-0.3,0.9-0.5,1.4-0.5c0.8,0,1.4,0.3,1.9,0.9c0.4,0.6,0.6,1.4,0.6,2.3C73.5,27.7,73.3,28.5,72.9,29.1z M87.2,25.5
			c-0.5-0.6-1.4-1.2-2.5-1.6c-0.9-0.4-1.6-0.7-1.9-1c-0.4-0.3-0.6-0.8-0.6-1.3c0-0.5,0.2-0.9,0.5-1.2c0.4-0.4,1-0.6,1.8-0.6
			c0.9,0,1.8,0.2,2.5,0.6l0.5-1.7c-0.8-0.4-1.8-0.6-3-0.6c-1.4,0-2.4,0.3-3.3,1c-0.8,0.7-1.2,1.6-1.2,2.7c0,1.7,1.2,2.9,3.5,3.8
			c0.9,0.3,1.5,0.7,1.8,1c0.4,0.4,0.6,0.8,0.6,1.4c0,0.6-0.2,1.1-0.7,1.5c-0.4,0.4-1.1,0.5-1.9,0.5c-1.1,0-2.1-0.3-3.1-0.8l-0.5,1.8
			c0.9,0.6,2,0.8,3.4,0.8c1.6,0,2.8-0.4,3.6-1.2c0.8-0.7,1.2-1.6,1.2-2.8C88,26.9,87.8,26.1,87.2,25.5z M95.1,21.9h-2.3v-2.4l-2.1,0.6
			v1.8h-1.4v1.6h1.4v4.8c0,1.2,0.2,2.1,0.7,2.6c0.5,0.5,1.1,0.8,2,0.8c0.7,0,1.2-0.1,1.7-0.2l-0.1-1.6c-0.2,0.1-0.6,0.1-0.9,0.1
			c-0.8,0-1.2-0.6-1.2-1.8v-4.7h2.3V21.9z M104.5,23.1c-0.9-0.9-2-1.4-3.4-1.4c-1.5,0-2.6,0.5-3.5,1.4c-0.9,0.9-1.3,2.2-1.3,3.7
			c0,1.4,0.4,2.6,1.3,3.5c0.8,0.9,2,1.4,3.4,1.4c1.5,0,2.6-0.5,3.5-1.5c0.8-0.9,1.3-2.2,1.3-3.6C105.7,25.2,105.3,24,104.5,23.1z
			 M102.9,29c-0.5,0.8-1.1,1.2-1.9,1.2c-0.8,0-1.5-0.4-1.9-1.1c-0.4-0.6-0.6-1.4-0.6-2.3c0-0.9,0.2-1.7,0.6-2.3c0.4-0.8,1.1-1.1,2-1.1
			c0.8,0,1.5,0.4,1.9,1.1c0.4,0.6,0.6,1.4,0.6,2.3C103.5,27.6,103.3,28.3,102.9,29z M112.6,21.8c-0.2,0-0.3,0-0.5,0
			c-0.6,0-1.1,0.2-1.5,0.5c-0.5,0.4-0.8,0.9-1.1,1.5h-0.1l-0.1-1.8h-1.9c0.1,0.9,0.1,1.9,0.1,3l0,6.6h2.1v-5c0-0.8,0.2-1.4,0.5-1.9
			c0.4-0.6,1-0.8,1.7-0.8c0.2,0,0.5,0,0.7,0.1V21.8z M121.3,23.2c-0.7-1-1.8-1.5-3.1-1.5c-1.4,0-2.5,0.5-3.4,1.5
			c-0.8,1-1.2,2.2-1.2,3.6c0,1.5,0.4,2.6,1.3,3.5c0.8,0.9,2,1.3,3.5,1.3c1.2,0,2.3-0.2,3.2-0.6l-0.3-1.5c-0.8,0.3-1.6,0.5-2.6,0.5
			c-0.9,0-1.6-0.2-2.1-0.7c-0.6-0.5-0.9-1.2-0.9-2.2h6.4c0.1-0.3,0.1-0.6,0.1-1C122.2,25.1,121.9,24,121.3,23.2z M115.7,25.7
			c0.1-0.6,0.3-1.2,0.6-1.7c0.4-0.6,1-0.9,1.7-0.9c0.8,0,1.3,0.3,1.7,0.9c0.3,0.5,0.4,1,0.4,1.6H115.7z M48.1,7.6
			c-0.6-0.5-1.4-0.7-2.6-0.7c-0.6,0-1.2,0-1.8,0.1v6.4c0.4,0.1,0.9,0.1,1.5,0.1c1.2,0,2.1-0.3,2.8-0.8c0.7-0.6,1.1-1.5,1.1-2.7
			C49.1,9,48.7,8.2,48.1,7.6z M47.3,12c-0.4,0.4-1.1,0.7-1.9,0.7c-0.3,0-0.6,0-0.7,0V7.7c0.2,0,0.5-0.1,0.8-0.1c0.8,0,1.4,0.2,1.8,0.6
			c0.4,0.4,0.6,1,0.6,1.8C47.9,10.9,47.7,11.5,47.3,12z M54.3,9.3c-0.4-0.5-1-0.7-1.7-0.7c-0.7,0-1.3,0.2-1.7,0.7
			c-0.4,0.5-0.6,1.1-0.6,1.8c0,0.7,0.2,1.3,0.6,1.7c0.4,0.5,1,0.7,1.7,0.7c0.7,0,1.3-0.2,1.7-0.7c0.4-0.5,0.6-1.1,0.6-1.8
			C54.9,10.3,54.7,9.8,54.3,9.3z M53.5,12.2c-0.2,0.4-0.5,0.6-0.9,0.6c-0.4,0-0.7-0.2-1-0.6c-0.2-0.3-0.3-0.7-0.3-1.1
			c0-0.4,0.1-0.8,0.3-1.1c0.2-0.4,0.5-0.6,1-0.6c0.4,0,0.7,0.2,0.9,0.6c0.2,0.3,0.3,0.7,0.3,1.1C53.8,11.5,53.7,11.9,53.5,12.2z
			 M61.7,8.7l-0.6,2.2c-0.1,0.5-0.2,1.1-0.3,1.6h0c-0.1-0.5-0.2-1-0.4-1.6l-0.6-2.2h-0.9L58.3,11c-0.2,0.6-0.3,1.1-0.4,1.5h0
			c-0.1-0.5-0.2-1-0.3-1.5L57,8.7h-1.1l1.4,4.7h1l0.6-2c0.2-0.5,0.3-1,0.4-1.5h0c0.1,0.5,0.2,1,0.4,1.5l0.6,2h1l1.5-4.7H61.7z
			 M68.2,10.6c0-0.7-0.2-1.2-0.5-1.6c-0.3-0.3-0.7-0.4-1.1-0.4c-0.3,0-0.7,0.1-1,0.3c-0.2,0.2-0.4,0.3-0.5,0.6h0l0-0.7h-0.9
			c0,0.5,0,0.9,0,1.3v3.4h1v-2.8c0-0.3,0.1-0.6,0.3-0.8c0.2-0.2,0.4-0.3,0.8-0.3c0.6,0,1,0.4,1,1.2v2.7h1V10.6z M71.1,6.6h-1v6.9h1
			V6.6z M76.7,9.3c-0.4-0.5-1-0.7-1.7-0.7c-0.7,0-1.3,0.2-1.7,0.7c-0.4,0.5-0.6,1.1-0.6,1.8c0,0.7,0.2,1.3,0.6,1.7
			c0.4,0.5,1,0.7,1.7,0.7c0.7,0,1.3-0.2,1.7-0.7c0.4-0.5,0.6-1.1,0.6-1.8C77.3,10.3,77.1,9.8,76.7,9.3z M75.9,12.2
			c-0.2,0.4-0.5,0.6-0.9,0.6c-0.4,0-0.7-0.2-1-0.6c-0.2-0.3-0.3-0.7-0.3-1.1c0-0.4,0.1-0.8,0.3-1.1c0.2-0.4,0.5-0.6,1-0.6
			c0.4,0,0.7,0.2,0.9,0.6c0.2,0.3,0.3,0.7,0.3,1.1C76.2,11.5,76.1,11.9,75.9,12.2z M82.3,12.3v-1.7c0-1.3-0.6-1.9-1.8-1.9
			c-0.6,0-1.2,0.1-1.6,0.4L79,9.7c0.4-0.2,0.8-0.3,1.2-0.3c0.7,0,1,0.3,1,0.9v0.1c-0.9,0-1.6,0.1-2,0.4c-0.5,0.3-0.7,0.7-0.7,1.3
			c0,0.4,0.1,0.7,0.4,1c0.3,0.3,0.6,0.4,1.1,0.4c0.6,0,1.1-0.2,1.4-0.6h0l0.1,0.5h0.9C82.3,13.2,82.3,12.8,82.3,12.3z M81.2,12
			c0,0.2-0.2,0.4-0.4,0.6c-0.2,0.1-0.4,0.2-0.6,0.2c-0.2,0-0.4-0.1-0.5-0.2c-0.1-0.1-0.2-0.3-0.2-0.6c0-0.7,0.6-1,1.7-1v0.7
			C81.2,11.9,81.2,11.9,81.2,12z M88.2,12.2V6.6h-1v2.7h0c-0.3-0.4-0.7-0.6-1.3-0.6c-0.6,0-1.1,0.2-1.5,0.7c-0.4,0.5-0.6,1.1-0.6,1.9
			c0,0.7,0.2,1.3,0.6,1.7c0.4,0.4,0.8,0.7,1.4,0.7c0.7,0,1.2-0.3,1.5-0.9h0l0,0.8h0.9C88.3,13,88.2,12.6,88.2,12.2z M86.9,12.3
			c-0.2,0.3-0.5,0.4-0.8,0.4c-0.4,0-0.7-0.2-0.9-0.5c-0.2-0.3-0.3-0.7-0.3-1.1c0-0.5,0.1-0.9,0.3-1.2c0.2-0.3,0.5-0.5,0.9-0.5
			c0.3,0,0.5,0.1,0.7,0.3c0.2,0.2,0.3,0.4,0.4,0.6c0,0.1,0,0.2,0,0.3v0.8C87.2,11.8,87.1,12.1,86.9,12.3z M96.6,9.3
			c-0.4-0.5-1-0.7-1.7-0.7c-0.7,0-1.3,0.2-1.7,0.7c-0.4,0.5-0.6,1.1-0.6,1.8c0,0.7,0.2,1.3,0.6,1.7c0.4,0.5,1,0.7,1.7,0.7
			c0.7,0,1.3-0.2,1.7-0.7c0.4-0.5,0.6-1.1,0.6-1.8C97.2,10.3,97,9.8,96.6,9.3z M95.9,12.2c-0.2,0.4-0.5,0.6-0.9,0.6
			c-0.4,0-0.7-0.2-1-0.6c-0.2-0.3-0.3-0.7-0.3-1.1c0-0.4,0.1-0.8,0.3-1.1c0.2-0.4,0.5-0.6,1-0.6c0.4,0,0.7,0.2,0.9,0.6
			c0.2,0.3,0.3,0.7,0.3,1.1C96.2,11.5,96.1,11.9,95.9,12.2z M102.9,10.6c0-0.7-0.2-1.2-0.5-1.6c-0.3-0.3-0.7-0.4-1.1-0.4
			c-0.3,0-0.7,0.1-1,0.3c-0.2,0.2-0.4,0.3-0.5,0.6h0l0-0.7h-0.9c0,0.5,0,0.9,0,1.3v3.4h1v-2.8c0-0.3,0.1-0.6,0.3-0.8s0.4-0.3,0.8-0.3
			c0.6,0,1,0.4,1,1.2v2.7h1V10.6z M109.9,8.7h-1.2V7.5l-1,0.3v0.9h-0.7v0.8h0.7v2.4c0,0.6,0.1,1,0.3,1.3c0.2,0.3,0.6,0.4,1,0.4
			c0.3,0,0.6,0,0.8-0.1l0-0.8c-0.1,0-0.3,0-0.5,0c-0.4,0-0.6-0.3-0.6-0.9V9.5h1.2V8.7z M115.5,10.6c0-0.7-0.2-1.2-0.5-1.6
			c-0.3-0.3-0.6-0.4-1.1-0.4c-0.6,0-1.1,0.3-1.4,0.8h0V6.6h-1v6.9h1v-2.8c0-0.1,0-0.3,0-0.4c0.2-0.5,0.5-0.7,1-0.7
			c0.6,0,0.9,0.4,0.9,1.3v2.7h1V10.6z M120.8,9.4c-0.3-0.5-0.9-0.8-1.5-0.8c-0.7,0-1.2,0.3-1.6,0.8c-0.4,0.5-0.6,1.1-0.6,1.8
			c0,0.7,0.2,1.3,0.6,1.7c0.4,0.4,1,0.6,1.7,0.6c0.6,0,1.1-0.1,1.6-0.3l-0.2-0.7c-0.4,0.1-0.8,0.2-1.3,0.2c-0.4,0-0.8-0.1-1-0.3
			c-0.3-0.2-0.4-0.6-0.5-1.1h3.1c0-0.1,0-0.3,0-0.5C121.2,10.3,121.1,9.8,120.8,9.4z M118,10.6c0-0.3,0.1-0.6,0.3-0.8
			c0.2-0.3,0.5-0.4,0.8-0.4c0.4,0,0.7,0.1,0.8,0.4c0.1,0.2,0.2,0.5,0.2,0.8H118z"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="color--secondary">
                                    <p>For the moment HelloMind is available only for Apple iOS. <span class="s1">We’re working on a version for Android.</span>
                                    </p>
                                    <p><a href="android/index.html">Click here</a> if you’d like to be notified when the
                                        Android version is available.</p>
                                    <p>&nbsp;</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 margin-phone-down" data-parallax-y=".5">
                            <div class="row theme--down-white pb-1">
                                <div class="pane background theme--green" data-background-origin-y="0"
                                     data-background-start=".2"></div>
                                <div class="col-lg-6 max-width-down">
                                    <div class="partial-phone margin-invert-up">
                                        <div class="screen-container">
                                            <div class="partial partial-sprite"
                                                 data-sprite-images='["<?= base_url('uploads/\/EN_640h_01-scroll.png') ?>"]'
                                                 data-sprite-images-down="[false]" data-sprite-loop="1"
                                                 data-sprite-frame-height="640" data-sprite-frame-height-down=""
                                                 data-sprite-start-delay="" data-sprite-end-delay=""
                                                 data-sprite-disabled-on-down="1"
                                                 data-sprite-fallback-image="<?= base_url('uploads/fallback_app_store_frame.jpg') ?>">
                                                <canvas></canvas>
                                                <div class="partial partial-small-loader">
                                                    <div class="dot"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="<?= base_url('assets/images/phone.png') ?>" alt title>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-6 colum-padding-right no-padding-left hidden-md-down flex--alignSelfCenter">
                                    <div class="inner color--secondary text-size--2 text-weight--light trigger-element">
                                        <span class="label top"></span>
                                        <span class="label bottom"></span>
                                        <blockquote><p>“This app has <strong>changed my life</strong> and I am so
                                                grateful.”</p></blockquote>
                                        <p class="subheading-bold">Gail, New York</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="aside-container theme--white-alt">
        <div class="component-aside">
            <div class="item fill">
                <a href="https://itunes.apple.com/us/app/hellomind/id327538172?mt=8" class="sans-underline"
                   target="_blank">Available on the App Store</a>
            </div>
            <div class="item">
                <div class="partial-indicators" id="frontpage-indicators"></div>
            </div>
            <div class="item fill">
                <div class="partial partial-list" id="frontpage-list">
                    <ul>

                        <li>Read more
                            <div class="partial-symbol">
                                <svg class="symbol symbol--arrowRight">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                         xlink:href="#symbol--arrowRight"></use>
                                </svg>
                            </div>
                        </li>
                        <li>It's easy.</li>
                        <li>Get started.</li>
                        <li>Result driven hypnosis.</li>
                        <li>User stories.</li>
                        <li>Download.</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>


</main>

<div class="social-footer theme--white-alt">
    <div class="container-fluid">
        <div class="content">
            <div class="component-social component-topbar">
                <ul>
                    <li class="dim">
                        Follow us
                    </li>
                    <li>
                        <ul class="stack-down">
                            <li>
                                <a href="https://www.facebook.com/HelloMindApp/" target="_blank">Facebook</a>
                            </li>
                            <li>
                                <a href="https://twitter.com/HelloMindApp" target="_blank">Twitter</a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/hellomind.app/" target="_blank">Instagram</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<svg id="symbols" xmlns="http://www.w3.org/2000/svg" width="0" height="0">
    <symbol id="symbol--arrowLeft" viewBox="0 0 20 20">
        <path d="M19.7,11H4.1l4,4l-1.4,1.4L0.3,10l6.4-6.4L8.1,5l-4,4h15.6V11z"/>
    </symbol>

    <symbol id="symbol--arrowDown" viewBox="0 0 540 540">
        <path d="M297,8.1v421.2l108-108l37.8,37.8L270,531.9L97.2,359.1l37.8-37.8l108,108V8.1H297z"/>
    </symbol>

    <symbol id="symbol--arrowRight" viewBox="0 0 540 540">
        <path d="M8.1,243h421.2l-108-108l37.8-37.8L531.9,270L359.1,442.8L321.3,405l108-108H8.1V243z"/>
    </symbol>


    <symbol id="symbol--logo" viewBox="0 0 400 60">
        <path d="M281.3,7.6c0,4-3.2,7.2-7.2,7.2c-4,0-7.2-3.2-7.2-7.2s3.2-7.2,7.2-7.2C278.1,0.4,281.3,3.6,281.3,7.6 M48.2,6.4H35.4v20.3
			H13.6V6.4H0.8v52.4h12.8V36.8h21.8v21.9h12.8V6.4z M95.3,42.9c0,0,0.2-2.2,0.2-4c0-10.9-8-18.3-19.5-18.3c-11.5,0-21,7.1-21,19.4
			s8.7,19.5,20.7,19.5c12.1,0,17.2-5.2,18.4-6.1l-5-6.3c-2.2,1.4-6.6,3.6-11.7,3.6c-5.1,0-9.4-2.4-9.9-7.8H95.3 M67.7,36
			c0.2-3.6,2.8-7.5,8-7.5c5.3,0,7.9,4.1,8,7.5H67.7z M115.8,6.4h-12.6v52.4h12.6V6.4z M138.9,6.4h-12.6v52.4h12.6V6.4z M167.7,59.6
			c12.3,0,21.5-7.4,21.5-19.4c0-12.1-9.2-19.5-21.5-19.5c-12.3,0-21.6,7.4-21.6,19.5C146.1,52.2,155.4,59.6,167.7,59.6 M167.7,30.2
			c5.5,0,8.8,4.2,8.8,9.7s-3.3,9.7-8.8,9.7c-5.6,0-8.8-4.2-8.8-9.7S162.1,30.2,167.7,30.2 M254.8,6.4h-16.2l-11.2,34.5h-0.2L216,6.4
			h-16.1l-4.1,52.4h12.5l2-35.7h0.2l11.7,35.7h10.1L244,23.1h0.2l2.1,35.7h12.5L254.8,6.4z M280.4,21.3h-12.6v37.4h12.6V21.3z
			 M328.7,36.7c0-9-2.9-16-14.2-16c-5.6,0-9.1,2.7-11.3,6.1H303l0.1-5.4h-12.6v37.4h12.6V40.2c0-5.4,1.5-9.6,6.9-9.6
			c5.2,0,6,3.7,6,8.7v19.5h12.6V36.7z M378.4,6.4h-12.6v19.5c-1.3-1.8-5.2-5.2-12.3-5.2c-11.3,0-18.4,8.4-18.4,19.4
			c0,11,7.1,19.5,18.4,19.5c5.2,0,9.9-1.9,12.8-5.7l0.2-0.1l-0.1,4.9h12V6.4z M357.1,30.2c5.4,0,9.1,3.9,9.1,9.7s-3.6,9.7-9.1,9.7
			c-5.4,0-9.1-3.9-9.1-9.7S351.6,30.2,357.1,30.2 M399.2,52.1c0-4-3.2-7.2-7.2-7.2c-4,0-7.2,3.2-7.2,7.2s3.2,7.2,7.2,7.2
			C396,59.3,399.2,56.1,399.2,52.1"/>
    </symbol>


    <symbol id="symbol--badge" viewBox="0 0 135 40">
        <path fill="#FFFFFF" d="M134,35.3V4.7c0-2.1-1.7-3.8-3.8-3.8H4.7c-2.1,0-3.8,1.7-3.8,3.8v30.5c0,2.1,1.7,3.8,3.8,3.8h125.5
	C132.3,39.1,134,37.4,134,35.3L134,35.3z"/>
        <path d="M33.5,24.9c0,0.1-0.5,1.8-1.8,3.6c-1,1.6-2.1,3.1-3.9,3.1c-1.7,0-2.3-1-4.2-1c-2,0-2.6,1-4.2,1
		c-1.7,0.1-2.9-1.7-4-3.2c-2.2-3.2-3.9-8.9-1.6-12.9c1.1-1.9,3.1-3.2,5.2-3.2c1.7,0,3.2,1.1,4.2,1.1c1,0,2.9-1.4,4.9-1.2
		c0.8,0,3.2,0.3,4.7,2.5c-0.1,0.1-2.8,1.6-2.8,4.9C30.2,23.6,33.5,24.9,33.5,24.9z M26.9,10.3c0.9-1.1,1.5-2.6,1.3-4.1
		c-1.3,0.1-2.8,0.9-3.8,1.9c-0.8,0.9-1.5,2.5-1.3,3.9C24.6,12.2,26,11.4,26.9,10.3z M49.3,18.2h-2.6l-4.3,13.3h2.2l1.2-3.9h4.3
		l1.2,3.9h2.3L49.3,18.2z M46.2,26l1.1-3.5c0.3-1.1,0.5-1.9,0.6-2.5h0c0.3,1.3,0.6,2.2,0.7,2.5l1.1,3.5H46.2z M63.5,23.1
		c-0.8-0.9-1.7-1.3-2.8-1.3c-1.4,0-2.5,0.6-3.2,1.7h0l-0.1-1.5h-1.9c0.1,1.1,0.1,2.1,0.1,3.2v10.3h2.1v-5.1h0
		c0.6,0.9,1.5,1.4,2.7,1.4c1.2,0,2.2-0.4,2.9-1.3c0.9-0.9,1.3-2.2,1.3-3.9C64.7,25.1,64.3,23.9,63.5,23.1z M61.8,29.1
		c-0.4,0.6-1.1,0.9-1.9,0.9c-0.7,0-1.2-0.2-1.7-0.7c-0.4-0.5-0.6-1.1-0.6-1.8V26c0-0.2,0-0.4,0.1-0.7c0.1-0.6,0.4-1,0.8-1.4
		c0.4-0.3,0.9-0.5,1.4-0.5c0.8,0,1.4,0.3,1.9,0.9c0.4,0.6,0.6,1.4,0.6,2.3C62.5,27.7,62.3,28.5,61.8,29.1z M74.6,23.1
		c-0.8-0.9-1.7-1.3-2.8-1.3c-1.4,0-2.5,0.6-3.2,1.7h0l-0.1-1.5h-1.9c0.1,1.1,0.1,2.1,0.1,3.2v10.3h2.1v-5.1h0
		c0.6,0.9,1.5,1.4,2.7,1.4c1.2,0,2.2-0.4,2.9-1.3c0.9-0.9,1.3-2.2,1.3-3.9C75.7,25.1,75.3,23.9,74.6,23.1z M72.9,29.1
		C72.4,29.7,71.8,30,71,30c-0.7,0-1.2-0.2-1.7-0.7c-0.4-0.5-0.6-1.1-0.6-1.8V26c0-0.2,0-0.4,0.1-0.7c0.1-0.6,0.4-1,0.8-1.4
		c0.4-0.3,0.9-0.5,1.4-0.5c0.8,0,1.4,0.3,1.9,0.9c0.4,0.6,0.6,1.4,0.6,2.3C73.5,27.7,73.3,28.5,72.9,29.1z M87.2,25.5
		c-0.5-0.6-1.4-1.2-2.5-1.6c-0.9-0.4-1.6-0.7-1.9-1c-0.4-0.3-0.6-0.8-0.6-1.3c0-0.5,0.2-0.9,0.5-1.2c0.4-0.4,1-0.6,1.8-0.6
		c0.9,0,1.8,0.2,2.5,0.6l0.5-1.7c-0.8-0.4-1.8-0.6-3-0.6c-1.4,0-2.4,0.3-3.3,1c-0.8,0.7-1.2,1.6-1.2,2.7c0,1.7,1.2,2.9,3.5,3.8
		c0.9,0.3,1.5,0.7,1.8,1c0.4,0.4,0.6,0.8,0.6,1.4c0,0.6-0.2,1.1-0.7,1.5c-0.4,0.4-1.1,0.5-1.9,0.5c-1.1,0-2.1-0.3-3.1-0.8l-0.5,1.8
		c0.9,0.6,2,0.8,3.4,0.8c1.6,0,2.8-0.4,3.6-1.2c0.8-0.7,1.2-1.6,1.2-2.8C88,26.9,87.8,26.1,87.2,25.5z M95.1,21.9h-2.3v-2.4l-2.1,0.6
		v1.8h-1.4v1.6h1.4v4.8c0,1.2,0.2,2.1,0.7,2.6c0.5,0.5,1.1,0.8,2,0.8c0.7,0,1.2-0.1,1.7-0.2l-0.1-1.6c-0.2,0.1-0.6,0.1-0.9,0.1
		c-0.8,0-1.2-0.6-1.2-1.8v-4.7h2.3V21.9z M104.5,23.1c-0.9-0.9-2-1.4-3.4-1.4c-1.5,0-2.6,0.5-3.5,1.4c-0.9,0.9-1.3,2.2-1.3,3.7
		c0,1.4,0.4,2.6,1.3,3.5c0.8,0.9,2,1.4,3.4,1.4c1.5,0,2.6-0.5,3.5-1.5c0.8-0.9,1.3-2.2,1.3-3.6C105.7,25.2,105.3,24,104.5,23.1z
		 M102.9,29c-0.5,0.8-1.1,1.2-1.9,1.2c-0.8,0-1.5-0.4-1.9-1.1c-0.4-0.6-0.6-1.4-0.6-2.3c0-0.9,0.2-1.7,0.6-2.3c0.4-0.8,1.1-1.1,2-1.1
		c0.8,0,1.5,0.4,1.9,1.1c0.4,0.6,0.6,1.4,0.6,2.3C103.5,27.6,103.3,28.3,102.9,29z M112.6,21.8c-0.2,0-0.3,0-0.5,0
		c-0.6,0-1.1,0.2-1.5,0.5c-0.5,0.4-0.8,0.9-1.1,1.5h-0.1l-0.1-1.8h-1.9c0.1,0.9,0.1,1.9,0.1,3l0,6.6h2.1v-5c0-0.8,0.2-1.4,0.5-1.9
		c0.4-0.6,1-0.8,1.7-0.8c0.2,0,0.5,0,0.7,0.1V21.8z M121.3,23.2c-0.7-1-1.8-1.5-3.1-1.5c-1.4,0-2.5,0.5-3.4,1.5
		c-0.8,1-1.2,2.2-1.2,3.6c0,1.5,0.4,2.6,1.3,3.5c0.8,0.9,2,1.3,3.5,1.3c1.2,0,2.3-0.2,3.2-0.6l-0.3-1.5c-0.8,0.3-1.6,0.5-2.6,0.5
		c-0.9,0-1.6-0.2-2.1-0.7c-0.6-0.5-0.9-1.2-0.9-2.2h6.4c0.1-0.3,0.1-0.6,0.1-1C122.2,25.1,121.9,24,121.3,23.2z M115.7,25.7
		c0.1-0.6,0.3-1.2,0.6-1.7c0.4-0.6,1-0.9,1.7-0.9c0.8,0,1.3,0.3,1.7,0.9c0.3,0.5,0.4,1,0.4,1.6H115.7z M48.1,7.6
		c-0.6-0.5-1.4-0.7-2.6-0.7c-0.6,0-1.2,0-1.8,0.1v6.4c0.4,0.1,0.9,0.1,1.5,0.1c1.2,0,2.1-0.3,2.8-0.8c0.7-0.6,1.1-1.5,1.1-2.7
		C49.1,9,48.7,8.2,48.1,7.6z M47.3,12c-0.4,0.4-1.1,0.7-1.9,0.7c-0.3,0-0.6,0-0.7,0V7.7c0.2,0,0.5-0.1,0.8-0.1c0.8,0,1.4,0.2,1.8,0.6
		c0.4,0.4,0.6,1,0.6,1.8C47.9,10.9,47.7,11.5,47.3,12z M54.3,9.3c-0.4-0.5-1-0.7-1.7-0.7c-0.7,0-1.3,0.2-1.7,0.7
		c-0.4,0.5-0.6,1.1-0.6,1.8c0,0.7,0.2,1.3,0.6,1.7c0.4,0.5,1,0.7,1.7,0.7c0.7,0,1.3-0.2,1.7-0.7c0.4-0.5,0.6-1.1,0.6-1.8
		C54.9,10.3,54.7,9.8,54.3,9.3z M53.5,12.2c-0.2,0.4-0.5,0.6-0.9,0.6c-0.4,0-0.7-0.2-1-0.6c-0.2-0.3-0.3-0.7-0.3-1.1
		c0-0.4,0.1-0.8,0.3-1.1c0.2-0.4,0.5-0.6,1-0.6c0.4,0,0.7,0.2,0.9,0.6c0.2,0.3,0.3,0.7,0.3,1.1C53.8,11.5,53.7,11.9,53.5,12.2z
		 M61.7,8.7l-0.6,2.2c-0.1,0.5-0.2,1.1-0.3,1.6h0c-0.1-0.5-0.2-1-0.4-1.6l-0.6-2.2h-0.9L58.3,11c-0.2,0.6-0.3,1.1-0.4,1.5h0
		c-0.1-0.5-0.2-1-0.3-1.5L57,8.7h-1.1l1.4,4.7h1l0.6-2c0.2-0.5,0.3-1,0.4-1.5h0c0.1,0.5,0.2,1,0.4,1.5l0.6,2h1l1.5-4.7H61.7z
		 M68.2,10.6c0-0.7-0.2-1.2-0.5-1.6c-0.3-0.3-0.7-0.4-1.1-0.4c-0.3,0-0.7,0.1-1,0.3c-0.2,0.2-0.4,0.3-0.5,0.6h0l0-0.7h-0.9
		c0,0.5,0,0.9,0,1.3v3.4h1v-2.8c0-0.3,0.1-0.6,0.3-0.8c0.2-0.2,0.4-0.3,0.8-0.3c0.6,0,1,0.4,1,1.2v2.7h1V10.6z M71.1,6.6h-1v6.9h1
		V6.6z M76.7,9.3c-0.4-0.5-1-0.7-1.7-0.7c-0.7,0-1.3,0.2-1.7,0.7c-0.4,0.5-0.6,1.1-0.6,1.8c0,0.7,0.2,1.3,0.6,1.7
		c0.4,0.5,1,0.7,1.7,0.7c0.7,0,1.3-0.2,1.7-0.7c0.4-0.5,0.6-1.1,0.6-1.8C77.3,10.3,77.1,9.8,76.7,9.3z M75.9,12.2
		c-0.2,0.4-0.5,0.6-0.9,0.6c-0.4,0-0.7-0.2-1-0.6c-0.2-0.3-0.3-0.7-0.3-1.1c0-0.4,0.1-0.8,0.3-1.1c0.2-0.4,0.5-0.6,1-0.6
		c0.4,0,0.7,0.2,0.9,0.6c0.2,0.3,0.3,0.7,0.3,1.1C76.2,11.5,76.1,11.9,75.9,12.2z M82.3,12.3v-1.7c0-1.3-0.6-1.9-1.8-1.9
		c-0.6,0-1.2,0.1-1.6,0.4L79,9.7c0.4-0.2,0.8-0.3,1.2-0.3c0.7,0,1,0.3,1,0.9v0.1c-0.9,0-1.6,0.1-2,0.4c-0.5,0.3-0.7,0.7-0.7,1.3
		c0,0.4,0.1,0.7,0.4,1c0.3,0.3,0.6,0.4,1.1,0.4c0.6,0,1.1-0.2,1.4-0.6h0l0.1,0.5h0.9C82.3,13.2,82.3,12.8,82.3,12.3z M81.2,12
		c0,0.2-0.2,0.4-0.4,0.6c-0.2,0.1-0.4,0.2-0.6,0.2c-0.2,0-0.4-0.1-0.5-0.2c-0.1-0.1-0.2-0.3-0.2-0.6c0-0.7,0.6-1,1.7-1v0.7
		C81.2,11.9,81.2,11.9,81.2,12z M88.2,12.2V6.6h-1v2.7h0c-0.3-0.4-0.7-0.6-1.3-0.6c-0.6,0-1.1,0.2-1.5,0.7c-0.4,0.5-0.6,1.1-0.6,1.9
		c0,0.7,0.2,1.3,0.6,1.7c0.4,0.4,0.8,0.7,1.4,0.7c0.7,0,1.2-0.3,1.5-0.9h0l0,0.8h0.9C88.3,13,88.2,12.6,88.2,12.2z M86.9,12.3
		c-0.2,0.3-0.5,0.4-0.8,0.4c-0.4,0-0.7-0.2-0.9-0.5c-0.2-0.3-0.3-0.7-0.3-1.1c0-0.5,0.1-0.9,0.3-1.2c0.2-0.3,0.5-0.5,0.9-0.5
		c0.3,0,0.5,0.1,0.7,0.3c0.2,0.2,0.3,0.4,0.4,0.6c0,0.1,0,0.2,0,0.3v0.8C87.2,11.8,87.1,12.1,86.9,12.3z M96.6,9.3
		c-0.4-0.5-1-0.7-1.7-0.7c-0.7,0-1.3,0.2-1.7,0.7c-0.4,0.5-0.6,1.1-0.6,1.8c0,0.7,0.2,1.3,0.6,1.7c0.4,0.5,1,0.7,1.7,0.7
		c0.7,0,1.3-0.2,1.7-0.7c0.4-0.5,0.6-1.1,0.6-1.8C97.2,10.3,97,9.8,96.6,9.3z M95.9,12.2c-0.2,0.4-0.5,0.6-0.9,0.6
		c-0.4,0-0.7-0.2-1-0.6c-0.2-0.3-0.3-0.7-0.3-1.1c0-0.4,0.1-0.8,0.3-1.1c0.2-0.4,0.5-0.6,1-0.6c0.4,0,0.7,0.2,0.9,0.6
		c0.2,0.3,0.3,0.7,0.3,1.1C96.2,11.5,96.1,11.9,95.9,12.2z M102.9,10.6c0-0.7-0.2-1.2-0.5-1.6c-0.3-0.3-0.7-0.4-1.1-0.4
		c-0.3,0-0.7,0.1-1,0.3c-0.2,0.2-0.4,0.3-0.5,0.6h0l0-0.7h-0.9c0,0.5,0,0.9,0,1.3v3.4h1v-2.8c0-0.3,0.1-0.6,0.3-0.8s0.4-0.3,0.8-0.3
		c0.6,0,1,0.4,1,1.2v2.7h1V10.6z M109.9,8.7h-1.2V7.5l-1,0.3v0.9h-0.7v0.8h0.7v2.4c0,0.6,0.1,1,0.3,1.3c0.2,0.3,0.6,0.4,1,0.4
		c0.3,0,0.6,0,0.8-0.1l0-0.8c-0.1,0-0.3,0-0.5,0c-0.4,0-0.6-0.3-0.6-0.9V9.5h1.2V8.7z M115.5,10.6c0-0.7-0.2-1.2-0.5-1.6
		c-0.3-0.3-0.6-0.4-1.1-0.4c-0.6,0-1.1,0.3-1.4,0.8h0V6.6h-1v6.9h1v-2.8c0-0.1,0-0.3,0-0.4c0.2-0.5,0.5-0.7,1-0.7
		c0.6,0,0.9,0.4,0.9,1.3v2.7h1V10.6z M120.8,9.4c-0.3-0.5-0.9-0.8-1.5-0.8c-0.7,0-1.2,0.3-1.6,0.8c-0.4,0.5-0.6,1.1-0.6,1.8
		c0,0.7,0.2,1.3,0.6,1.7c0.4,0.4,1,0.6,1.7,0.6c0.6,0,1.1-0.1,1.6-0.3l-0.2-0.7c-0.4,0.1-0.8,0.2-1.3,0.2c-0.4,0-0.8-0.1-1-0.3
		c-0.3-0.2-0.4-0.6-0.5-1.1h3.1c0-0.1,0-0.3,0-0.5C121.2,10.3,121.1,9.8,120.8,9.4z M118,10.6c0-0.3,0.1-0.6,0.3-0.8
		c0.2-0.3,0.5-0.4,0.8-0.4c0.4,0,0.7,0.1,0.8,0.4c0.1,0.2,0.2,0.5,0.2,0.8H118z"/>
    </symbol>
</svg>

<script type='text/javascript' src='<?= base_url("assets/js/czo4vtc.js") ?>'></script>

<script type='text/javascript' src='<?= base_url("assets/js/script.js") ?>'></script>

</body>
</html>
