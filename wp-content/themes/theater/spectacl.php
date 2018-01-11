<div class="navigation-vertical">
	<div class="scroll-menu" id="section-scroller-button">Скролл</div>
	<ul class="top-vertical-menu">
		<li class="top-vertical-menu__item"><a href="#buy">Купить</a></li>
		<li class="top-vertical-menu__item"><a href="#media">Медиа</a></li>
		<li class="top-vertical-menu__item"><a href="#actors">Участники</a></li>
		<li class="top-vertical-menu__item"><a href="#about">Об авторе  </a></li>
		<li class="top-vertical-menu__item"><a class="active" href="#tease">Тизер</a></li>
	</ul>
</div>
<section style="background: url(<?php echo get_field('image_tezer', $id); ?>) 50% 50%/cover no-repeat;" class="header" id="tease">
	<div class="header-trans">
		<div class="header-max-container">
			<div class="current-spectacle animated fadeInDown">
				<hgroup>
					<div class="current-spectacle__author">
						<h3><?php echo get_field('creater', $id); ?></h3></div>
					<div class="current-spectacle__spectacle-name">
						<h1><?php echo get_the_title($id); ?></h1></div>
				</hgroup>
			</div>
			<div class="header-buttons-group animated fadeInDown">
				<div class="header-btn-container"> <a class="main-button" href="#buy">Купить Аудиоспектакль    </a></div>
				<div class="header-btn-container header-btn-container--minidesc" onclick="teaserClick()"><a class="main-button main-button--arrow" >Смотреть тизер</a></div>
			</div>
		</div>
	</div>
</section>
<section style=" padding-bottom: 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        height: auto;
        background: url(<?php echo get_field('image_about-autor',$id); ?>) 0 0 no-repeat;
        background-color: #f8f8f8;
        background-attachment: fixed;
        background-size: auto;
        background-color: #f8f8f8;
        padding-top: 0;" class="author-container section-scrol" id="about">
	<div class="author-transparent-icon-left animated fadeIn wow"><img class="author-transparent-img" src="<?php echo get_field('left_image', $id); ?>"></div>
	<div class="author-container-transparent">
		<div class="autor-max-container">
			<div class="author animated fadeInUP wow">
				<div class="author-transparent-icon-right animated fadeIn wow"><img class="author-transparent-img author-transparent-img--beards" src="<?php echo get_field('image_right', $id); ?>" alt="beards"></div>
				<div class="author__about">
					<h3>Об авторе</h3></div>
				<div class="author__name">
					<h1><?php echo  get_field('description_autor', $id); ?></h1></div>
				<div class="author__description animated fadeIn wow">
					<p></p>
				</div>
				<div class="author__description animated fadeIn wow">
                    <?php echo get_field('description', $id); ?>
                </div>
			</div>
		</div>
	</div>
