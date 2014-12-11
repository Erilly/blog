<?php
/**
 * 前台统一入口文件
 */

#引用常量定义
require_once('./define.inc.php');

#开启debug
define('APP_DEBUG',true);
#定义项目目录
define('APP_NAME','home');
define('APP_PATH',BLOG_SITE_PATH.'home/');

#加载ThinkPHP框架并实例化应用
require_once(THINK_URL.'/Extend/Engine/Sae.php');

