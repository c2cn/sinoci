<?php

// 定义 APPPATH 常量：应用目录
defined('APPPATH') or define('APPPATH', dirname(__DIR__).'/');

// 定义 BASEPATH 常量：CI 框架目录
defined('BASEPATH') or define('BASEPATH', APPPATH.'vendor/codeigniter/framework/system/');

// 定义 ENVIRONMENT 常量：运行环境
defined('ENVIRONMENT') or define('ENVIRONMENT', getenv('APP_ENV') ?: 'development');

// 定义 VIEWPATH 常量：模版目录
defined('VIEWPATH') or define('VIEWPATH', APPPATH.'resources/views/');

// 设置控制器目录
$routing['directory'] = ENVIRONMENT;

// 配置报错
error_reporting(getenv('APP_DEBUG') ? -1 : 0);

// 加载环境初始化配置
file_exists(dirname(__FILE__).'/'.ENVIRONMENT.'/app.php') &&
    require_once dirname(__FILE__).'/'.ENVIRONMENT.'/app.php';

// 请求 CI 框架入口
require_once BASEPATH.'core/CodeIgniter.php';
