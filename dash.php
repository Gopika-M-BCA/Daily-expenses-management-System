
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daily Expense Tracker || Datewise Expense Report</title>
	<link rel="stylesheet" href="../new1/css/cdashboard.css">
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	
</head>
<body>
<?php include_once('sidebar.html'); ?>
<?php  
error_reporting(0);
include_once('db.php');
?>
<br><br><br><br><br>
<TABLE cellspacing="40px">
<tr>
<td>
<?php
//Today Expense
$tdate=date("y-m-d");
$query=mysqli_query($conn,"select sum(ecost)  as todaysexpense from table1 where (edate)='$tdate' ;");
$result=mysqli_fetch_array($query);
$sum_today_expense=$result['todaysexpense'];
?> 

<h4>Today's Expense</h4>
<?php if($sum_today_expense==""){
echo "0";
} else {
echo $sum_today_expense;
}
?>
</td>
</tr><tr>
<td>
<?php
//Total Expense
$query5=mysqli_query($conn,"select sum(ecost)  as totalexpense from table1 ;");
$result5=mysqli_fetch_array($query5);
$sum_total_expense=$result5['totalexpense'];
?>
						<h4>Total Expenses</h4>
<?php if($sum_total_expense==""){
echo "0";
} else {
echo $sum_total_expense;
}
?>
</td>
</tr><tr>
<td>
<?php
//Total Expense
$query5=mysqli_query($conn,"select count(ename)  as totalexpense from table1 ;");
$result5=mysqli_fetch_array($query5);
$sum_total_expense=$result5['totalexpense'];
?>
<h4> Total Entries</h4>
<?php if($sum_total_expense==""){
echo "0";
} else {
echo $sum_total_expense;
}
?>
</td>
</tr><tr>
<td>
<?php
//Total entries
$tdate=date("y-m-d");
$query5=mysqli_query($conn,"select count(ename)  as totalexpense from table1 where (edate)='$tdate';");
$result5=mysqli_fetch_array($query5);
$sum_total_expense=$result5['totalexpense'];
?>

<h4>Today Entries</h4>
<?php if($sum_total_expense==""){
echo "0";
} else {
echo $sum_total_expense;
}
?>
</td>
</tr>
</TABLE>
</body>