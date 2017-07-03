<?php
$num = 4;


# Using (" \\ - Or "  Logical Operators)
#htis will compare and evaluate the variable
if ($num == 10 || is_string( $num )) {
    echo ' 10 or string ';
  } else {
   echo ' NOT 10 or string.'; 
  }


# Using (&& Logical Operators) 
# The Operator will check the Var Values and the echo out something.
/* if ($num >= 10 && $num <= 1000) {
    echo ' your number is within the range ';
  } else {
   echo ' your number is NOT within the range.'; 
  }
 */

# if Statement Nested Below

/*if ($num >= 10) {
  if ( $num <= 1000 ) {
    echo ' your number is within the range ';
  } else {
   echo ' your number is NOT within the range.'; 
  }
}*/

