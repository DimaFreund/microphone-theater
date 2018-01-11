<?php


/*--------------добавления нового пункта меню в админ панель-------------*/

function page_settings_theme(){
	add_theme_page(
		'Platon',
		'Platon настройка',
		'administrator',
		'fund',
		'show_page_settings_fund'
	);
}

add_action('admin_menu', 'page_settings_theme');

/*-------------функция отображающая содержимое страницы настройки темы------------*/

function show_page_settings_fund(){
	?>
	<!--Создаем заголовок в стандартном контейнере wrap-->
	<div class="wrap">
		<!--добавляем иконки к странице-->
		<div id="icon-themes" class="icon32"></div>
		<h2>Настройки темы</h2>

		<!-- Делаем вызов функции WordPress для вывода ошибок, возникающих при сохранении настроек. -->
		<?php settings_errors(); ?>

		<!-- Создаем форму, которая будет использоваться для вывода наших опций -->
		<form method="post" action="options.php">
			<?php settings_fields('fund'); ?>
			<?php do_settings_sections('fund'); ?>
			<?php submit_button(); ?>
		</form>
	</div><!--end wrap-->
	<?php
}



	function mytheme_settings(){


		add_settings_field(
			'merchant_id',
			'Merchant id:',
			'show_content_merchant_id',
			'fund',
			'general_settings_section'
		);

		register_setting(
			'fund',
			'merchant_id'
		);

		add_settings_field(
			'password',
			'Password:',
			'show_content_password',
			'fund',
			'general_settings_section'
		);

		register_setting(
			'fund',
			'password'
		);

		add_settings_section(
			'general_settings_section',           // ID, который будет использоваться для идентификации этой секции и по которому мы будем регистрировать опции
			'',                      // Заголовок, который будет отображаться на странице административной панели
			'show_field_settings',   // Вызов, который используется для отображения описания секции
			'fund'                             // Страница, на которую будет добавлена секция
		);

	}

	add_action('admin_init', 'mytheme_settings');

/*-----------функция отображающая содержимое в секции---------*/

function show_field_settings(){
	echo "<p>В данном разделе вы можете добавить контактную информацию.</p>";
}


/*--------------вывод текстового поля для адреса-----------*/


/*--------------вывод текстового поля для первого телефона-----------*/
	function show_content_merchant_id(){
		$country = get_option('merchant_id');
		$country_field = "<input type='text' id='merchant_id' class='regular-text'  name='merchant_id' value='".get_option('merchant_id')."' />";
		echo $country_field;
	}


	/*--------------вывод текстового поля для второго телефона-----------*/
	function show_content_password(){
		$country = get_option('password');
		$country_field = "<input type='text' id='password' class='regular-text'  name='password' value='".get_option('password')."' />";
		echo $country_field;
	}