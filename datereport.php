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
	<link rel="stylesheet" href="../New1/css/date.css">
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	
</head>
<body>
<?php include_once('sidebar.html'); ?><?php
$fdate=$_POST['fromdate'];
 $tdate=$_POST['todate'];
$rtype=$_POST['requesttype'];
?>
<h5 align="center" >Datewise Expense Report from <?php echo $fdate?> to <?php echo $tdate?></h5>

                       <center>             <table >
                                        <thead>
                                       
            <tr>  <th>S.NO</th>
              <th>Date</th>
              <th>Expense Amount</th> </tr>
            
                                        </thead>
 <?php

$ret=mysqli_query($conn,"SELECT edate,SUM(ecost) as totaldaily FROM `table1`  where (edate BETWEEN '$fdate' and '$tdate') group by edate");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              <tbody>
                <tr>
                  <td><?php echo $cnt;?></td>
            
                  <td><?php  echo $row['edate'];?></td>
                  <td><?php  echo $ttlsl=$row['totaldaily'];?></td>
           
           
                </tr> 
                <?php
                $totalsexp+=$ttlsl; 
$cnt=$cnt+1;
}?>

 <tr>
  <th colspan="2" style="text-align:center">Grand Total</th>     
  <td><?php echo $totalsexp;?></td>
 </tr>     
 
 </tbody>   </table></center>




						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			
		</div><!-- /.row -->
	</div><!--/.main-->
	
</body>
</html>
