<?php 

	define("BASE_URL","http://localhost");
	// define("BASE_URL","");
	define("PATH_APPLICATION",realpath(dirname(__DIR__)));
	define("PATH_LIBRARY",PATH_APPLICATION."/library/");
	define("PATH_PUBLIC",PATH_APPLICATION."/public/");
	define("PATH_CAPTCHA",PATH_PUBLIC."captcha/");
	define("PATH_TEMPLATE",PATH_PUBLIC."template/");
	define("PATH_VENDOR",PATH_APPLICATION."/vendor/");
	define("PATH_FILES",PATH_PUBLIC."files/");
	define("HTMLPURIFIER_PREFIX",PATH_APPLICATION."/vendor/");
	define("PATH_SCRIPT",PATH_PUBLIC."script/");
	
	define("URL_APPLICATION","/zf2");
	define("URL_PUBLIC",URL_APPLICATION."/public/");
	define("URL_TEMPLATE",URL_PUBLIC."template/");
	define("URL_FILES",URL_PUBLIC."files/");
	define("URL_SCRIPT",URL_PUBLIC."script/");
	//fontend
	define("URL_IMG",URL_PUBLIC."img");
	define("URL_JS",URL_PUBLIC."js");
	define("URL_CSS",URL_PUBLIC."css");
?>