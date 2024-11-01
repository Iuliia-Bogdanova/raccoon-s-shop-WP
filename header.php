<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="https://iuliia-bogdanova.github.io/raccoons_shop/assets/raccoon-big.jpg">
    <title>Raccoon's Shop</title>
    <link rel="icon" type="image/svg+xml" href="./assets/icons/logo.svg" />

    <?php wp_head(); ?>

</head>

<body>

    <header class="header">
        
        <div class="header__top">
            <div class="container">
                <div class="header__top-wrap">
                    <img class="logo__img" src="./assets/icons/Raccoons-shop.svg" alt="Logo">
                    <a class="logo" href="#">
                        <p class="logo__text">Raccoon's Shop</p>
                    </a>
                </div>
            </div>
        </div>

        <div class="header__content">
            <div class="container">
                <div class="header__content-wrap">
                    <h1 class="header__title">енотья мастерская</h1>
                    <h2 class="header__subtitle">делаю украшения и всякие приколюхи</h2>
                    <p class="header__text">кольца, серьги, браслеты, ожерелья, кулоны, брелочки</p>
                    <a class="button" href="https://t.me/cOmmon_rAccoon" target="_blank">написать еноту</a>
                    <div class="social">
                        <!-- <a class="social__link" href="https://www.instagram.com/raccoons_shop_/" target="_blank">
                            <img class="social__img" src="./assets/icons/instagram.svg" alt="Instagram">
                        </a> -->
                        <a class="social__link" href="tel:+79658455427" target="_blank">
                            <img class="social__img" src="./assets/icons/phone-call.svg" alt="Phone">
                        </a>
                        <a class="social__link" href="mailto:masha2bogdanova@gmail.com" target="_blank">
                            <img class="social__img" src="./assets/icons/mail.svg" alt="Mail">
                        </a>
                        <a class="social__link" href="https://t.me/cOmmon_rAccoon" target="_blank">
                            <img class="social__img" src="./assets/icons/telegram.svg" alt="Telegram">
                        </a>
                    </div>
                    <img class="header__images" src="./assets/img/header-img.JPG" alt="Main photo">
                </div>
            </div>
        </div>
    </header>
