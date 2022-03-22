<!DOCTYPE html>
<html lang="ru" style="background: rgb(34, 34, 34);">
        
        <head>
                <title><?= $title; ?></title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://yura.store/css/uikit.css" />
                <script src="https://yura.store/js/uikit.min.js"></script>
                <script src="https://yura.store/js/uikit-icons.min.js"></script>
        </head>
        
        <body class="uk-light" >
                <div class="uk-offcanvas-content uk-background-secondary">
                        <header>
                                <div class="uk-navbar-container2 uk-sticky tm-navbar-container uk-background-secondary uk-light" uk-sticky="cls-active: tm-navbar-container-fixed">
                                        <div class="uk-container " uk-navbar>
                                                <div class="uk-navbar-left">
                                                        <button class="uk-navbar-toggle uk-hidden@m" uk-toggle="target: #nav-offcanvas"
                                                        uk-navbar-toggle-icon>
                                                        </button>
                                                        <a class="uk-navbar-item uk-logo" href="./">Yura.Store</a>
                                                        <nav class="uk-visible@m">
                                                                <ul class="uk-navbar-nav">
                                                                        <li>
                                                                                <a href="catalog.html">Категории<span class="uk-margin-xsmall-left" uk-icon="icon: chevron-down; ratio: .75;"></span></a>
                                                                                <div class="uk-navbar-dropdown uk-margin-remove uk-padding-remove-vertical uk-background-secondary"
                                                                                uk-drop="pos: bottom-justify;delay-show: 125;delay-hide: 50;duration: 75;boundary: .tm-navbar-container;boundary-align: true;pos: bottom-justify;flip: x">
                                                                                        <div class="uk-container ">
                                                                                                <ul class="uk-navbar-dropdown-grid uk-child-width-1-5 uk-light" uk-grid>
                                                                                                        <li>
                                                                                                                <div class="uk-margin-top uk-margin-bottom">
                                                                                                                        <a class="uk-link-reset" href="#"><img class="uk-display-block uk-margin-auto uk-margin-bottom" src="https://yura.store/svg/xbox.svg" alt="Laptops &amp; Tablets" width="80" height="80"><div class="uk-text-bolder">Xbox &amp; Playstation</div></a>
                                                                                                                        <ul class="uk-nav uk-nav-default">
                                                                                                                                <li>
                                                                                                                                        <a href="#">-----------</a>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                        <a href="#">-----------</a>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                        <a href="#">-----------</a>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                        <a href="#">-----------</a>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                        <a href="#">-----------</a>
                                                                                                                                </li>
                                                                                                                        </ul>
                                                                                                                </div>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                                <div class="uk-margin-top uk-margin-bottom">
                                                                                                                        <a class="uk-link-reset" href="#"><img class="uk-display-block uk-margin-auto uk-margin-bottom" src="https://yura.store/svg/mobile-game.svg" alt="Phones &amp; Gadgets" width="80" height="80"><div class="uk-text-bolder">Android &amp; IOS</div></a>
                                                                                                                        <ul class="uk-nav uk-nav-default">
                                                                                                                                <li>
                                                                                                                                        <a href="#">-----------</a>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                        <a href="#">-----------</a>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                        <a href="#">-----------</a>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                        <a href="#">-----------</a>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                        <a href="#">-----------</a>
                                                                                                                                </li>
                                                                                                                        </ul>
                                                                                                                </div>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                                <div class="uk-margin-top uk-margin-bottom">
                                                                                                                        <a class="uk-link-reset" href="#"><img class="uk-display-block uk-margin-auto uk-margin-bottom" src="https://yura.store/svg/gaming.svg" alt="TV &amp; Video" width="80" height="80"><div class="uk-text-bolder">PC &amp; Tablet</div></a>
                                                                                                                        <ul class="uk-nav uk-nav-default">
                                                                                                                                <li>
                                                                                                                                        <a href="#">-----------</a>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                        <a href="#">-----------</a>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                        <a href="#">-----------</a>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                        <a href="#">-----------</a>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                        <a href="#">-----------</a>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                        <a href="#">-----------</a>
                                                                                                                                </li>
                                                                                                                        </ul>
                                                                                                                </div>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                                <div class="uk-margin-top uk-margin-bottom">
                                                                                                                        <a class="uk-link-reset" href="#"><img class="uk-display-block uk-margin-auto uk-margin-bottom" src="https://yura.store/svg/gameboy.svg" alt="Games &amp; Entertainment" width="80" height="80"><div class="uk-text-bolder">Retro &amp; Modern</div></a>
                                                                                                                        <ul class="uk-nav uk-nav-default">
                                                                                                                                <li>
                                                                                                                                        <a href="#">-----------</a>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                        <a href="#">-----------</a>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                        <a href="#">-----------</a>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                        <a href="#">-----------</a>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                        <a href="#">-----------</a>
                                                                                                                                </li>
                                                                                                                        </ul>
                                                                                                                </div>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                                <div class="uk-margin-top uk-margin-bottom">
                                                                                                                        <a class="uk-link-reset" href="#"><img class="uk-display-block uk-margin-auto uk-margin-bottom" src="https://yura.store/svg/universe.svg" alt="Photo" width="80" height="80"><div class="uk-text-bolder">Exclusives</div></a>
                                                                                                                        <ul class="uk-nav uk-nav-default">
                                                                                                                                <li>
                                                                                                                                        <a href="#">-----------</a>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                        <a href="#">-----------</a>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                        <a href="#">-----------</a>
                                                                                                                                </li>
                                                                                                                        </ul>
                                                                                                                </div>
                                                                                                        </li>
                                                                                                </ul>
                                                                                        </div>
                                                                                </div>
                                                                        </li>
                                                                        <li>
                                                                                <a href="brands.html">Топ издателей<span class="uk-margin-xsmall-left" uk-icon="icon: chevron-down; ratio: .75;"></span></a>
                                                                                <div class="uk-navbar-dropdown uk-margin-remove uk-padding-remove-vertical uk-background-secondary"
                                                                                uk-drop="pos: bottom-justify;delay-show: 125;delay-hide: 50;duration: 75;boundary: .tm-navbar-container;boundary-align: true;pos: bottom-justify;flip: x">
                                                                                        <div class="uk-container uk-container-small uk-margin-top uk-margin-bottom">
                                                                                                <ul class="uk-grid-small uk-child-width-1-6" uk-grid>
                                                                                                        <li>
                                                                                                                <div class="tm-ratio tm-ratio-4-3">
                                                                                                                        <a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                                                                                        href="#" title="Apple"><figure class="tm-media-box-wrap"><img src="https://yura.store/img/Ford.png" alt="Apple"></figure></a>
                                                                                                                </div>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                                <div class="tm-ratio tm-ratio-4-3">
                                                                                                                        <a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                                                                                        href="#" title="Samsung"><figure class="tm-media-box-wrap"><img src="img/Ford.png" alt="Samsung"></figure></a>
                                                                                                                </div>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                                <div class="tm-ratio tm-ratio-4-3">
                                                                                                                        <a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                                                                                        href="#" title="Sony"><figure class="tm-media-box-wrap"><img src="img/Ford.png" alt="Sony"></figure></a>
                                                                                                                </div>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                                <div class="tm-ratio tm-ratio-4-3">
                                                                                                                        <a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                                                                                        href="#" title="Microsoft"><figure class="tm-media-box-wrap"><img src="img/Ford.png" alt="Microsoft"></figure></a>
                                                                                                                </div>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                                <div class="tm-ratio tm-ratio-4-3">
                                                                                                                        <a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                                                                                        href="#" title="Intel"><figure class="tm-media-box-wrap"><img src="img/Ford.png" alt="Intel"></figure></a>
                                                                                                                </div>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                                <div class="tm-ratio tm-ratio-4-3">
                                                                                                                        <a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                                                                                        href="#" title="HP"><figure class="tm-media-box-wrap"><img src="img/Ford.png" alt="HP"></figure></a>
                                                                                                                </div>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                                <div class="tm-ratio tm-ratio-4-3">
                                                                                                                        <a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                                                                                        href="#" title="LG"><figure class="tm-media-box-wrap"><img src="img/Ford.png" alt="LG"></figure></a>
                                                                                                                </div>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                                <div class="tm-ratio tm-ratio-4-3">
                                                                                                                        <a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                                                                                        href="#" title="Lenovo"><figure class="tm-media-box-wrap"><img src="img/Ford.png" alt="Lenovo"></figure></a>
                                                                                                                </div>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                                <div class="tm-ratio tm-ratio-4-3">
                                                                                                                        <a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                                                                                        href="#" title="ASUS"><figure class="tm-media-box-wrap"><img src="img/Ford.png" alt="ASUS"></figure></a>
                                                                                                                </div>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                                <div class="tm-ratio tm-ratio-4-3">
                                                                                                                        <a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                                                                                        href="#" title="Acer"><figure class="tm-media-box-wrap"><img src="img/Ford.png" alt="Acer"></figure></a>
                                                                                                                </div>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                                <div class="tm-ratio tm-ratio-4-3">
                                                                                                                        <a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                                                                                        href="#" title="Dell"><figure class="tm-media-box-wrap"><img src="img/Ford.png" alt="Dell"></figure></a>
                                                                                                                </div>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                                <div class="tm-ratio tm-ratio-4-3">
                                                                                                                        <a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                                                                                        href="#" title="Canon"><figure class="tm-media-box-wrap"><img src="img/Ford.png" alt="Canon"></figure></a>
                                                                                                                </div>
                                                                                                        </li>
                                                                                                </ul>
                                                                                                <div class="uk-text-center uk-margin">
                                                                                                        <a class="uk-link-muted uk-text-uppercase tm-link-to-all" href="brands.html"><span>Посмотреть всех</span><span uk-icon="icon: chevron-right; ratio: .75;"></span></a>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </li>
                                                                        <li>
                                                                                <a href="contacts.html">Поддержка</a>
                                                                        </li>
                                                                </ul>
                                                        </nav>
                                                </div>
                                                <div class="uk-navbar-right">
                                                        <a class="uk-navbar-toggle tm-navbar-button" href="#" uk-search-icon></a>
                                                        <div class="uk-navbar-dropdown uk-padding-small uk-margin-remove uk-background-secondary" uk-drop="mode: click;cls-drop: uk-navbar-dropdown;boundary: .tm-navbar-container;boundary-align: true;pos: bottom-justify;flip: x">
                                                                <div class="uk-container">
                                                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                                                <div class="uk-width-expand">
                                                                                        <form class="uk-search uk-search-navbar uk-width-1-1">
                                                                                                <input class="uk-search-input" type="search" placeholder="Поиск..." autofocus>
                                                                                        </form>
                                                                                </div>
                                                                                <div class="uk-width-auto">
                                                                                        <a class="uk-navbar-dropdown-close" href="#" uk-close></a>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        
                                                        <?php  if (session()->has('social_id')): ?>
                                                        <a class="uk-navbar-item uk-link-muted tm-navbar-button" href="#"
                                                        uk-icon="user"></a>
                                                        <div class="uk-padding-small uk-margin-remove uk-background-secondary" uk-dropdown="pos: bottom-right; offset: -10; delay-hide: 200;"
                                                        style="min-width: 150px;">
                                                                <ul class="uk-nav uk-dropdown-nav">
                                                                        <li>
                                                                                <a uk-toggle="target: #cart-offcanvas" onclick="return false" href="account.html">Корзина
                                                                                <span>(2)</span></a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="<?php echo base_url('/profile'); ?>">Профиль</a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="#">Настройки</a>
                                                                        </li>
                                                                        <li class="uk-nav-divider">
                                                                        </li>
                                                                        <li>
                                                                                <a href="<?php echo base_url().'/exit?url='.base_url(uri_string()); ?>">Выйти</a>
                                                                        </li>
                                                                </ul>
                                                        </div>
                                                        <?php else: ?>
                                                        <a class="uk-navbar-item uk-link-muted tm-navbar-button" href="#modal-example" uk-toggle uk-icon="sign-in"></a>

                                                        <div id="modal-example" uk-modal>
                                                                <div class="uk-modal-dialog uk-modal-body uk-border-rounded uk-background-secondary uk-light">
                                                                        <h2 class="uk-modal-title uk-text-left">Авторизация</h2>
                                                                        <button class="uk-modal-close-default" type="button" uk-close></button>
                                                                        <div class="uk-flex-middle" uk-grid>
                                                                                <div class="uk-width-2-3@m uk-width-2-3@s uk-visible@s">
                                                                                        <img src="https://cdn.dribbble.com/users/1378759/screenshots/4799608/p-logo.png" alt="Image">
                                                                                </div>
                                                                                <div class="uk-width-1-3@m uk-width-1-3@s uk-flex-first">
                                                                                        <a class="uk-button uk-button-default uk-button-large uk-width-1-1 uk-margin-small-bottom uk-text-left uk-padding-remove" href="<?php echo base_url()."/authorization?url=".base_url(uri_string())."&social=github"; ?>"><span class="uk-margin-left uk-margin-right" uk-icon="github"></span>GitHub</a>
                                                                                        <a class="uk-button uk-button-default uk-button-large uk-width-1-1 uk-margin-small-bottom uk-text-left uk-padding-remove" href="<?php echo base_url()."/authorization?url=".base_url(uri_string())."&social=twitch"; ?>"><span class="uk-margin-left uk-margin-right" uk-icon="twitch"></span>Twitch</a>
                                                                                        <a class="uk-button uk-button-default uk-button-large uk-width-1-1 uk-margin-bottom-remove uk-text-left uk-padding-remove" href="<?php echo base_url()."/authorization?url=".base_url(uri_string())."&social=discord"; ?>"><span class="uk-margin-left uk-margin-right" uk-icon="discord"></span>Discord</a>
                                                                                </div>
                                                                        </div>
                                                                </div>

                                                        </div>

                                                        <?php endif ?>
                                                 </div>
                                        </div>
                                </div>
                        </header>
                        <main>
