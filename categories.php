<?php
session_start();
error_reporting(0);
include'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daily Expense Tracker || Datewise Expense Report</title>
	<link rel="stylesheet" href="../New1/css/categories.css">
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	
</head>
<body>
<?php include_once('sidebar.html'); ?>
<center>
<form role="form" method="post" action="categoriesreport.php" name="categoryreport">
    <table>
        <h4>EXPENSE CATEGORIES REPORT</h4>
<div>
<td>Expense Categories</td>
<td>
<select   class ="custom-select" name="edisc">
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
</td></tr><tr align="right"><td>
<button type="submit"  name="submit" value="submit">SUBMIT</button>
</td></tr>
</table>

</form>
</center>
</body>
</html>
