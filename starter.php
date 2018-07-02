<?php

namespace vanscalc;

//цепляем конфиги
require_once 'config.php';
require_once 'template.php';

//для начала проверим, а заполнен ли конфиг
if (!defined('INSTALL')){
	if (file_exists('install.php')){
		 require_once 'install.php';
	}else{
		?>
		<div class="error-message">
			<h2>CMS не установленна и файл установки отсутствует!</h2>
		</div>
        <?php
	}
}else{
    //Инициализируем константы
    $HEADER = '';
    $BODY = '';
    $FOOTER = '';

    //загрузим шаблон сайта
    $templateDir = template::load(TEMPLATES);
    //Выведем элементы шаблона
    echo $HEADER;
    echo $BODY;
    echo $FOOTER;
}