</section>
<section class="artists-container section-scroll" id="actors">
	<div class="artist-transparent-image--left"></div>
    <style>

        .artist-transparent-image--left{
            display:none
        }
        @media only screen and (min-width: 768px){
            .artist-transparent-image--left{
                width:265px;
                height:256px;
                background:url(<?php echo get_field('image_participants_bottom_left', $id); ?>) 0 0 no-repeat;
                left:0%;
                bottom:-8%;
                position:absolute;
                content:'';
                display:block
            }
        }
        .artist-transparent-image--right{
            display:none
        }
        @media (min-width: 768px) and (max-width: 1200px){
            .artist-transparent-image--right{
                width:353px;
                height:406px;
                background:url(<?php echo get_field('image_participants_bottom_center', $id); ?>) 0 0 no-repeat;
                left:auto;
                bottom:-8%;
                right:0;
                position:absolute;
                content:'';
                display:block
            }
        }
        @media only screen and (min-width: 1201px){
            .artist-transparent-image--right{
                width:353px;
                height:406px;
                background:url(<?php echo get_field('image_participants_bottom_center', $id); ?>) 0 0 no-repeat;
                left:40%;
                bottom:-8%;
                position:absolute;
                content:'';
                display:block;
                right:auto
            }
        }
        .artist-transparent-image--center{
            display:none
        }
        @media only screen and (min-width: 1201px){
            .artist-transparent-image--center{
                width:386px;
                height:233px;
                background:url(<?php echo get_field('image_participants_bottom_right', $id); ?>) 0 0 no-repeat;
                left:auto;
                bottom:-8%;
                right:0;
                position:absolute;
                content:'';
                display:block
            }
        }
    </style>
	<div class="artist-transparent-image--center"></div>
	<div class="artist-transparent-image--right"> </div>
	<div class="artists-title">
		<h3>Участники проекта</h3></div>
	<div class="artists-scrolling">
		<div class="artists-scrolling__title">
			<h4>Прокрутка    </h4></div>
	</div>
	<div class="slider artists-carousel">
        <?php $inc = 0; ?>
        <?php foreach(get_field('participants', $id) as $item) { ?>
		<div class="artists" onclick="onSliderClick(<?php echo $inc; $inc++; ?>)">
			<div class="artists-img-cont">
				<div class="artists__photo-shadow"></div>
				<svg class="artists__photo" id="svg-heart" viewBox="0 0 370 320">
					<mask id="mask-heart-<?php echo $inc; ?>">
						<g stroke="blue" stroke-width="0" fill="white">
							<path fill="white" d="M191.269,47.819C142.709-49.149-82.879,15.111,38.856,203.074              c48.798,75.346,158.952,110.362,158.952,110.362s168.402-64.855,170.854-203.653C370.739-7.715,240.727-25.71,191.269,47.819z"></path>
						</g>
					</mask>
					<image xlink:href="<?php echo wp_get_attachment_image_src($item['photo'], 'heart_image')[0]; ?>" width="370" height="320" mask="url(#mask-heart-<?php echo $inc; ?>)"></image>
				</svg>
			</div>
			<div class="artists__name"> <a href="#"><h3><?php echo $item['name']; ?></h3></a></div>
			<div class="artists__role">
				<h4><?php echo $item['role']; ?></h4></div>
		</div>

		<?php } ?>
	</div>
	<?php $inc = 0; ?>
	<?php foreach(get_field('participants', $id) as $item) { ?>
    <div class="slider-modal" id="slider-modal-<?php echo $inc; $inc++; ?>">
        <section class="page-content">
            <section class="popup-container">
                <div class="popup-show-max-container">
                    <button class="navigation__gumburger-popup" onclick="sliderClose()"><span class="line"></span><span class="line"></span><span class="line">   </span></button>
                    <div class="popup-image-container">
                        <div class="artists__photo-shadow-popup"> </div>
                        <svg class="artists__photo" id="svg-heart-pop" width="535" height="490" viewBox="0 0 535 500">
                            <mask id="mask-heart-pop-<?php echo $inc; ?>">
                                <g stroke="blue" stroke-width="0" fill="white">
                                    <path fill="white" d="M280.337,63.347c103.988-145.808,396.199,56.435,181.548,298.35       	          C375.841,458.671,209.94,485.196,209.94,485.196S-18.856,357.128,6.725,158.917C28.38-8.877,224.569-39.172,280.337,63.347z"></path>
                                </g>
                            </mask>
                            <image xlink:href="<?php echo wp_get_attachment_image_src($item['photo'], 'heart_image')[0]; ?>" width="580" height="490" mask="url(#mask-heart-pop-<?php echo $inc; ?>)"></image>
                        </svg>
                    </div>
                    <div class="popup-about-artist">
                        <div class="popup-about-artist__name"><?php echo $item['name']; ?></div>
                        <div class="popup-about-artist__role"><?php echo $item['role']; ?></div>
                        <div class="popup-about-artist__artist-biography"><?php echo $item['about_aktor']; ?></div>
                    </div>
                </div>
            </section>
        </section>
    </div>
	<?php } ?>
</section>
<style>
    .media-bakground{
        max-width:100%;
        margin-top:53px;
        height:auto;
        background-size:cover;
        background-color:#f8f8f8;
        position:relative;
        padding-top:0
    }
    @media (min-width: 768px) and (max-width: 1200px){
        .media-bakground{
            -webkit-box-pack:end;
            -ms-flex-pack:end;
            justify-content:flex-end;
            display:-webkit-box;
            display:-ms-flexbox;
            display:flex;
            padding-top:146px;
            max-width:100%;
            background-size:auto;
            padding-top:229px;
            padding-top:128px;
            padding:0;
            margin-top:41px;
            height:auto;
            padding-top:0;
            margin-top:0;
            padding-top:177px;
            background-attachment:fixed;
            background-color:#f8f8f8;
            margin-top:50px;
            height:auto
        }
    }
    @media only screen and (min-width: 1201px){
        .media-bakground{
            -webkit-box-pack:end;
            -ms-flex-pack:end;
            justify-content:flex-end;
            display:-webkit-box;
            display:-ms-flexbox;
            display:flex;
            padding-top:0;
            padding-bottom:100px;
            background:url("<?php echo get_field('image_media_left', $id); ?>") no-repeat;
            background-size:auto;
            height:auto;
            background-color:#f8f8f8;
            background-attachment:fixed;
            margin-top:0
        }
    }
    @media only screen and (min-width: 1201px){
        .media-bakground:after{
            position:absolute;
            content:'';
            width:438px;
            height:313px;
            background:url(<?php echo get_field('image_media_right', $id); ?>) 0 0 no-repeat;
            z-index:0;
            right:-10%;
            bottom:2%
        }
    }
