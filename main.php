<?php
/**
 * Created by PhpStorm.
 * User: xixi
 * Date: 2017/12/11
 * Time: 02:14
 */
namespace app;

include './SuperModuleInterface.php';
include './Container.php';
include './Superman.php';
include './UltraBomb.php';
include './XPower.php';

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.class.php';
});

// 创建一个容器（后面称作超级工厂）
$container = new Container;

// 向该 超级工厂 添加 超人 的生产脚本
$container->bind('superman', function($container, $moduleName) {
    return new Superman($container->make($moduleName));
});

// 向该 超级工厂 添加 超能力模组 的生产脚本
$container->bind('xpower', function($container) {
    return new XPower;
});

// 同上
$container->bind('ultrabomb', function($container) {
    return new UltraBomb;
});

// ******************  华丽丽的分割线  **********************
// 开始启动生产
$superman_1 = $container->make('superman', ['xpower']);
$superman_2 = $container->make('superman', ['ultrabomb']);
$superman_3 = $container->make('superman', ['xpower']);
// ...随意添加
$superman_1->superModule->activate([]);