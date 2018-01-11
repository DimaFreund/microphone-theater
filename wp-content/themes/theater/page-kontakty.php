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
				<p class="gamb-menu-black">меню    </p>
			</div>
		</div>
	</div>
	<div class="sticky-header__bottom">
		<div class="sticky-header__space"></div>
		<nav class="header-bottom__nav">
			<?php dynamic_sidebar('right_menu'); ?>
		</nav>
	</div>
	<section class="contacts-and-form">
		<div class="contacts-max-container">
			<div class="contacts-page-info-container">
				<div class="contacts-page-title-desctop">
					<h1>Контактная информация</h1>
				</div>
				<div class="contacts-page-info">
					<div class="contacts-page-title">
						<h3>Контакты</h3>
					</div>
					<div class="contacts-page-info__phone">
						<p>Контактный телефон:</p>
					</div>
					<div class="contacts-page-info__phone-number">
						<a href="tel:<?php echo get_field('contact_phone'); ?>">
						<p><?php echo get_field('contact_phone') ?></p>
						</a>
					</div>
					<div class="contacts-page-info__admin-name">
						<h4><?php echo get_field('name'); ?></h4>
					</div>
					<div class="contacts-page-info__position">
						<p> <?php echo get_field('posada'); ?>"</p>
					</div>
					<div class="contacts-page-info__e-mail">
						<p>E-mail<a class="contacts-page-info__contact-email" href="mailto:<?php echo get_field('posada'); ?>"><?php echo get_field('e-mail'); ?></a></p>
					</div>
				</div>
				<div class="send-form-container">
					<div class="send-form">
						<div class="send-form-title">
							<h3>Пишите, мы рады ответить</h3>
						</div>
						<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>




<?php
get_footer();