<?php
$con = mysqli_connect("localhost","root","root","JOBADDA");

if(isset($_POST['job_db'])){

$co_name=$_POST['co_name'];
$j_loc=$_POST['j_loc'];
$j_dept=$_POST['j_dept'];
$j_domain=$_POST['j_domain'];
$j_sal=$_POST['j_sal'];
$j_web=$_POST['j_web'];
$j_phone=$_POST['j_phone'];
$j_email=$_POST['j_email'];
//$pwd=md5($pwd);

if(!$con)
{
  echo  "Error connecting to database";

}

$sql = "insert into job (cname, location, jdept, jdomain, salary, cweb, phone, coemail) values ('$co_name','$j_loc','$j_dept','$j_domain','$j_sal','$j_web','$j_phone','$j_email')";

echo "<hr>";

//echo $sql;

$result = mysqli_query($con,$sql);

if(!$result)
{
  echo "error ";
}
else
{
  echo "<br/>Thanks";
	//header("Location: index.php")

}

}

?>