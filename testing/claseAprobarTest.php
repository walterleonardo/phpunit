<?php

include '/Applications/MAMP/htdocs/PHPunitTesting/claseAprobar.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of claseAprobarTest
 *
 * @author walterleonardo
 */
class claseAprobarTest extends PHPUnit_Framework_TestCase {

    /**
     * @var \RemoteWebDriver
     */
    public function setUp() {
        
    }

    public function tearDown() {
        
    }

    public function testConnectionIsValid() {
        // prueba para asegurarse de que el objeto de un fsockopen es válido 
        $connObj = new RemoteConnect();
        $serverName = 'www.google.com';
        $this->assertTrue($connObj->connectToServer($serverName) !== false);
        $this->assertTrue($connObj->connectToServer2($serverName) !== false);
    }

    public function testIncrementSalary() {
        $connObj = new RemoteConnect();
        $incrementSalary = $connObj->incrementSalary(100);
        $this->assertEquals(20, $incrementSalary);
    }
    
        public function testIncrementSalaryPlus() {
        $connObj = new RemoteConnect();
        $incrementSalary = $connObj->incrementSalaryplus(1000);
        $this->assertEquals(200, $incrementSalary);
    }

  public function testConnectionIsValid2()
  {
    // prueba para asegurarse de que el objeto de un fsockopen es válido 
    $connObj = new RemoteConnect();
    $serverName = 'www.google.com';
    $this->assertTrue($connObj->connectToServer2($serverName) !== false);
  }
}
