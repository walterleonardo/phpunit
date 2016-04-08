<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class RemoteConnect
{
  public function connectToServer($serverName=null)
  {
    if($serverName==null){
      throw new Exception("¡Este no es un nombre de servidor!");
    }
    $fp = fsockopen($serverName,80);
    return ($fp) ? true : false;
  }
  
    public function connectToServer2($serverName=null)
  {
    if($serverName==null){
      throw new Exception("¡Este no es un nombre de servidor!");
    }
    $fp = fsockopen($serverName,80);
    return ($fp) ? true : false;
  }
  
  public function returnSampleObject()
  {
    return $this;
  }
  
  public function incrementSalary( $actualSalary ){  
    return ( 2 * $actualSalary ) /  100;  
}  




 public function incrementSalaryplus( $actualSalary ){  
    return ( 2 * $actualSalary ) /  10;  
}  
}