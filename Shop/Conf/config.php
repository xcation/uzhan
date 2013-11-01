<?php
return array(
	'DEFAULT_TIMEZONE'=>'PRC',
	'DB_CHARSET'=>'gbk',
	'DB_TYPE'=>'pdo',
	'DB_USER'=>'root',
	'DB_PWD'=>'root',
	'DB_PREFIX'=>null,

	'DB_DSN'=>'mysql:host=localhost;dbname=uzhan',

	'TMPL_TEMPLATE_TYPE =>' =>'Smarty',
     'TMPL_TEMPLATE_SUFFIX'  => '.php',  
	
	'SHOW_PAGE_TRACE' => true, 
	'DATA_CACHE_TIME' => 1600,

     'APP_GROUP_LIST' => 'Admin,Index', // 项目分组设定,多个组之间用逗号分隔,例如'Home,Admin'
     'APP_GROUP_MODE' => 1, // 分组模式 0 普通分组 1 独立分组，本项目不允许使用普通分组
    

    'DEFAULT_GROUP' => 'Index', 
 );
?>