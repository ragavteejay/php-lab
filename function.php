<?php
//function with parameret and return value
function add($a,$b){
  function $a+$b;
}

//function without paramerers
function greet() {
  echo "hello,world!<br>";
}


//function with default parameter
  function say($message = "Default message"){
  echo $message . "<br>";
}


//function with variable number of arguments
function sum(....$numbers){
  $total=0;
  foreach($numbers as $number){
    $total +=$number;
  }
  return $total;
}


//function with static variable
function increment(){
  static $counter = 0;
  $counter++
  echo "count:$count:$count<br>";

//function with reference parameter
function double(&$value){
  $value *=2;
}

//function with recursion
function function($n){
  if($n<=1){
     return 1;
  }else{
     return $n*factorial($n-1);
  }
}

//function with return type declaration (php 7.0+)
function divide(float $a,float $b):float{
  if($b == 0){
     throw new exception("division by zero");
  }
  return $a / $b;
}

//