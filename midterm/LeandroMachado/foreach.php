<?php 

// print_r($comaparators_signs);
// print_r($operations_signs);

function generate_random_values() {
  $array_size = rand(1, 10);
  for($i = 0; $i < $array_size; $i++) {
    $values[$i] = rand(-10, 10);
  }
  return $values;
}

function choose_comparator() {
  $comaparators_signs = array(">", "<", ">=", "<=", "==","!=");
  $index = rand(0, 4);
  $comparator = $comaparators_signs[$index];
  return $comparator;
}

function choose_operator() {
  $operations_signs = array("+=", "-=");
  $index = rand(0, 1);
  $operator = $operations_signs[$index];
  return $operator;
}

function evaluated_bool_expression($array_element, $comparator, $random_integer_to_compare) {
  switch($comparator) {
      case ">":
        if($array_element > $random_integer_to_compare) {
          return true;   
        } else {
          false;
        }
        break;
      
      case "<":
        if($array_element < $random_integer_to_compare) {
          return true;
        } else {
          false;
        }
        break;

      case ">=":
        if($array_element >= $random_integer_to_compare) {
          return true;
        } else {
          false;
        }
        break;
      
      case "<=":
        if($array_element <= $random_integer_to_compare) {
          return true;
        } else {
          false;
        }
        break;
      
      case "==":
        if($array_element == $random_integer_to_compare) {
          return true;
        } else {
          false;
        }
        break;

      case "!=":
        if($array_element != $random_integer_to_compare) {
          return true;
        } else {
          false;
        }
        break;        
    }
}

function evaluate_foreach_loop($values, $comparator, $random_integer_to_compare, $operator) {  
  $result = 0;  
  $j = 0;
  for($i = 0; $i < count($values); $i++) {
    // echo $values[$i];
    // echo $comparator;
    // echo $random_integer_to_compare;    
    if(evaluated_bool_expression($values[$i], $comparator, $random_integer_to_compare)) {
      $j = $i;      
      break;      
    }
  }  

  // echo "<br>j: " . $j . "<br>";
    
  for($k = 0; $k <= $j; $k++) {
    switch($operator) {
      case "+=":        
        $result += $values[$k];        
      case "-=":        
        $result -= $values[$k];        
    }
  }
  return $result;
}
  
$values = generate_random_values();
// print_r($values);
// echo "<br>";

$comparator = choose_comparator();
// print_r($comparator);
// echo "<br>";

$random_integer_to_compare = rand(-8,8);
// print_r($random_integer_to_compare);
// echo "<br>";

$operator = choose_operator();
// print_r($operator);
// echo "<br>";

echo "values = [";
for($i = 0; $i < count($values); $i++) {
  if($i === count($values)-1) {
    echo $values[$i];  
  } else {
    echo $values[$i] . ",";
  }
}
echo "];";
echo "<br>";
echo "<br>";
echo "result = 0";
echo "<br>";
echo "foreach(values as v) {";
echo "<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;if(v " . $comparator . " " . $random_integer_to_compare .") {";
echo "<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;";
echo "<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;else {";
echo "<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;result " . $operator . " v;";
echo "<br>";
echo "}";
echo "<br>";
echo "<br>";
echo "<br>";
echo "The value of the <strong>result</strong> after executing this piece of code would be " . evaluate_foreach_loop($values, $comparator, $random_integer_to_compare, $operator);

// few tests with known results:
// evaluate_foreach_loop(array(9,-3,-6,6,3,-2), ">", -5, $operator);
// evaluate_foreach_loop(array(8,0,-4,-4,4,4,10,-2), "<", -5, $operator);
// evaluate_foreach_loop($values, $comparator, $random_integer_to_compare, $operator);

?>