<?php
// 关于url地址的相关配置
return array(
	// 开启路由，重新映射，将url简单化
	'URL_ROUTER_ON' => true,
	'URL_MAP_RULES' => array(
		'index'				=> 'Home/Index/index',
		'login'				=> 'Home/Login/login',
		'loging'			=> 'Home/Login/loging',
		'logout'			=> 'Home/Login/logout',
		'oauth2/authorize'	=> 'Home/OAuth2/authorize',
		'oauth2/token'		=> 'Home/OAuth2/token',
		'oauth2/info'		=> 'Home/OAuth2/info',
		'registing'			=> 'Home/Register/registing',
	),
);