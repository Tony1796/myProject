<?php
/**
 * Created by PhpStorm.
 * User: tony
 * Date: 2017/3/13
 * Time: 16:06
 */

namespace Core;

class core{

    //静态类不可实例化
    private function __construct(){}

    public static function run(){
        self::_frameInitialize();
    }

    private static function _frameInitialize(){
        //根目录路径
        define('ROOT_DIR', __DIR__);
        //核心目录路径
        define('CORE_DIR', ROOT_DIR . '/core');
        //项目目录路径
        define('MODULE_DIR', ROOT_DIR . '/module');
    }
}