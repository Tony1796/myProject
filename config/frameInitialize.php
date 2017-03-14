<?php

//初始化config

return [
    'DEFAULT_MODEL'     => 'api',       //默认模块
    'DEFAULT_ACTION'    => 'index',     //默认方法
    'DEFAULT_CONFIG'    => 'config',    //默认配置
    'CLASS_SUFFIX'      => '.php',      //默认文件后缀

    'USE_SESSION'       => true,        //是否使用session
    'USE_CACHE'         => true,        //是否使用缓存
    'DEBUG_OPEN'        => true,        //是否开启报错
    'USE_READ_DB'       => true,        //是否是用读写分离
    'USE_UNIT_CONFIG'   => true,        //是否使用单元配置

    'PROJECT_NAME'      => 'module',    //项目目录名称
    'FRAME_NAME'        => 'frame',     //核心目录名称
    'CONFIG_NAME'       => 'config',    //config目录名称

    'MODULE_LIST' => [
        'user',
        'order',
        'goods'
    ], //模块列表
    'MODEL_LIST' => [
        'api',
        'service',
        'business',
        'model'
    ], //模型列表
];