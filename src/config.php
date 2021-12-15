<?php

// 框架默认配置

return [
    // 应用设置
    'app' => [
        'app_name'               => '',                 // 应用名称
        'app_host'               => '',                 // 应用地址
        'app_debug'              => false,              // 应用调试模式
        'app_trace'              => false,              // 应用Trace
        'app_status'             => '',                 // 应用模式状态
        'is_https'               => false,              // 是否HTTPS
        'auto_bind_module'       => false,              // 入口自动绑定模块
        'root_namespace'         => [],                 // 注册的根命名空间
        'default_return_type'    => 'html',             // 默认输出类型
        'default_ajax_return'    => 'json',             // 默认AJAX 数据返回格式,可选json xml ...
        'default_jsonp_handler'  => 'jsonpReturn',      // 默认JSONP格式返回的处理方法
        'var_jsonp_handler'      => 'callback',         // 默认JSONP处理方法
        'default_timezone'       => 'Asia/Shanghai',    // 默认时区
        'lang_switch_on'         => false,              // 是否开启多语言
        'default_validate'       => '',                 // 默认验证器
        'default_lang'           => 'zh-cn',            // 默认语言
        
        // 模块设置
        'controller_auto_search' => false,              // 自动搜索控制器
        'use_action_prefix'      => false,              // 操作方法前缀
        'action_suffix'          => '',                 // 操作方法后缀
        'empty_controller'       => 'Error',            // 默认的空控制器名
        'empty_module'           => '',                 // 默认的空模块名
        'default_module'         => 'index',            // 默认模块名
        'app_multi_module'       => true,               // 是否支持多模块
        'deny_module_list'       => ['common'],         // 禁止访问模块
        'default_controller'     => 'Index',            // 默认控制器名
        'default_action'         => 'index',            // 默认操作名
        'url_convert'            => true,               // 是否自动转换URL中的控制器和操作名
        'url_controller_layer'   => 'controller',       // 默认的访问控制器层
        'class_suffix'           => false,              // 应用类库后缀
        'controller_suffix'      => false,              // 控制器类后缀

        // URL请求设置
        'default_filter'         => '',                 // 默认全局过滤方法 用逗号分隔多个
        'var_pathinfo'           => 's',                // PATHINFO变量名 用于兼容模式
        // 兼容PATH_INFO获取
        'pathinfo_fetch'         => ['ORIG_PATH_INFO', 'REDIRECT_PATH_INFO', 'REDIRECT_URL'],
        'https_agent_name'       => '',                 // HTTPS代理标识
        'http_agent_ip'          => 'HTTP_X_REAL_IP',   // IP代理获取标识
        'url_html_suffix'        => 'html',             // URL伪静态后缀
        'url_domain_root'        => '',                 // 域名根，如thinkphp.cn
        'var_method'             => '_method',          // 表单请求类型伪装变量
        'var_ajax'               => '_ajax',            // 表单ajax伪装变量
        'var_pjax'               => '_pjax',            // 表单pjax伪装变量
        'request_cache'          => false,              // 是否开启请求缓存 true自动缓存 支持设置请求缓存规则
        'request_cache_expire'   => null,               // 请求缓存有效期
        'request_cache_except'   => [],                 // 全局请求缓存排除规则

        // 路由设置
        'pathinfo_depr'          => '/',                // pathinfo分隔符
        'url_common_param'       => false,              // URL普通方式参数 用于自动生成
        'url_param_type'         => 0,                  // URL参数方式 0 按名称成对解析 1 按顺序解析
        'url_lazy_route'         => false,              // 是否开启路由延迟解析
        'url_route_must'         => false,              // 是否强制使用路由
        'route_rule_merge'       => false,              // 合并路由规则
        'route_complete_match'   => false,              // 路由是否完全匹配
        'route_annotation'       => false,              // 使用注解路由
        'default_route_pattern'  => '\w+',              // 默认的路由变量规则
        'route_check_cache'      => false,              // 是否开启路由缓存
        'route_check_cache_key'  => '',                 // 路由缓存的Key自定义设置（闭包），默认为当前URL和请求类型的md5
        'route_cache_option'     => [],                 // 路由缓存的设置

        // 异常及错误设置
        // 默认跳转页面对应的模板文件
        'dispatch_success_tmpl'  => __DIR__ . '/tpl/dispatch_jump.tpl',
        'dispatch_error_tmpl'    => __DIR__ . '/tpl/dispatch_jump.tpl',
        // 异常页面的模板文件
        'exception_tmpl'         => __DIR__ . '/tpl/think_exception.tpl',
        // 错误显示信息,非调试模式有效
        'error_message'          => '页面错误！请稍后再试～',
        // 显示错误信息
        'show_error_msg'         => false,
        // 异常处理handle类 留空使用 \think\exception\Handle
        'exception_handle'       => '',
    ],

    // 模板设置
    'template'    => [
        'type'         => 'Think',              // 模板引擎类型 支持 php think 支持扩展
        'auto_rule'    => 1,                    // 默认模板渲染规则 1 解析为小写+下划线 2 全部转换小写
        'view_base'    => '',                   // 视图基础目录，配置目录为所有模块的视图起始目录
        'view_path'    => '',                   // 当前模板的视图目录 留空为自动获取
        'view_suffix'  => 'html',               // 模板后缀
        'view_depr'    => DIRECTORY_SEPARATOR,  // 模板文件名分隔符
        'tpl_begin'    => '{',                  // 模板引擎普通标签开始标记
        'tpl_end'      => '}',                  // 模板引擎普通标签结束标记
        'taglib_begin' => '{',                  // 标签库标签开始标记
        'taglib_end'   => '}',                  // 标签库标签结束标记
    ],

    // 日志设置
    'log'        => [
        'type'         => 'File',   // 日志记录方式，内置 file socket 支持扩展
        'path'         => '',       // 日志保存目录
        'level'        => [],       // 日志记录级别
        'record_trace' => false,    // 是否记录trace信息到日志
        'json'         => false,    // 是否JSON格式记录
    ],

    // Trace设置 开启 app_trace 后 有效
    'trace'      => [
        'type' => 'Html',   // 内置Html Console 支持扩展
        'file' => __DIR__ . '/tpl/page_trace.tpl',
    ],

    // 缓存设置
    'cache'      => [
        'type'   => 'File',         // 驱动方式
        'prefix' => '',             // 缓存前缀
        'expire' => 0,              // 缓存有效期 0表示永久缓存
    ],

    // Session设置
    'session'    => [
        'id'             => '',         // session_id
        'var_session_id' => '',         // SESSION_ID的提交变量,解决flash上传跨域
        'prefix'         => 'xyg',      // SESSION 前缀
        'type'           => '',         // 驱动方式 支持redis memcache memcached
        'auto_start'     => true,       // 是否自动开启SESSION
        'httponly'       => true,       // 是否使用httponly
        'secure'         => false,      // 是否安全选项
    ],

    // Cookie设置
    'cookie'     => [
        'prefix'    => '',      // cookie 名称前缀
        'expire'    => 0,       // cookie 保存时间
        'path'      => '/',     // cookie 保存路径
        'domain'    => '',      // cookie 有效域名
        'secure'    => false,   // cookie 启用安全传输
        'httponly'  => '',      // httponly设置
        'setcookie' => true,    // 是否使用 setcookie
    ],

    // 数据库设置
    'database'   => [
        'type'            => 'mysql',               // 数据库类型
        'dsn'             => '',                    // 数据库连接DSN配置
        'hostname'        => '127.0.0.1',           // 服务器地址
        'database'        => '',                    // 数据库名
        'username'        => 'root',                // 数据库用户名
        'password'        => '',                    // 数据库密码
        'hostport'        => '',                    // 数据库连接端口
        'params'          => [],                    // 数据库连接参数
        'charset'         => 'utf8',                // 数据库编码默认采用utf8
        'prefix'          => '',                    // 数据库表前缀
        'debug'           => false,                 // 数据库调试模式
        'deploy'          => 0,                     // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
        'rw_separate'     => false,                 // 数据库读写是否分离 主从式有效
        'master_num'      => 1,                     // 读写分离后 主服务器数量
        'slave_no'        => '',                    // 指定从服务器序号
        'fields_strict'   => true,                  // 是否严格检查字段是否存在
        'resultset_type'  => 'array',               // 数据集返回类型
        'auto_timestamp'  => false,                 // 自动写入时间戳字段
        'datetime_format' => 'Y-m-d H:i:s',         // 时间字段取出后的默认时间格式
        'sql_explain'     => false,                 // 是否需要进行SQL性能分析
        'query'           => '\\think\\db\\Query',  // 查询对象
    ],

    // 分页配置
    'paginate'   => [
        'type'      => 'bootstrap',
        'var_page'  => 'page',
        'list_rows' => 15,
    ],

    // 控制台配置
    'console'    => [
        'name'      => 'Think Console',
        'version'   => '0.1',
        'user'      => null,
        'auto_path' => '',
    ],

    // 中间件配置
    'middleware' => [
        'default_namespace' => 'app\\http\\middleware\\',
    ],
];