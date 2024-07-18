<?php
session_start();
error_reporting(0);
include_once'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daily Expense Tracker || Datewise Expense Report</title>
	<link rel="stylesheet" href="../new1/css/date.css">
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>
<body>
<?php include_once('sidebar.html'); ?><?php
$disc=$_POST['edisc'];
$name=$_POST["ename"];
$cost=$_POST["ecost"];
?>
<h5 align="center" >category wise Expense Report from <?php echo $disc?></h5>

<center><table >                                 
            <thead>
            <tr>  
            <th>S.NO</th>
            <th>Expense Name</th>
            <th>Category</th>
            <th>Expense Amount</th>
            </tr>
            </thead>                     
<?php
$ret=mysqli_query($conn,"SELECT ename,edisc,ecost FROM `table1`  where edisc='$disc'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
?>
              <tbody>
              <tr>
                <td><?php echo $cnt;?></td>
                <td><?php echo $row['ename'];?></td>
                <td><?php  echo $row['edisc'];?></td>
                <td><?php  echo $row['ecost'];?></td>
                </tr> 
<?php               
$cnt=$cnt+1;
}?>
<?php
$re=mysqli_query($conn,"SELECT sum(ecost) as totaldaily FROM `table1`  where edisc='$disc'");
while ($row=mysqli_fetch_array($re)) {?>
                <?php  $ttlsl=$row['totaldaily'];?>
                <?php  $totalsexp+=$ttlsl; ?>
<?php }?>
 <tr>
  <th colspan="2" style="text-align:center">Grand Total</th>     
  <td><?php echo $totalsexp;?></td>
 </tr>     
</tbody> 
</table></center>
</body>
</html>
