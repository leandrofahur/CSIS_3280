<?php
  require './lib.php';

  global $degree;
  global $num_of_terms;
  
  function generate_expression($degree) {  
    $GLOBALS['num_of_terms'] = (2*$degree) + 3;
    $coefficients = array();
    $exponents = array();    

    // loop to fill the array of coefficients and exponents with desired values and restrictions:
    for($i = 0; $i < $GLOBALS['num_of_terms']; $i++) {  
      $rand_coefficient_number = rand(-20,20);
      if($rand_coefficient_number === 0) {
          while($rand_coefficient_number === 0) {
            $rand_coefficient_number = rand(-20,20);
            break;
        }
      }
      $rand_exponent_number = rand(0,$degree);
      array_push($coefficients, $rand_coefficient_number);
      array_push($exponents, $rand_exponent_number);
    } 

    // fill array of arrays with the values accordingly:
    return array(
      $coefficients,
      $exponents
    );     
  }

  function meets_requirements($terms, $degree) {
    // grab exponents value:
    $exponents = array_values($terms)[1];    

    // check if there is a expoent greater than the allowed degree:
    sort($exponents);
    array_reverse($exponents);

    if($exponents[0] > $degree) {
      return false;
    }
    
    // count for exponent with less than 2:
    $exponents_counter_array = array_count_values($exponents);

    // check if they count for zero or only one apearance of the exponent:
    if(in_array(0, $exponents_counter_array) || in_array(1, $exponents_counter_array)) {
      return false;
    }

    return true;
  }

  function print_expression($terms) {
    // grab coefficients and exponents values:
    $coefficients = array_values($terms)[0];    
    $exponents = array_values($terms)[1];    

    print "<h1>";
    for($i = 0; $i < count($coefficients); $i++) {
      // ($coefficients[$i] > 0 ? "+" . $coefficients[$i] : $coefficients);
      if($coefficients[0] > 0) {
        print $coefficients[$i] . "x<sup>" . ($exponents[$i] == 0 ? "": $exponents[$i]) . "</sup> ";
      } else {
        print ($coefficients[$i] > 0 ? "+" . $coefficients[$i] : $coefficients[$i]) . "x<sup>" . ($exponents[$i] == 0 ? "": $exponents[$i]) . "</sup> ";        
      }  
    }
    print "</h1>";
  }

  // ----------------------------------------------------------------

  display_html_head('Assignment01');
  $terms = generate_expression(1);
  print_expression($terms);
  display_html_footer();
?>