</style>
<section class="media-bakground section-scroll" id="media">
	<div class="media-container">
		<div class="media-title animated fadeIn">
			<h3>Медиаматериалы</h3></div>

        <ul class="zoom-gallery">

            <?php foreach(get_field('media', $id) as $item) { ?>
                <?php
                if(!empty($item['image']) && empty($item['link_video'])){ //Only image ?>
                    <li href="<?php echo wp_get_attachment_image_src($item['image'],'large')[0]; ?>" data-source="<?php echo wp_get_attachment_image_src($item['image'],'full')[0]; ?>" title="<?php echo get_post($item['image'])->post_title; ?>">
                        <img src="<?php echo wp_get_attachment_image_src($item['image'],'media_thumbnails')[0]; ?>">
                    </li>
                <?php }
                if(empty($item['image']) && !empty($item['link_video'])){ // Video ?>
                    <?php
                        $id_video = explode('https://www.youtube.com/watch?v=', $item['link_video']);
                        $link = 'https://img.youtube.com/vi/'.$id_video[1].'/mqdefault.jpg';
                    ?>
                    <li class="popup-youtube" href="<?php echo $item['link_video']; ?>">
                        <img src="<?php echo $link; ?>">
                    </li>
                <?php }
                if(!empty($item['image']) && !empty($item['link_video'])){ // Video with ready preview ?>
                    <li class="popup-youtube" href="<?php echo $item['link_video']; ?>">
                        <img src="<?php echo wp_get_attachment_image_src($item['image'],'media_thumbnails')[0]; ?>">
                    </li>
	            <?php } ?>
            <?php } ?>

        </ul>
	</div>
	<div class="myvideo" id="video_pop" onclick="modClose()" style="display: none;">
		<iframe id="the_Video" width="854" height="480" src="<?php echo get_field('link_youtube', $id); ?>" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen=""></iframe>
		<p id="video_pop-close" onclick="modClose()">X </p>
	</div>
</section>
<form action="https://secure.platononline.com/payment/auth" method="post">
	<?php

	$pass = 'VFa59sF4PU1Z7MFTHMuNFfCYpyAVp7Ej';

	if(!empty($id)) {
	    $post_id = $id;
	}
	else {
	    $post_id = get_the_ID();
	}

	$data['key'] = '70W05HTQFX';

	$data['url'] = get_permalink(168);

	$data['data'] = base64_encode(json_encode(array('amount' => get_field('price', $id).'.00','description' => $post_id,'currency' => 'UAH')));

	$data['payment'] = 'CC';

	$sign = md5(strtoupper(

		strrev($data['key']).

		strrev($data['payment']).

		strrev($data['data']).

		strrev($data['url']).

		strrev($pass)));

	?>


</form>

<section class="buy-bakground section-scroll" id="buy">
	<div class="buy-transparent-icon-top"><img class="buy-transparent-img" src="<?php echo get_field('image_buy_right_top', $id); ?>" alt="media"></div>
	<div class="buy-transparent-icon-left"><img class="buy-transparent-img" src="<?php echo get_field('image_buy_left',$id); ?>" alt="media"></div>
	<div class="buy-transparent-icon-right"><img class="buy-transparent-img" src="<?php echo get_field('image_buy_right_bottom',$id); ?>" alt="media"></div>
	<section class="buy-container">
		<div class="buy-max-container">
			<div class="buy-playbill-transparent"><img class="buy-playbill-img" src="<?php echo get_field('image_afish',$id); ?>" alt="playbill">
				<div class="proba"> </div>
			</div>
			<div class="buy-pay-info">
				<div class="buy-pay">
					<div class="buy-spectacle-head">
						<div class="buy-title">
							<h4>Аудиоспектакль</h4></div>
						<div class="buy-spectacle-name">
							<h2>Маленький принц</h2></div>
					</div>
					<div class="buy-price-card">
						<div class="price"><span class="price__number"><?php echo get_field('price', $id); ?></span><span class="price__currency">грн</span><span class="price__pennies">00</span></div>
						<div class="card"><img class="card-icon" src="./img/card.png" alt="card"></div>
					</div>
                    <form id="pay-form" style="width: 100%;" action="https://secure.platononline.com/payment/auth" method="post">
                        <input type="hidden" name="payment" value="<?=$data['payment']?>" />

                        <input type="hidden" name="key" value="<?=$data['key']?>" />

                        <input type="hidden" name="url" value="<?=$data['url']?>" />

                        <input type="hidden" name="data" value="<?=$data['data']?>" />

                        <input type="hidden" name="sign" value="<?=$sign?>" />

                    <div id="send-form-buy-cont">
                        <div class="send-form-buy">

                                <input id="email-send" class="send-form__input-email" type="text" name="ext1" placeholder="Имя" required=""/>

                        </div>
                        <div class="send-form-buy">

                                <input class="send-form__input-email" type="email" name="email" placeholder="E-mail для обратной связи" required=""/>

                        </div>
                    </div>
                    <div id="buy-btn-container">
                        <button class="main-button main-button--buy" id="buy-btn" onclick="buyClick()">
                            <p>Купить Аудиоспектакль </p>
                        </button>
                    </div>
                    </form>
					</div>
				<div class="buy-playbill"><img class="buy-playbill-img" src="./img/playbill.jpg" alt="playbill">
					<div class="proba"> </div>
				</div>
				<section class="sponsors">
					<div class="sponsors__logo-container"><img class="sponsor-logo" src="./img/sponsors-logo.png" alt="sponsors-logo"></div>
					<h4 class="sponsors__description"><?php echo get_field('short_description', $id); ?></h4><a class="sponsors__more" href="#">Подробнее &rarr;  </a></section>
			</div>
		</div>
	</section>
</section>

