<?php

if(isset($_POST['status']) && $_POST['status']  == 'SALE'){
	create_new_order();
}
if(!isset($_GET['order'])){
	wp_redirect(home_url());
}

get_header();




?>

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
					<h1 style="margin-right: 260px;"><?php the_title(); ?></h1>
				</div>
			</div>
            <div class="contacts-page-info">
                <div style="margin-bottom: 52px" class="content">
					<?php echo get_field('text'); ?>
                    <a href="<?php echo get_permalink(160); ?>?order=<?php echo $_GET['order']; ?>">link</a>
                </div>

            </div>
		</div>
	</section>




<?php
get_footer();