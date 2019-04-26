<?php
$con = mysqli_connect("localhost","root","root","JOBADDA");
if(!$con)
{
  echo  "Error connecting to database";
}

$sql = "select * from Industry where uname='msobi' and password='root'";
$query=mysqli_query($con,$sql);
if($query){
  while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
  $r[]=$row;
  }
 }
echo count($r);
echo $r[0]['cname'];
?>