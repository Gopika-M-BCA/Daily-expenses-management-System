
<?php  
error_reporting(0);
include_once('db.php');
//code deletion
if(isset($_POST['submit'])){
  $UserId=$_POST['id'];
$query=mysqli_query($conn,"delete from table1 where id='$UserId'");

if($query){
echo "<script>alert('Record successfully deleted');</script>";
} else {
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}
?>
<html>
<head>
<title>Expense Entry</title>
<link rel="stylesheet" href="../new1/css/creport.css">
</head>
<body>   
<?php include_once('sidebar.html'); ?>
<div class="class1">


<br>
<h1>Enter the ID number to delete the Record</h1>

<form role="form" method="POST" action="" name="bwdatesreport">
		<input class="form-control" type="text"  id="id" name="id" required="true">
		<button type="submit" class="btn btn-primary" name="submit">DELETE</button>
	</form>
<br><br>

<table border="1">
 <thead>
  <tr>
    <th>S.NO</th>
    <th>Expense Item</th>
    <th>Expense Cost</th>
    <th>Expense Date</th>	
    <th>Expnese Categories</th>
    <th>ID</th>
  </tr>
 </thead>
 <tbody>
<?php
$sql="select * from table1";
$result=$conn->query($sql);
$cnt=1;
if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		echo "<tr>
		<td>" .$cnt. "</td>
		<td>" .$row["ename"]. "</td>
		<td>" .$row["ecost"]. "</td>
		<td>" .$row["edate"]. "</td>
		<td>" .$row["edisc"]. "</td>
		<td>" .$row["id"]. "</td>
		</tr>";
	$cnt=$cnt+1;
	}
}
else{
	echo "0 results";
}
$conn->close();
?>
</tbody>
</table>

</div>
</body>
</html>