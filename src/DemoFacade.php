<?php
/**
 * Created by PhpStorm.
 * User: MIKI$
 * Date: 2/19/2016
 * Time: 1:28 AM
 */

namespace Mikimaine\Demo;


use Illuminate\Support\Facades\Facade;

class DemoFacade extends Facade {

    protected static  function getFacadeAccessor(){
        return 'mikimaine-demo';
    }
}