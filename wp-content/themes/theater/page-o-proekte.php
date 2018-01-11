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
			<div class="sticky-header__top sticky-header__top--about">

				<div class="sticky-header__gamburger-container">
					<img class="navigation__icon navigation__icon--about" src="./img/show_page/menu-logo--black.png"><img class="navigation__icon navigation__icon--about navigation__icon--visible" src="./img/show_page/menu-logo--black.png"><button class="navigation__gumburger" id="navigation__gumburger"><span class="line"></span><span class="line"></span><span class="line"></span></button>
					<p class="gamb-menu-black">меню     </p>
				</div>
			</div>
		</div>
		<div class="sticky-header__bottom">
			<div class="sticky-header__space"></div>
			<nav class="header-bottom__nav">
				<?php dynamic_sidebar('right_menu'); ?>
			</nav>
		</div>
		<section class="about-page-background">
			<div class="about-page-container">
				<div class="about-page-title">
					<h1>О проекте     </h1>
				</div>
				<div class="about-page-content-right">
					<div class="parallax-img-cont parallax-img-cont--heart">    </div>
					<div class="about-project-img-cont about-project-img-cont--right">      <img class="about-project-image" src="<?php echo get_field('image_1'); ?>" alt=""></div>
					<div class="about-project about-project--right">
						<div class="about-progect__title">
							<h3><?php echo get_field('caption_1'); ?></h3>
						</div>
						<div class="about-progect__description"><?php echo get_field('text_1'); ?></div>
					</div>
				</div>
				<div class="about-page-content-left">
					<div class="about-project about-project--left">
						<div class="about-progect__title about-progect__title--left">
							<h3><?php echo get_field('caption_2'); ?></h3>
						</div>
						<div class="about-progect__description"><?php echo get_field('text_2'); ?></div>
					</div>
					<div class="about-project-img-cont about-project-img-cont--left"><img class="about-project-image" src="<?php echo get_field('image_2'); ?>" alt=""></div>
				</div>
				<div class="about-page-content-bottom">
					<div class="parallax-img-cont parallax-img-cont--mictophohe">       </div>
					<div class="about-project-img-cont about-project-img-cont--bottom"><img class="about-project-image" src="<?php echo get_field('image_3'); ?>" alt=""></div>
					<div class="about-project about-project--bottom">
						<div class="about-progect__title">
							<h3><?php echo get_field('caption_3'); ?></h3>
						</div>
						<div class="about-progect__description"><?php echo get_field('text_3'); ?></div>
					</div>
				</div>
			</div>
			<section class="about-page-buy-section">
				<div class="about-page-title about-page-title--bottom">
					<h2>Подари свой клик добра</h2>
				</div>
				<div class="about-progect-btn-container"><a class="main-button main-button--about" href="#">Купить аудиоспектакль         </a></div>
			</section>
			<div class="parallax-img-cont parallax-img-cont--microphone-grey"><img class="parallax-image" src="./img/about_page/micrphone-grey.png" alt="microphone-grey"></div>
			<div class="parallax-img-cont parallax-img-cont--heart-vector-small"> <img class="parallax-image" src="./img/about_page/heart-vektor.png" alt="heart-vektor"></div>
			<div class="parallax-img-cont parallax-img-cont--line-vector1"><img class="parallax-image" src="./img/about_page/line-vector1.png" alt="line-vector1"></div>
			<div class="parallax-img-cont parallax-img-cont--heart_line_vector_small"> <img class="parallax-image" src="./img/about_page/heart_line_vektor.png" alt="heart_line_vektor"></div>
			<div class="parallax-img-cont parallax-img-cont--heart-vektorl"><img class="parallax-image" src="./img/about_page/heart-vector-small.png" alt="heart-vektorl"></div>
			<div class="parallax-img-cont parallax-img-cont--line">   </div>
		</section>



<?php
get_footer();