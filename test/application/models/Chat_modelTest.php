<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Chat_modelTest
 *
 * @author Lenovo
 */
class Chat_modelTest extends PHPUnit_Framework_TestCase {
    
    private $CI;

    public function setUp() {
        $this->CI = &get_instance();
    }
    
    public function testChat(){
        $this->assertEquals(9, 0);
    }
    
}
