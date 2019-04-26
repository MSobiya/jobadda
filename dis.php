<?php
$con = mysqli_connect("localhost","root","root","JOBADDA");
$sql="select resume from candidate where name='MFS'";

$query = mysqli_query($con,$sql);

$rows= mysqli_num_rows($query);
if($query){
 	while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
 	echo $row['resume'];
 	}
 }
?>