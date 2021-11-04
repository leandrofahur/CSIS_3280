<?php

// $number_of_params = rand(1,3);
$number_of_params = 3;
global $increments; 
$increments = array("++", "--");

global $operations;
$operations = array("+=", "-=", "*=", "/=");

global $a;
$a = rand(-10,10);
global $b;
$b = rand(-10,10);
global $c;
$c = rand(-10,10);
global $y; 

if($number_of_params === 1) {
  function calc_values($a) {
    $rand_keys = array_rand($GLOBALS['increments'], 1);        
    
    $rand_increment = $GLOBALS['increments'][$rand_keys];

    $const_new_line = "<br>";
    $const_white_4spaces = "&nbsp;&nbsp;&nbsp;&nbsp;";

    print "function calc_values(a) {";
    print $const_new_line;
    print $const_white_4spaces . "a" . $rand_increment . " ;";
    print $const_new_line;
    print $const_white_4spaces . "return a;";
    print $const_new_line;
    print "}";

    print $const_new_line;
    print $const_new_line;
    print "y = calc_values(" . $a . ")";
    print $const_new_line;   
    print $const_new_line;    

    switch($rand_increment) {
      case "++":
        $a++;
        break;
      
      case "--":
        $a--;
        break;
    }

    return $a;
  }  
  print "After executing this piece of code, the value of y would be " . calc_values($a);
  
  
}

if($number_of_params === 2) {
  function calc_values($a, $b) {
    $rand_keys_increment = array_rand($GLOBALS['increments'], 1);        
    $rand_increment = $GLOBALS['increments'][$rand_keys_increment];
            
    $rand_keys_operation = array_rand($GLOBALS['operations'], 1);        
    $rand_operation = $GLOBALS['operations'][$rand_keys_operation];

    // echo "rand key: " . $rand_keys_increment . " | increment: " . $rand_increment;
    // echo "<br>";
    // echo "rand key: " . $rand_keys_operation . " | operation: " . $rand_operation;

    $const_new_line = "<br>";
    $const_white_4spaces = "&nbsp;&nbsp;&nbsp;&nbsp;";

    print "function calc_values(a,b) {";
    print $const_new_line;
    print $const_white_4spaces . "a" . $rand_increment . ";";  
    print $const_new_line;  
    print $const_white_4spaces . "b" . $rand_operation . "a;";
    print $const_new_line;  
    print $const_white_4spaces . "return b;";
    print $const_new_line;
    print "}";

    print $const_new_line;
    print $const_new_line;
    print "y = calc_values(" . $a . "," . $b . ")";

    print $const_new_line;
    print $const_new_line;

    switch($rand_increment) {    
      case "++":
        $a++;
        break;
      
      case "--":
        $a--;
        break;
    }
    
    switch($rand_operation) {
      case "+=":
        $b += $a;
        break;
      
      case "-=":
        $b -= $a;
        break;
      
      case "*=":
        $b *= $a;
        break;
      
      case "/=":
        $b /= $a;
        break;
    }
    
    return $b;
  }
  print "After executing this piece of code, the value of y would be " . calc_values($a,$b);
}

if($number_of_params === 3) {
  function calc_values($a, $b, $c) {
    $rand_keys_increment = array_rand($GLOBALS['increments'], 1);        
    $rand_increment = $GLOBALS['increments'][$rand_keys_increment];
            
    $rand_keys_operation = array_rand($GLOBALS['operations'], 1);        
    $rand_operation = $GLOBALS['operations'][$rand_keys_operation];

    // echo "rand key: " . $rand_keys_increment . " | increment: " . $rand_increment;
    // echo "<br>";
    // echo "rand key: " . $rand_keys_operation . " | operation: " . $rand_operation;

    $const_new_line = "<br>";
    $const_white_4spaces = "&nbsp;&nbsp;&nbsp;&nbsp;";

    print "function calc_values(a,b,c) {";
    print $const_new_line;
    print $const_white_4spaces . "a" . $rand_increment . ";";  
    print $const_new_line;  
    print $const_white_4spaces . "b" . $rand_operation . "a;";
    print $const_new_line;      
    
    switch($rand_increment) {    
      case "++":
        $a++;
        break;
      
      case "--":
        $a--;
        break;
    }
    
    switch($rand_operation) {
      case "+=":
        $b += $a;
        break;
      
      case "-=":
        $b -= $a;
        break;
      
      case "*=":
        $b *= $a;
        break;
      
      case "/=":
        $b /= $a;
        break;
    }

    $rand_keys_operation = array_rand($GLOBALS['operations'], 1);        
    $rand_operation = $GLOBALS['operations'][$rand_keys_operation];
    // echo "rand key: " . $rand_keys_operation . " | operation: " . $rand_operation;
    
    print $const_white_4spaces . "c" . $rand_operation . "b;";
    print $const_white_4spaces . "return c;";
    print $const_new_line;
    print "}";

    print $const_new_line;
    print $const_new_line;
    print "y = calc_values(10,8,1)";

    print $const_new_line;
    print $const_new_line;

    switch($rand_operation) {
      case "+=":
        $c += $b;
        break;
      
      case "-=":
        $c -= $b;
        break;
      
      case "*=":
        $c *= $b;
        break;
      
      case "/=":
        $c /= $b;
        break;
    }

    return $c;
  }

  print "After executing this piece of code, the value of y would be " . calc_values($a,$b,$c);
}

?>