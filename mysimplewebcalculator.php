<?php
 if(isset($_POST['submit'])){
  $first_value = $_POST['first_value'];
  $second_value = $_POST['second_value'];
  $operator = $_POST['operator'];
  
  
   
 
 ?>
 <div class="result-box">
 <h3>Your Results : <?php
switch($operator){ case "+":
   echo $first_value + $second_value; 
   break;
   case "-":
   echo $first_value - $second_value; 
   break;
   case "*":
   echo $first_value * $second_value; 
   break;
   case "/":
   echo $first_value / $second_value; 
   case "^":
   echo $first_value ^ $second_value;
   break;
   default:
   echo "Please Use Only Numbers";
   break;
   
   
   
   
   
  }
  
  
 }
 ?>