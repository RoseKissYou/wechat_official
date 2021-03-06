<?php

return array(
    //'配置项'=>'配置值'
    'DEFAULT_MODULE' => 'Admin', // 默认模块,如果不输入模块名称,默认使用这个模块去访问
    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'wechart_official',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'myroot123',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'weae_',    // 数据库表前缀
    'DB_PARAMS'          	 =>  array(), // 数据库连接参数
    'DB_DEBUG'  			  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存 , 在调试模式下字段缓存和数据库缓存都不起作用
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE'        =>  0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE'        =>  false,       // 数据库读写是否分离 主从式有效
    'DB_MASTER_NUM'         =>  1, // 读写分离后 主服务器数量
    'DB_SLAVE_NO'           =>  '', // 指定从服务器序号
    //路由方式
    'URL_MODEL'          => '2', //URL模式
    'SESSION_AUTO_START' => true, //是否开启session
    // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
    // 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式

    // 布局设置
    'TMPL_ENGINE_TYPE'      =>  'Smarty',     // 修改模板引擎
);