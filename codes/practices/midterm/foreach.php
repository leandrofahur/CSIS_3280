<?php

function generate_random_array() {
  $array_size = rand(1,10);
  $values = array();
  for($i = 0; $i <= $array_size; $i++) {
    array_push($values, rand(-10,10));
  }
  return $values;
}

function evaluate_foreach_loop($values,$condition,$random_value,$operation) {
  $result = 0;
  $index = 0;

  for($i = 0; $i < count($values); $i++) {    
    switch($condition) {
      case "<":
        if($values[$i] < $random_value)
        break;
      
      case ">":
        if($values[$i] > $random_value) 
        break;
      
      case "<=":
        if($values[$i] <= $random_value)
        break;

      case "==":
        if($values[$i] == $random_value) 
        break;

      case "!=":
        if($values[$i] != $random_value)          
        break;      
    }      
    $index = $i;
  }
  
  for($k = 0; $k <= $index; $k++) {
    switch($operation) {
      case "+=":
        $result += $values[$k];
        break;
      
      case "-=":
        $result -= $values[$k];
        break;
    }
  }

  // $index++;
  // echo "<br></br>count values: " . count($values);
  // echo "<br></br>index: " . $index;  
  return $result;
}

// ----------------------------------------------------------------

$random_value = rand(-8,8);

$conditions = array(">","<",">=","<=","==","!=");
$condition_index = rand(0,5);
$condition = @$conditions[$condition_index];

$operations = array("+=", "-=");
$operation_index = rand(0,1);
$operation = @$operations[$operation_index];

$const_new_line = "<br>";
$const_white_4spaces = "&nbsp;&nbsp;&nbsp;&nbsp;";

$values = generate_random_array();
print "values = [" . implode(",", $values) . "]";
// print "values = [2,4]";

print $const_new_line . $const_new_line;

$result = 0;
print "result = 0;";

print $const_new_line;

print "foreach(values as v) {";
print $const_new_line;
print $const_white_4spaces . "if(v " . $condition . " " .  $random_value . " ) {";
print $const_new_line . $const_white_4spaces . $const_white_4spaces . "break;";
print $const_new_line . $const_white_4spaces . "else {";
print $const_new_line . $const_white_4spaces . $const_white_4spaces . "result " . $operation . " v;";
print $const_new_line  . "}";

print $const_new_line . $const_new_line . "The value of <strong>result</strong> after executing this piece of could would be " . evaluate_foreach_loop($values, $condition, $comparison_value, $operation);

print $const_new_line . $const_new_line;

// known inputs, with results:
// print evaluate_foreach_loop(array(2, 4),"<", 2, "+=");
// print $const_new_line;
// print evaluate_foreach_loop(array(5,-3,8,8,-1),"==", -5, "+=");
// print $const_new_line;
// print evaluate_foreach_loop(array(0,-7,-3,1),"<", 2, "-=");
// print $const_new_line;
// print evaluate_foreach_loop(array(-3,-1),"<=", 8, "-=");
// print $const_new_line;
// print evaluate_foreach_loop(array(9,-6,5,7,-4,10),"<=", 8, "+=");
// print $const_new_line;
// print evaluate_foreach_loop(array(6, 5, -1, 3, 5),"<=", 0, "-=");

?>