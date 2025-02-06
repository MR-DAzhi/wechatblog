<?php
/**
 *  Typecho 博客配置文件
 */

return array (
    /** 数据库配置 */
    'db' => array (
        'adapter' => 'pgsql',           //  数据库类型，设置为 pgsql (Postgres)
        'host'      => '{{YOUR_POSTGRES_HOST}}',       //  数据库主机名，替换为您的 Host
        'port'      => '{{YOUR_POSTGRES_PORT}}',       //  数据库端口，替换为您的 Port，通常是 5432
        'user'      => '{{YOUR_POSTGRES_USER}}',       //  数据库用户名，替换为您的 User
        'password'  => '{{YOUR_POSTGRES_PASSWORD}}',   //  数据库密码，替换为您的 Password
        'database'  => '{{YOUR_POSTGRES_DATABASE}}',   //  数据库名，替换为您的 Database
        'prefix'    => 'typecho_',                     //  数据表前缀 (保持默认即可)
    ),

    /** 系统设置, 用于基本的功能 */
    'system' => array (
        'debug' => false,                   //  是否开启调试模式, 生产环境请关闭
        'timezone' => 'Asia/Shanghai',     //  时区设置, 默认使用上海时间
        'url' => 'https://your-domain.com', //  博客 URL, 请修改为您自己的域名 (可选，安装完成后再修改也可以)
    ),

    /**  安全设置 */
    'security' => array (
        'allow_guest_email_verify' => false, //  是否允许游客邮箱验证, 默认关闭
        //  ... 其他安全设置 ...
    ),

    /**  插件设置 */
    'plugin' => array (
        //  ... 插件配置 ...
    ),

    /**  主题设置 */
    'theme' => array (
        //  ... 主题配置 ...
    ),

    /**  自定义设置 */
    'custom' => array (
        //  ... 自定义配置 ...
    ),
);