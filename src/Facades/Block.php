<?php
/**
 * Created by PhpStorm.
 * User: yongj
 * Date: 12/3/18
 * Time: 3:58 PM
 */

namespace jyk2000\Test\Facades;


use Illuminate\Support\Facades\Facade;

class Block extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'block';
    }
}