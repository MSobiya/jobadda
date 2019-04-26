<?php

/*$my_file = "file.txt";
$handle = fopen($my_file, "w") or die('Cannot open file:  '.$my_file);
$data = 'MS';
fwrite($handle, $data);
fclose($handle);
*/

//echo "sobi";
if(isset($_POST['resume_db'])){

/*$res = "resume.txt";
$handle = fopen($res, "w") or die('Cannot open file:  '.$res);*/


$r_name1=$_POST['r_name'];
$r_name = "Name : ".$r_name1."\n";

$r_head1=$_POST['r_head'];
$r_head = "Headline : ".$r_head."\n";



$basic = "\n\nBasic Information\n";

$r_loc1=$_POST['r_loc'];
$r_loc = "Location : ".$r_loc."\n";

$r_web1=$_POST['r_web'];
$r_web = "Website : ".$r_web."\n";

$r_sal1=$_POST['r_sal'];
$r_sal = "Salary Per Hour : ".$r_sal."\n";

$r_age1=$_POST['r_age'];
$r_age = "Age : ".$r_age."\n";

$r_phn1=$_POST['r_phn'];
$r_phn = "Contact Number : ".$r_phone."\n";

$r_mail1=$_POST['r_mail'];
$r_mail = "Email Address : ".$r_mail."\n";



$social = "\n\nSocial Media\n";
$r_fb1=$_POST['r_fb'];
$r_fb = "Facebook URL : ".$r_fb."\n";

$r_tw1=$_POST['r_tw'];
$r_tw = "Twitter URL : ".$r_tw."\n";

$r_g1=$_POST['r_g'];
$r_g = "Google URL : ".$r_g."\n";

$r_git1=$_POST['r_git'];
$r_git = "GitHub URL : ".$r_git."\n";


$edu= "\n\nEducation Details:\n";
$r_deg1 =$_POST['r_deg'];
$r_deg = "Degree : ".$r_deg."\n";

$r_maj1 =$_POST['r_maj'];
$r_maj = "Major : ".$r_maj."\n";

$r_ins1 =$_POST['r_ins'];
$r_ins = "Institute : ".$r_ins."\n";

$r_doa1 =$_POST['r_doa'];
$r_doa = "Year Of Addmission : ".$r_doa."\n";

$r_dol1 =$_POST['r_dol'];
$r_dol = "Date of Leave : ".$r_dol."\n";




$work = "\n\nWork Experience Deatils\n";

$r_cmp1 =$_POST['r_cmp'];
$r_cmp = "Company name : ".$r_cmp."\n";

$r_pos1 =$_POST['r_pos'];
$r_pos = "Possition : ".$r_pos."\n";

$r_doaC1 =$_POST['r_doaC'];
$r_doaC = "Date Of Joining : ".$r_doaC."\n";

$r_dolC1 =$_POST['r_dolC'];
$r_dolC = "Date Of Resining : ".$r_dolC."\n";


$skills = "\n\nExpert Area/Skills\n";
$r_exp1 =$_POST['r_exp'];
$r_exp = "Expert Area/Skills : ".$r_exp."\n";



/*$data = $r_name.$r_head.$basic.$r_loc.$r_web.$r_sal.$r_age.$r_phn.$r_mail.$social.$r_fb.$r_tw.$r_g.$r_git.$edu.$r_deg.$r_maj.$r_ins.$r_doa.$r_dol.$work.$r_cmp.$r_pos.$r_doaC.$r_dolC;


fwrite($handle, $data);
fclose($handle);*/

$con = mysqli_connect("localhost","root","root","JOBADDA");
/*$sql ="update candidate set resume='/job/resume.txt' where name='$r_name1'";

$result = mysqli_query($con,$sql);

if(!$result)
{
  echo "error ";
}
else
{
  echo "<br/>Resume";

}

*/

$sql = "insert into resume values ('$r_name1','$r_name1','$r_head1','$r_loc1','$r_web1','$r_sal1','$r_age1','$r_phn1','$r_mail1','$r_fb1','$r_tw1','$r_g1','$r_git1','$r_deg1','$r_maj1','$r_ins1','$r_doa1','$r_dol1','$r_cmp1','$r_pos1','$r_doaC1','$r_dolC1','$r_exp1')";

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