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
	<section class="page-content">


	<div class="sticky-header">
		<div class="sticky-header__top">
			<div class="sticky-header__buy-container">
				<div class="buy-title buy-title--sticky">
					<h3>Аудиоспектакль</h3></div>
				<div class="buy-spectacle-name buy-spectacle-name--sticky">
					<h2>Маленький принц</h2></div>
				<button onclick="window.location=&#39<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>#buy&#39" class="sticky-header__button-buy">Купить Аудиоспектакль</button>
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
<?php get_template_part('spectacl') ?>

<?php
get_footer();
