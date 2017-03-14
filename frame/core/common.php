<?php
/**
 * Created by PhpStorm.
 * User: tony
 * Date: 2017/3/14
 * Time: 16:06
 */

namespace Core;

class common{
    public static function checkEmail(){

    }

    public static function getIp(){

    }

    //获取过滤的$_GET/$_POST字段
    public static function _getParameter($parameter, $default = null, $method = 'get'){
        $methodData = ($method == 'post') ? $_POST : $_GET;
        $parameterData = isset($methodData[$parameter]) ? $methodData[$parameter] : $default;
        return self::_checkParameter($parameterData);
    }

    //获取过滤的$_GET/$_POST数据
    public static function _getAllParameter($method = 'get'){
        $getData = array();
        $methodData = ($method == 'post') ? $_POST : $_GET;
        foreach($methodData as $key => $value){
            $getData[$key] = self::_checkParameter($value);
        }
        return $getData;
    }

    //处理接收字段
    private static function _checkParameter($parameter){
        if(is_array($parameter)){
            foreach($parameter as $key => $value){
                $parameter[$key] = self::_checkParameter($value);
            }
            return $parameter;
        }else{
            return addslashes(trim($parameter));
        }
    }
}

