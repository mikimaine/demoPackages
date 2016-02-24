<?php
/**
 * Created by Mikimaine.
 * User: MIKI$
 * Date: 2/19/2016
 * Time: 5:18 PM
 */



class DemoTest extends Illuminate\Foundation\Testing\TestCase {


    public function testSomethingIsTrue()
    {
        $this->visit('/demo/test')
            ->see('Test');
    }

    /**
     * Creates the application.
     *
     * Needs to be implemented by subclasses.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernelInterface
     */
    public function createApplication()
    {
        // TODO: Implement createApplication() method.
    }

}