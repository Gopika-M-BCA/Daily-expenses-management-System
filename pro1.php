<?php
session_start();
error_reporting(0);
include('db.php');

if(isset($_POST['submit']))
  {
$name=$_POST["ename"];
$cost=$_POST["ecost"];
$date=$_POST["edate"];
$disc=$_POST["edisc"];
$id=$_POST["id"];

    $query="INSERT INTO table1 VALUES('$name','$cost','$date','$disc','$id')";

if(mysqli_query($conn, $query)){
echo "<script>alert('new record created successfully');</script>";
}else{
echo "Error: " .$sql. "<br>" .mysqli_error($conn);
}
}
/*
if($query){
echo "<script>alert('Expense has been added');</script>";
} else {
echo "<script>alert('Something went wrong. Please try again');</script>";
} */

?>

<html>
<head>
<title>Expense Entry</title>
<link rel="stylesheet" href="../New1/css/cpro1.css">
</head>
<body>
<?php include_once('sidebar.html'); ?>

<br><br><br><br>
<div class="class1">
<center>
<h1>Enter values</h1>
<form name="myform" action="" method="POST">

<table cellspacing=5>
<tr>
<td>Expense Name<br>
<input type="text" name="ename" required>
</td></tr><tr>
<td>Expense Amount<br>
<input type="text" name="ecost" required>
</td></tr><tr>
<td>Date<br>
<input type="date" name="edate" required>
</td></tr><tr>
<div class="custom-select">
<td>Item category<br>
<select  name="edisc" style="width:300px; height:40px; padding: 0px; border: 1px solid #ccc; border-radius: 4px; width:800px; color: #444444;">
<option  value="0">Choose category</option>
<option  value="0">Choose category</option>
<option  value="Baby">Baby</option>
<option  value="Beauty">Beauty</option>
<option  value="Bills">bills</option>
<option  value="Car">Car</option>
<option  value="Clothing">Clothing</option>
<option  value="dairy">dairy products</option>
<option  value="Education">Education</option>
<option  value="Entertainment">Entertainment</option>
<option  value="Food">Food</option>
<option  value="Fruits">Fruits</option>
<option  value="Gadgets">Gadgets</option>
<option  value="Gift">Gift</option>
<option  value="Grocery">Grocery</option>
<option  value="Hamburger">Hamburger</option>
<option  value="Health">Health</option>
<option  value="Home">Home</option>
<option  value="Insurance">Insurance</option>
<option  value="Maintanace and Repairs">Maintanance&repairs</option>
<option  value="Office">Office</option>
<option  value="Pet">Pet</option>
<option  value="Phone bill">Phone Bill</option>
<option  value="Rent">Rent</option>
<option  value="Shopping">Shopping</option>
<option  value="Snacks">Snacks</option>
<option  value="Social">Social</option>
<option  value="Sport">Sport</option>
<option  value="Stationary">Stationary</option>
<option  value="Tax">Tax</option>
<option  value="Television bill">Television Bill</option>
<option  value="Transportation">Transportation</option>
<option  value="travel">travel</option>
<option  value="vegetable">vegetables</option>
<option  value="Water Bill">Water Bill</option>
<option  value="Wine">Wine</option>
<option  value="others">others</option>

</select>
</div>
</td></tr><tr><td>
<button type="submit"  name="submit" value="submit">SUBMIT</button>
</td></tr>
</table>

</form>
</center>
</div>

</body>
</html>
