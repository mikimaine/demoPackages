<?php
/**
 * Created by Mikimaine.
 * User: MIKI$
 * Date: 2/19/2016
 * Time: 1:51 AM
 */

namespace Mikimaine\Demo\Http\Controller;
use Illuminate\Routing\Controller as BaseController;


class DemoController  extends BaseController
{
    public function index()
    {
        return \Demo::hello() . ' from controller';
    }
}