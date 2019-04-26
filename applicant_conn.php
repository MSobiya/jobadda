<?php
$con = mysqli_connect("localhost","root","root","JOBADDA");

if(isset($_POST['applicant_db'])){

$c_name = $_POST['c_name'];
$c_uname = $_POST['c_uname'];
$c_email = $_POST['c_email'];
$c_dept = $_POST['c_dept'];
$c_pwd=$_POST['c_pwd'];
//$pwd=md5($pwd);
$resume = "RESUME";
echo $c_name.$c_uname.$c_email.$c_dept.$c_pwd.$resume;

if(!$con)
{
  echo  "Error connecting to database";
}

//$sql = "insert into candidate (name, auname, email, apwd) values ('$c_name','$c_uname','$c_email','$c_pwd')";
$sql = "INSERT INTO `candidate`(`name`, `auname`, `email`, `dept`, `apwd`, `resume`) VALUES ('$c_name','$c_uname','$c_email','$c_dept','$c_pwd','$resume')";

//echo $sql;

$result = mysqli_query($con,$sql);
if(!$result)
{
  echo "error";
  echo mysqli_error();
}
else
{
  echo "<br/>Thanks for Registration";

}

}
?>