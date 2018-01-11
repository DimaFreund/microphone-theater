<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theater
 */

get_header(); ?>



<?php

$id =  get_field('top_spectcl'); ?>
    <body>
<section class="page-content">
    <div class="sticky-header">
        <div class="sticky-header__top">
            <div class="sticky-header__buy-container">
                <div class="buy-title buy-title--sticky">
                    <h3>Радиоспектакль</h3></div>
                <div class="buy-spectacle-name buy-spectacle-name--sticky">
                    <h2>Маленький принц</h2></div>
                <button onclick="window.location=&#39<?php echo get_permalink( $id ); ?>#buy&#39" class="sticky-header__button-buy">Купить радиоспектакль</button>
                <button class="sticky-header__button-buy--trans">Купить</button>
            </div>
            <div class="sticky-header__gamburger-container"><img class="navigation__icon navigation__icon--black" src="./img/tum_logo_black.svg"><img class="navigation__icon navigation__icon--white navigation__icon--visible" src="./img/tum_logo_white.svg">
                <button class="navigation__gumburger" id="navigation__gumburger"><span class="line"></span><span class="line"></span><span class="line"></span></button>
                <p class="gamb-menu">меню </p>
            </div>
        </div>
    </div>
    <div class="sticky-header__bottom">
        <div class="sticky-header__space"></div>
        <nav class="header-bottom__nav">
           <?php dynamic_sidebar('right_menu'); ?>
        </nav>
    </div>
    <section id="curtains">
        <div class="aboveCurt bounce"><p class="">Скролл</p></div>
        <div class="beforeCurt"></div>
        <div class="left_curt">
            <div class="left_3"><img src="./img/curtain/left_3.png"></div>
            <div class="left_2"><img src="./img/curtain/left_2.png"></div>
            <div class="left_1"><img src="./img/curtain/left_1.png"></div>
        </div>
        <div class="right_curt">
            <div class="right_1"><img src="./img/curtain/right_1.png"></div>
            <div class="right_2"><img src="./img/curtain/right_2.png"></div>
            <div class="right_3"><img src="./img/curtain/right_3.png"></div>
        </div>
        <section class="mainScreen-max-container">
            <nav>
            <?php dynamic_sidebar('top_menu'); ?>
            </nav>
            <div class="slogan-container animated fadeInDown">
                <div class="slogan-img-container"><img class="slogan-logo-img" src="<?php echo get_field('logo'); ?>" alt="Театр у микрофона" srcset="./img/retina/logo-ret.png 2x">
                    <div class="slogan-head">
                        <h3><?php echo get_field('slogan'); ?></h3></div>
                </div>
            </div>
            <div class="spectacle-name-container animated fadeInDown">
                <div class="spectacle-name">
                    <div class="spectacle-name-text">
                        <h4>Премьера спектакля</h4></div>
                    <div class="spectacle-name-head">
                        <h2><?php echo get_the_title($id); ?></h2></div>
                    <div class="spectacle-name-button-cont"><a class="spectacle-name-btn" onclick="startShow()">Узнать больше</a></div>
                </div>
            </div>
            <div class="mainscreen-trans-right animated fadeInUp"></div>
            <div class="mainscreen-trans-left animated fadeInUp"> </div>
        </section>
    </section>
<?php get_template_part('spectacl') ?>

    <script>
        function changeLink() {
            window.history.pushState(null, null, '<?php echo get_permalink( $id ); ?>');
        }
    </script>
    <style>
        @media (min-width: 768px) and (max-width: 1200px){
            .mainscreen-trans-left{
                height:235px;
                position:absolute;
                width:350px;
                background:url("<?php echo get_field('bottom-image', $id) ?>") 0 0 no-repeat;
                display:block;
                bottom:-68px;
                left:10%
            }
        }

        .beforeCurt{
            background-image:url("<?php echo get_field('basic_image', $id) ?>");
            position:absolute;
            width:100%;
            height:100%;
            background-position:bottom;
            bottom:-240px;
            left:30px
        }
    </style>
<?php
get_footer();