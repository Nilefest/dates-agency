<?php
$config = array(
    
    // Title
	'title'        =>      '',
	'site_name'    =>      'Kiev Dating Agency',
    
    // Meta
	'meta_description' =>  '',
	'meta_keywords'    =>  '',
    
	// Page
	'page_url'     =>      '',
	'page_main'    =>      'main/index',
    
    // GET string from URL
	'get_url'      =>      '',
	
	// DB
	'db_type'      =>      'pdo',
	'db_hostname'  =>      'localhost',
	'db_port'      =>      3306,
	'db_username'  =>      'u0701138_root',
	'db_password'  =>      'nilefest321',
	'db_database'  =>      'u0701138_agency',
    
	// Mail
	'mail_host'    =>      'smtp.gmail.com',
	'mail_port'    =>      '587',
	'mail_login'   =>      'nikitaleo777333@gmail.com',
	'mail_password'=>      '777333ln',
	'mail_sender'  =>      'KDA Suport',
	'mail_unsub_link'  =>  'http://agency.nlf.name/service',
	'mail_admin'   =>      'Datingagencykiev@gmail.com', // Dovga.vita@gmail.com / nikitaleo777333@gmail.com / Datingagencykiev@gmail.com
    
    // Tag for session and cookie
	'session_tag'  =>      'agency',
    
	// Custom style, script
	'custom_css'   =>      [],
	'custom_js'    =>      [],
    
    // Global vars
    'page_for_pay'  =>     'https://www.paypal.me/kievdating',
    'top_girls'     =>     ['main' => ['44', '45', '43', '38', '50', '48', '47', '51'],
                            'page' => ['43', '44', '45', '38']],
    /*1. Избавился от ошибки, которая вызывалась при добавлении о девушке большого объёма информации
2. При отправки формы о заказе/подарке... перебрасывает на страницу для оплаты
3. Исправил отображение девушек, которые не были отмечены "Опубликова" (у Админа в галерее теперь отображается с подзаголовком UNPUBLIC)
4. Привязал девушек с главной странице и на девушек на панели слева на страницах девушек к их личным страницам*/
);
?>