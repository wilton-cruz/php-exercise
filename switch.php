<?php
$today = date('l');

$today = 'Saturday';
switch ($today) {
  case 'monday';
    echo ' Wash on monday';
    breack;
     case "Tuesday":
       echo "Iron on Tuesday";
       break;
   case "Wednesday":
       echo "Mend on Wednesday";
       break;
   case "Thursday":
       echo "Churn on Thursday";
       break;
   case "Friday":
       echo "Clean on Friday";
       break;
   case "Saturday":
       echo 'Saturday is the weekend. ';
   case "Sunday":
       echo "Rest on the weekend";
       break;
   default:
       echo "I don't know what day it is";
       break;
 
}
?>
