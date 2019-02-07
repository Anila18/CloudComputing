<!DOCTYPE HTML>
<html lang="en-US">
<head>
 <meta charset="UTF-8">
 <title>Simple Calculator</title>
</head>
<style type="text/css">
table{
 width:60%; background:red; margin:0 auto; box-shadow:10px 10px 30px #ccc; border-bottom:20px solid red;
}
.result-box{
 width:60%; margin:0 auto; background: green; height:100px; margin-top:20px; padding:20px; color:white;box-shadow:10px 10px 30px #ccc; font-family:Times New Roman;
}
td{
font-size:20px; padding:10px; font-family:Times New Roman; color:#444;
}
input[type=text]{
 padding:10px; width:100px; font-size:20px;
}
input[type=submit]{
 padding:10px;  font-size:16px; cursor:pointer;border:none; background:#00FFFF; color:#ccc; width:300px; height:50px;
}
input[type=reset]{
 padding:10px;  font-size:16px;cursor:pointer; border:none;background:#00FFFF; color:#ccc; height:50px;
}
input[type=submit]:hover{
 background:#eee; color:#ccc;
}
input[type=reset]:hover{
 background:#eee; color:#ccc;
}
h1{
 background:#ff6666; color:white; font-family:Times New Roman; padding:20px;
}

</style>
<body>
 <form method="post" action = "mysimplewebcalculator.php">
 <table>
 
 <center>
 <h1>Simple Calculator</h1>
 <tr><td>Select First Value</td><td><input type="text" name="first_value" id="" /></td></tr>
 <tr><td>Select Second Value</td><td><input type="text" name="second_value" id="" /></td></tr>
 <tr><td>Select Oprator </td> 
 <td>
 <select name="operator" id="">
  <option value="static">Select Operator</option>
  <option value="+">Addition</option>
  <option value="-">Substraction</option>
  <option value="*">Multiplication</option>
  <option value="/">Division</option>
  <option value="^">Power</option>
  </select></td></tr>
 
 <tr><td><input type="reset" value="Reset The Numbers" /></td><td><input type="submit" name="submit" value="Let's Calculate" /></td></tr>
 <?php
 /*php code*/ 
 ?>
 </center>
 </table>
 </form>
 
</h3>
 </div>
</body>
</html>