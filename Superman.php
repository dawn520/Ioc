<?php
/**
 * Created by PhpStorm.
 * User: xixi
 * Date: 2017/12/11
 * Time: 02:15
 */

namespace app;


class Superman
{
    public $superModule;

    /**
     * Superman constructor.
     * @param SuperModuleInterface $superModule
     */
    public function __construct(SuperModuleInterface $superModule)
    {
        $this->superModule = $superModule;
    }
}