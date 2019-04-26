<?php
session_start();
$con = mysqli_connect("localhost","root","root","JOBADDA");

//--------------------------------Industry Registration--------------------------------
if(isset($_POST['admin_db'])){


// On submitting form below function will execute.
$a_name=$_POST['a_name'];
$a_uname=$_POST['a_uname'];
$a_email=$_POST['a_email'];
$a_pwd=$_POST['a_pwd'];
$com_name=$_POST['com_name'];
//$pwd=md5($pwd);


$_SESSION['l_uname'] = $a_uname;
$_SESSION['l_pwd'] = $a_pwd;
$_SESSION['cname'] = $com_name;
$_SESSION['user'] = 'Industry';


if(!$con)
{
  echo  "Error connecting to database";

}


$sql = "insert into Industry(aname, uname, aemail, password, cname) values ('$a_name','$a_uname','$a_email','$a_pwd','$com_name')";

echo "<hr>";

//echo $sql;

$result = mysqli_query($con,$sql);

if(!$result)
{
  echo "error ";
  echo mysqli_error();
}
else
{
  header("Location:Industry_home.php");
  //echo "<br/>Thanks for Registration";

}

}



//-----------------------------Industry Home/ Job Post-------------------------------------------------------
if(isset($_POST['job_db'])){

$co_name=$_SESSION['cname'];
//$co_name=$_POST['co_name'];
$j_loc=$_POST['j_loc'];
$j_pos=$_POST['j_pos'];
$j_dept=$_POST['j_dept'];
$j_domain=$_POST['j_domain'];
$j_sal=$_POST['j_sal'];
$j_web=$_POST['j_web'];
$j_web="https://".$j_web;
$j_phone=$_POST['j_phone'];
$j_email=$_POST['j_email'];
//$pwd=md5($pwd);

if(!$con)
{
  echo  "Error connecting to database";

}

$sql = "insert into job (cname, location, jpost, jdept, jdomain, salary, cweb, phone, coemail) values ('$co_name','$j_loc','$j_pos','$j_dept','$j_domain','$j_sal','$j_web','$j_phone','$j_email')";

echo "<hr>";

//echo $sql;

$result = mysqli_query($con,$sql);

if(!$result)
{
  echo "error ";
}
else
{
  //echo "<br/>Thanks";
  header("Location: My_jobs.php");

}

}

/*if(isset($_POST['applicant_db'])){

$c_name = $_POST['c_name'];
$c_uname = $_POST['c_uname'];
$c_email = $_POST['c_email'];
$c_dept = $_POST['c_dept'];
$c_pwd=$_POST['c_pwd'];
//$pwd=md5($pwd);
echo $c_name.$c_uname.$c_email.$c_dept.$c_pwd;

if(!$con)
{
  echo  "Error connecting to database";
}

$sql = "insert into candidate (name, a_uname, email, dept, a_pwd) values ('$c_name','$c_uname','$c_email', $c_dept', '$c_pwd')";

echo "<hr>";

//echo $sql;

$result = mysqli_query($con,$sql);
if(!$result)
{
  echo "error ";
}
else
{
  echo "<br/>Thanks for Registration";

}

}*/


//------------------------------Student Registration-------------------------------------

if(isset($_POST['applicant_db'])){

$c_name = $_POST['c_name'];
$c_uname = $_POST['c_uname'];
$c_email = $_POST['c_email'];
$c_dept = $_POST['j_dept'];
$c_pwd=$_POST['c_pwd'];
$c_domain = '';
//$pwd=md5($pwd);
$resume = '';
if($_SESSION['python'] > $_SESSION['hardware'] and $_SESSION['python'] > $_SESSION['java'])
  $c_domain = $c_domain. 'python';
if ($_SESSION['hardware'] > $_SESSION['python'] and $_SESSION['hardware'] > $_SESSION['java']) 
  $c_domain = $c_domain . 'hardware';
if ($_SESSION['java'] > $_SESSION['python'] and $_SESSION['java'] > $_SESSION['hardware']) 
  $c_domain = $c_domain . 'java';


$_SESSION['l_uname'] = $c_uname;
$_SESSION['l_pwd'] = $c_pwd;
$_SESSION['user'] = 'Student';

if(!$con)
{
  echo  "Error connecting to database";
}

//$sql = "INSERT INTO `StudentInd`(`name`, `uname`, `email`, `department`, `resume`, `password`, `domain`) VALUES ('$c_name','$c_uname','$c_email','$c_dept','$c_pwd','$resume')";

 $sql = "insert into Student (name, uname, email, department, resume, password, domain) values ('$c_name','$c_uname','$c_email','$c_dept','$resume', '$c_pwd','$c_domain')";

//echo $sql;

$result = mysqli_query($con,$sql);
if(!$result)
{
  echo "error";
  echo mysqli_error();
 
}
else
{
 // echo "<br/>Thanks for Registration";
	header("Location:Student_home.php");
}

}






//----------------------------Login-------------------------------------------

if(isset($_POST['login_db']))
{
  //echo "login in success </br>";
$user=$_POST['user'];
//$cname=$_POST['cname'];
$l_uname=$_POST['l_uname'];
$l_pwd=$_POST['l_pwd'];

$_SESSION['l_uname'] = $l_uname;
$_SESSION['l_pwd'] = $l_pwd;
$_SESSION['user'] = $user;


if(!$con)
{
  echo  "Error connecting to database";
}

if($user == 'institute_admin')
{
	if($l_uname == 'admin' and $l_pwd == 'admin')
		header("Location:Admin_home.php");
}

//echo $user.' '. $l_uname.' '. $l_pwd.' ';


//$sql="select * from $user where uname='$l_uname' and password='$l_pwd'";

//$sql="select * from Industry where uname='$l_uname' and password='$l_pwd' ";

//echo $sql;
$sql="select * from $user where uname='$l_uname' and password='$l_pwd'";
//echo $sql;
$result = mysqli_query($con,$sql);
$rows= mysqli_num_rows($result);
//echo $rows;
if($rows==1 and $user=='Industry')
{
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
      $r[]=$row;
    }
    $_SESSION['cname'] = $r[0]['cname'];

  //echo "welcome</br>".$l_uname;
  header("Location:Industry_home.php");
}
elseif($rows==1 and $user=='Student')
{
  header("Location:Student_home.php");
}

else{
  echo "invalid username/password";
}
}

/* close connection */
mysqli_close($conn);
?>
