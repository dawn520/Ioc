<?php
/**
 * Created by PhpStorm.
 * User: xixi
 * Date: 2017/12/11
 * Time: 02:15
 */

namespace app;


class XPower implements SuperModuleInterface
{

    /**
     * XPower constructor.
     */
    public function __construct()
    {
//        echo 'XPower';
    }

    /**
     * 超能力激活方法
     *
     * 任何一个超能力都得有该方法，并拥有一个参数
     * @param array $target 针对目标，可以是一个或多个，自己或他人
     */
    public function activate(array $target)
    {
        echo "激光发射！！ \n";
    }
}