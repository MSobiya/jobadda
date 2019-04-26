<html>
<body>
<head><center><h1> PYTHON QUESTION</h1></center></head>
<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>

<?php
session_start();
if(count($_SESSION) == 0)
  header("Location:index.php");
$title = "Quiz Results";
echo "<title>$title</title>";
if (isset ($_POST['cmdSubmit'])) {
  $name = $_POST['answer'];

  $q1 =  $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 =  $_POST['q3'];
  $q4 =  $_POST['q4'];
  $q5 =  $_POST['q5'];
  $q6 =  $_POST['q6'];
  $q7 =  $_POST['q7'];
  $q8 =  $_POST['q8']; 
  $q9 =  $_POST['q9'];
  $q10 =  $_POST['q10']; 
  $name11 = $_POST['answer2'];
  $name12 = $_POST['answer3'];
  $q13 =  $_POST['q13'];
  $q14 = $_POST['q14'];
  $q15 =  $_POST['q15'];
  $q16 =  $_POST['q16'];
  $q17 =  $_POST['q17'];
  $q18 =  $_POST['q18'];
  $q19 =  $_POST['q19'];
  $q20 =  $_POST['q20']; 
  $q21 =  $_POST['q21'];
  $q22 =  $_POST['q22'];
  $q23 =  $_POST['q23'];
  $q24 =  $_POST['q24'];
  $name25= $_POST['answer4'];

}
$score = 0;

//condition statement for scoring:
//$question is the question that is answered item will appear
// the only answered 
	if ($name == "growth" or $name == "Growth" or $name == "GROWTH") {
	 	$question = "A continous and additive process and simplifies quantitative changes. &nbsp;&nbsp;&nbsp; ";
		 $ans = "<p>correct</p>"; 
		 //if the answer is growth then the answer is correct, score is added.
	 	$score = 1;}
	 else { $ans = "<p>incorrect</p>"; 
	 	$question = "A continous and additive process and simplifies quantitative changes. &nbsp;&nbsp;&nbsp; ";
		$score = 0;} 
	//  elseif ($name == ""){ $ans = "";
	//  	$question = "";
	//   	$score = 0;
	// }
	
	
	if ($q1 == "Class") {
	  	$ans1 =  "<p>correct</p>";
	  	$question1 ="Which of these in not a core data type? &nbsp;&nbsp;&nbsp; ";
		$score1 = 1;}
	 else { $ans1 ="<p>incorrect</p>"; 
	  	$question1 ="Which of these in not a core data type? &nbsp;&nbsp;&nbsp; ";
	 	$score1 = 0;}
	 // elseif ($q1 == "C) try, virtual, throw, final, volatile, transien"){ $ans1 = "<p>incorrect</p>";
	 //   	$question1 ="Which 1 of these lists contains only Java programming language keywords? &nbsp;&nbsp;&nbsp; "; 
	 // 	$score1 = 0;}
	 // elseif ($q1 == ""){ $ans1 = ""; 
	 //   	$score1 = 0;
	// }
	
	
	if ($q2 == "he") {
		$ans2 =  "<p>correct</p>";
		$question2 = "Following set of commands are executed in shell, what will be the output?   &nbsp;&nbsp;&nbsp; ";
	 	$score2 =1;}
	 else { $ans2 = "<p>incorrect</p>";
	 	$question2 = "Following set of commands are executed in shell, what will be the output?   &nbsp;&nbsp;&nbsp; ";
	 	$score2 =0; }
	 // elseif ($q2 == "PnP"){ $ans2 = "<p>incorrect</p>";
	 //  	$question2 = "Which will legally declare, construct, and initialize an array? &nbsp;&nbsp;&nbsp; ";
	 // 	$score2 =0; }
	 // elseif ($q2 == ""){ $ans2 = "";
	 //  	$question2 = "";
	 //  	$score2=0; 
	// }
	
	
	if ($q3 == "indentation Error") {
		$ans3 =  "<p>correct</p>";
		$question3 = "Carefully observe the code and give the answer. &nbsp;&nbsp;&nbsp; "; 
		$score3 = 1;}
	 else { $ans3 = "<p>incorrect</p>";
	 	$question3 = "Carefully observe the code and give the answer. &nbsp;&nbsp;&nbsp; "; 
	 	$score3 = 0; }
	 // elseif ($q3 == "CPU"){ $ans3 = "<p>incorrect</p>"; 
	 //   	$question3 = "which is a reserved word in the Java programming language? &nbsp;&nbsp;&nbsp; "; 
	 // 	$score3 = 0; }
	 // elseif ($q3 == "RAM"){ $ans3 = "<p>incorrect</p>"; 
	 //   	$question3 = "which is a reserved word in the Java programming language? &nbsp;&nbsp;&nbsp; "; 
	 // 	$score3 = 0; }
	 // elseif ($q3 == ""){ $ans3 = "";
	 //   	$question3 = ""; 
		// $score3 = 0;
	// }
	
	
	if ($q4 == "list") {
		  $ans4 =  "<p>correct</p>";
		  $question4 ="What data type is the object below L = [1, 23, ‘hello’, 1].  &nbsp;&nbsp;&nbsp; ";
		  $score4 = 1;}
		else { $ans4 = "<p>incorrect</p>";  
			$question4 ="What data type is the object below L = [1, 23, ‘hello’, 1].  &nbsp;&nbsp;&nbsp; ";
			$score4 = 0;}
		// elseif ($q4 == "SOFTCOPY"){ $ans4 = "<p>incorrect</p>"; 
		// 	$question4 ="Which is a valid keyword in java? &nbsp;&nbsp;&nbsp; "; 
		// 	$score4 = 0;}
		// elseif ($q4 == "PHOTOCOPY"){ $ans4 = "<p>incorrect</p>";  
		// 	 $question4 ="Which is a valid keyword in java? &nbsp;&nbsp;&nbsp; ";
		// 	 $score4 = 0;}
	 //  elseif ($q4 == ""){ $ans4 = "";
		// 	$score5 = 0;
	// }
	
	if ($q5 == "int") {
		$ans5 =  "<p>correct</p>";
		$question5 = "What is the return value of trunc() ? &nbsp;&nbsp;&nbsp; ";
	 	$score5 =1;}
	 else { $ans5 = "<p>incorrect</p>";
	 	$question5 = "What is the return value of trunc() ? &nbsp;&nbsp;&nbsp; ";
	 	$score5 =0; }
	 // elseif ($q5 == "byte"){ $ans5 ="<p>incorrect</p>" ;
	 //  	$question5 = "Which one of the following will declare an array and initialize it with five numbers? &nbsp;&nbsp;&nbsp; ";
	 // 	$score5 =0; }
	 // elseif ($q5 == ""){ $ans5 = "";
	 //  	$question5 = "";
	 //  	$score5 =0; 
	// }
	
	if ($q6 == "[‘ab’, ‘cd’].") {
		$ans6 = "<p>correct</p>";
		$question6 = "What is the output of the following? x = [ab, cd] for i in x:    i.upper() print(x) &nbsp;&nbsp;&nbsp; ";
	 	$score6 =1;}
	 else { $ans6 = "<p>incorrect</p>";
	 	$question6 = "What is the output of the following? x = [ab, cd] for i in x:    i.upper() print(x) &nbsp;&nbsp;&nbsp; ";
	 	$score6 =0; }
	 // elseif ($q6 == "OS/2"){ $ans6 = "<p>incorrect</p>";
	 //  	$question6 = "Which is the valid declarations within an interface definition? &nbsp;&nbsp;&nbsp; ";
	 // 	$score6 =0; }
	 // elseif ($q6 == ""){ $ans6 = "";
	 //  	$question6 = "";
	 //  	$score6 =0; 
	// }
	
		if ($q7 == "error") {
		$ans7 =  "<p>correct</p>";
		$question7 = "What is the output of the following? i = 1 while True:     if i%3 == 0:         break     print(i)     i + = 1  &nbsp;&nbsp;&nbsp; ";
	 	$score7 =1;}
	 else { $ans7 = "<p>incorrect</p>";
	 	$question7 = "What is the output of the following? i = 1 while True:     if i%3 == 0:         break     print(i)     i + = 1  &nbsp;&nbsp;&nbsp; ";
	 	$score7 =0; }
	 // elseif ($q7 == "Linux"){ $ans7 = "<p>incorrect</p>";
	 //  	$question7 = "The first operating system used by IBM computers. &nbsp;&nbsp;&nbsp; ";
	 // 	$score7 =0; }
	 // elseif ($q7 == ""){ $ans7 = "";
	 //  	$question7 = "";
	 //  	$score7 =0; 
	// }
	
	if ($q8 == "(1, 2, 3)") {
		$ans8 = "<p>correct</p>";
		$question8 = "What is the output of the following? i = 1 while True:     if i%7 == 0:       break    print(i)     i += 1 &nbsp;&nbsp;&nbsp;";
	 	$score8 =1;}
	 else { $ans8 = "<p>incorrect</p>";;
	 	$question8 = "What is the output of the following? i = 1 while True:     if i%7 == 0:       break    print(i)     i += 1 &nbsp;&nbsp;&nbsp; ";
	 	$score8 =0; }
	 // elseif ($q8 == "Shell and Kernel"){ $ans8 = "<p>incorrect</p>";
	 //  	$question8 = "It is a component of operating system that exposes function to user and applications. &nbsp;&nbsp;&nbsp; ";
	 // 	$score8 =0; }
	 // elseif ($q8 == ""){ $ans8 = "";
	 //  	$question8 = "";
	 //  	$score8 =0; 
	// }
	
	if ($q9 == "(2, 4)") {
		$ans9 =  "<p>correct</p>";
		$question9 = "What will be the output? 1.	>>>t=(1,2,4,3) 2.	>>>t[1:3] &nbsp;&nbsp;&nbsp; ";
	 	$score9 =1;}
	 else { $ans9 = "<p>incorrect</p>";
	 	$question9 = "What will be the output? 1.	>>>t=(1,2,4,3) 2.	>>>t[1:3] &nbsp;&nbsp;&nbsp; ";
	 	$score9 =0; }
	 // elseif ($q9 == "Windows Help"){ $ans9 = "<p>incorrect</p>";
	 //  	$question9 = "It is a primary graphical interface to operating system. &nbsp;&nbsp;&nbsp; ";
	 // 	$score9 =0; }
	 // elseif ($q9 == ""){ $ans9 = "";
	 //  	$question9 = "";
	 //  	$score9 =0; 
	// }
	
	if ($q10 == "(2, 4)") {
		$ans10 = "<p>correct</p>";
		$question10 = "What will be the output? 1.	>>>t=(1,2,4,3) 2.	>>>t[1:-1] &nbsp;&nbsp;&nbsp; ";
	 	$score10 =1;}
	 else { $ans10 = "<p>incorrect</p>";
	 	$question10 = "What will be the output? 1.	>>>t=(1,2,4,3) 2.	>>>t[1:-1] &nbsp;&nbsp;&nbsp; ";
	 	$score10 =0; }
	 // elseif ($q10 == "Application Software"){ $ans10 ="<p>incorrect</p>";
	 //  	$question10 = "Most important electrical component of computer is: &nbsp;&nbsp;&nbsp; ";
	 // 	$score10 =0; }
	 // elseif ($q10 == ""){ $ans10 = "";
	 //  	$question10 = "";
	 //  	$score10 =0; 
	// }
	
	if ($name11 == "monitor" or $name11 == "Monitor" or $name11 == "MONITOR") {
	 	$question11 = "It visually displays primary-output of computer. &nbsp;&nbsp;&nbsp; ";
		 $ans11 = "<p>correct</p>";
	 	$score11 = 1;}
	 else { $ans11 = "<p>incorrect</p>"; 
	 	$question11 = "It visually displays primary-output of computer. &nbsp;&nbsp;&nbsp; ";
		$score11 = 0;} 
	 // elseif ($name11 == ""){ $ans11 = "";
	 // 	$question11 = "";
	 //  	$score11 = 0;
	// }
	
	if ($name12 == "Transmission Control Protocol" or $name12 == "transmission control protocol" or $name12 == "TRANSMISSION CONTROL PROTOCOL") {
	 	$question12 = "What does TCP stands for? &nbsp;&nbsp;&nbsp; ";
		 $ans12 =  "<p>correct</p>";
	 	$score12 = 1;}
	 else { $ans12 = "<p>incorrect</p>"; 
	 	$question12 = "What does TCP stands for? &nbsp;&nbsp;&nbsp; ";
		$score12 = 0;} 
	 // elseif ($name12 == ""){ $ans12 = "";
	 // 	$question12 = "";
	 //  	$score12 = 0;
	// }
	
	if ($q13 == "abc") {
		$ans13 =  "<p>correct</p>";
		$question13 = "What is the output when following statement is executed ?    &nbsp;&nbsp;&nbsp; ";
	 	$score13 =1;}
	 else { $ans13 = "<p>incorrect</p>";
	 	$question13 = "What is the output when following statement is executed ?    &nbsp;&nbsp;&nbsp; ";
	 	$score13 =0; }
	 // elseif ($q13 == "System Information"){ $ans13 ="<p>incorrect</p>";
	 //  	$question13 = "It provides a way to perform task without a mouse. &nbsp;&nbsp;&nbsp; ";
	 // 	$score13 =0; }
	 // elseif ($q13 == ""){ $ans13 = "";
	 //  	$question13 = "";
	 //  	$score13 =0; 
	// }
		if ($q14 == "_") {
		$ans14 =  "<p>correct</p>";
		$question14 = "What arithmetic operators cannot be used with strings ?&nbsp;&nbsp;&nbsp; ";
	 	$score14 =1;}
	 else { $ans14 ="<p>incorrect</p>";
	 	$question14 = "What arithmetic operators cannot be used with strings ?&nbsp;&nbsp;&nbsp; ";
	 	$score14 =0; }
	 // elseif ($q14 == "Windows NT"){ $ans14 = "<p>incorrect</p>";
	 //  	$question14 = "Refers to Windows 95, Windows 98, Windows Me and designed to bridge legacy and newer technologies. &nbsp;&nbsp;&nbsp; ";
	 // 	$score14 =0; }
	 // elseif ($q14 == ""){ $ans14 = "";
	 //  	$question14 = "";
	 //  	$score14 =0; 
	// }
	if ($q15== "[1, 3, 2, 1, 3, 2]") {
		$ans15 =  "<p>correct</p>";
		$question15 = "Suppose list1 is [1, 3, 2], What is list1 * 2 ? &nbsp;&nbsp;&nbsp; ";
	 	$score15 =1;}

	 else { $ans15 = "<p>incorrect</p>";
	 	$question15 = "Suppose list1 is [1, 3, 2], What is list1 * 2 ? &nbsp;&nbsp;&nbsp; ";
	 	$score15 =0; }
	 // elseif ($q15 == "Middle Horn"){ $ans15 ="<p>incorrect</p>";
	 //  	$question15 = "Refers to Windows 95, Windows 98, Windows Me and designed to bridge legacy and newer technologies. &nbsp;&nbsp;&nbsp; ";
	 // 	$score15 =0; }
	 // elseif ($q15 == ""){ $ans15 = "";
	 //  	$question15 = "";
	 //  	$score15 =0; 
	// }
	if ($q16== "False") {
		$ans16 = "<p>correct</p>";
		$question16 = "What is the output when following code is executed ? 1.	>>>list1 = [11, 2, 23] 2.	>>>list2 = [11, 2, 2] 3.	>>>list1 < list2 is &nbsp;&nbsp;&nbsp; ";
	 	$score16 =1;}
	 else { $ans16 = "<p>incorrect</p>";
	 	$question16 = "What is the output when following code is executed ? 1.	>>>list1 = [11, 2, 23] 2.	>>>list2 = [11, 2, 2] 3.	>>>list1 < list2 is &nbsp;&nbsp;&nbsp; ";
	 	$score16 =0; }
	 // elseif ($q16 == "RIMM"){ $ans16 = "<p>incorrect</p>";
	 //  	$question16 = "Device providing temporary storage. &nbsp;&nbsp;&nbsp; ";
	 // 	$score16=0; }
	 // elseif ($q16 == ""){ $ans16 = "";
	 //  	$question16 = "";
	 //  	$score16 =0; 
	// }
	
	if ($q17== "D)	default access") {
		$ans17 =  "<p>correct</p>";
		$question17 = "You want a class to have access to members of another class in the same package. Which is the most restrictive access that accomplishes this objective?   &nbsp;&nbsp;&nbsp; ";
	 	$score17 =1;}
	 else { $ans17 = "<p>incorrect</p>";
	 	$question17 = "You want a class to have access to members of another class in the same package. Which is the most restrictive access that accomplishes this objective?  &nbsp;&nbsp;&nbsp; ";
	 	$score17 =0; }
	 // elseif ($q17 == "keyboard"){ $ans17 = "<p>incorrect</p>";
	 //  	$question17 = "An access point located in back or front of case.  &nbsp;&nbsp;&nbsp; ";
	 // 	$score17=0; }
	 // elseif ($q17 == ""){ $ans17 = "";
	 //  	$question17 = "";
	 //  	$score17 =0; 
	// }	

	if ($q18== "list1.insert(3, 5)") {
		$ans18 =  "<p>correct</p>";
		$question18 = "To insert 5 to the third position in list1, we use which command ? &nbsp;&nbsp;&nbsp; ";
	 	$score18 =1;}
	 else { $ans18 = "<p>incorrect</p>";
	 	$question18 = "To insert 5 to the third position in list1, we use which command ?  &nbsp;&nbsp;&nbsp; ";
	 	$score18 =0; }
	 // elseif ($q18 == "1 Billion cycle/second"){ $ans18 = "<p>incorrect</p>";
	 //  	$question18 = "One MegaHertz is equivalent to?  &nbsp;&nbsp;&nbsp; ";
	 // 	$score18=0; }
	 // elseif ($q18 == ""){ $ans18 = "";
	 //  	$question18 = "";
	 //  	$score18 =0; 
	// }

	if ($q19== "All of the mentioned") {
		$ans19 =  "<p>correct</p>";
		$question19 = "Which are the advantages of functions in python? .  &nbsp;&nbsp;&nbsp; ";
	 	$score19 =1;}
	 else { $ans19 ="<p>incorrect</p>";
	 	$question19 = "Which are the advantages of functions in python? .  &nbsp;&nbsp;&nbsp; ";
	 	$score19 =0; }
	 // elseif ($q19 == "167 MHz to 4 GHz"){ $ans19 = "<p>incorrect</p>";
	 //  	$question19 = "What is the range of CPU speed?  &nbsp;&nbsp;&nbsp; ";
	 // 	$score19=0; }
	 // elseif ($q19 == ""){ $ans19 = "";
	 //  	$question19 = "";
	 //  	$score19 =0; 
	// }

	if ($q20== "Built-in function & User defined function") {
		$ans20 =  "<p>correct</p>";
		$question20 = "What are the two main types of functions? &nbsp;&nbsp;&nbsp; ";
	 	$score20 =1;}
	 else { $ans20 = "<p>incorrect</p>";
	 	$question20 = "What are the two main types of functions?  &nbsp;&nbsp;&nbsp; ";
	 	$score20 =0; }
	 // elseif ($q20 == "Computer"){ $ans20 = "<p>incorrect</p>";
	 //  	$question20 = "It enables secondary storage device to interface with the motherboard.  &nbsp;&nbsp;&nbsp; ";
	 // 	$score20=0; }
	 // elseif ($q20 == ""){ $ans20 = "";
	 //  	$question20 = "";
	 //  	$score20 =0; 
	// }
	
	if ($q21== "All of the mentioned") {
		$ans21 = "<p>correct</p>";
		$question21 = "Where is function defined?  &nbsp;&nbsp;&nbsp; ";
	 	$score21 =1;}
	 else { $ans21 ="<p>incorrect</p>";
	 	$question21 = "Where is function defined?  &nbsp;&nbsp;&nbsp; ";
	 	$score21 =0; }
	 // elseif ($q21 == "HARDCOPY"){ $ans21 = "<p>incorrect</p>";
	 //  	$question21 = "An output which can be seen in the screen.  &nbsp;&nbsp;&nbsp; ";
	 // 	$score21=0; }
	 // elseif ($q21 == "PHOTOCOPY"){ $ans21 = "<p>incorrect</p>";
	 //  	$question21 = "An output which can be seen in the screen.  &nbsp;&nbsp;&nbsp; ";
	 // 	$score21=0; }
	 // elseif ($q21 == ""){ $ans21 = "";
	 //  	$question21 = "";
	 //  	$score21 =0; 
	// }	

	if ($q22== "BIT") {
		$ans22 = "<p>correct</p>";
		$question22 = "Smallest unit of data in a computer system.  &nbsp;&nbsp;&nbsp; ";
	 	$score22 =1;}
	 else { $ans22 = "<p>incorrect</p>";
	 	$question22 = "Smallest unit of data in a computer system.  &nbsp;&nbsp;&nbsp; ";
	 	$score22 =0; }
	 // elseif ($q22 == "KILOBYTE"){ $ans22 = "<p>incorrect</p>";
	 //  	$question22 = "Smallest unit of data in a computer system.  &nbsp;&nbsp;&nbsp; ";
	 // 	$score22=0; }
	 // elseif ($q22 == "MEGABYTE"){ $ans22 ="<p>incorrect</p>";
	 //  	$question22 = "Smallest unit of data in a computer system.  &nbsp;&nbsp;&nbsp; ";
	 // 	$score22=0; }
	 // elseif ($q22 == ""){ $ans22 = "";
	 //  	$question22 = "";
	 //  	$score22 =0; 
	// }

	if ($q23== "RAM") {
		$ans23 =  "<p>correct</p>";
		$question23 = "Part of main memory where it stores data temporarirly.  &nbsp;&nbsp;&nbsp; ";
	 	$score23 =1;}
	 else { $ans23 = "<p>incorrect</p>";
	 	$question23 = "Part of main memory where it stores data temporarirly.  &nbsp;&nbsp;&nbsp; ";
	 	$score23 =0; }
	 // elseif ($q23 == "FLOPPY DISK"){ $ans23 = "<p>incorrect</p>";
	 //  	$question23 = "Part of main memory where it stores data temporarirly.  &nbsp;&nbsp;&nbsp; ";
	 // 	$score23=0; }
	 // elseif ($q23 == "HARD DISK"){ $ans23 = "<p>incorrect</p>";
	 //  	$question23 = "Part of main memory where it stores data temporarirly.  &nbsp;&nbsp;&nbsp; ";
	 // 	$score23=0; }
	 // elseif ($q23 == ""){ $ans23 = "";
	 //  	$question23 = "";
	 //  	$score23 =0; 
	// }

	if ($q24== "System Software") {
		$ans24 =  "<p>correct</p>";
		$question24 = "Software designed for hardware related task.  &nbsp;&nbsp;&nbsp; ";
	 	$score24 =1;}
	 else { $ans24 ="<p>incorrect</p>";
	 	$question24 = "Software designed for hardware related task.  &nbsp;&nbsp;&nbsp; ";
	 	$score24 =0; }
	 // elseif ($q24 == "Application Software"){ $ans24 = "<p>incorrect</p>";
	 //  	$question24 = "Software designed for hardware related task.  &nbsp;&nbsp;&nbsp; ";
	 // 	$score24=0; }
	 // elseif ($q24 == "Hardware"){ $ans24 = "<p>incorrect</p>";
	 //  	$question24 = "Software designed for hardware related task.  &nbsp;&nbsp;&nbsp; ";
	 // 	$score24=0; }
	 // elseif ($q24 == ""){ $ans24 = "";
	 //  	$question24 = "";
	 //  	$score24 =0; 
	// }
	
	if ($name25 == "chipset" or $name25 == "Chipset" or $name25 == "CHIPSET" or $name25 == "chipsets" or $name25 == "Chipsets" or $name25 == "CHIPSETS") {
	 	$question25 = "A continous and additive process and simplifies quantitative changes. &nbsp;&nbsp;&nbsp; ";
		 $ans25 = "<p>correct</p>";
	 	$score25 = 1;}
	 else { $ans25 = "<p>incorrect</p>"; 
	 	$question25 = "A continous and additive process and simplifies quantitative changes. &nbsp;&nbsp;&nbsp; ";
		$score25 = 0;} 
	 // elseif ($name25 == ""){ $ans25 = "";
	 // 	$question25 = "";
	 //  	$score25 = 0;
	// }
// code to generate the total score..... n_n
		$total = $score + $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10 + $score11 + $score12 + $score13 + $score14 + $score15 + $score16 + $score17  + $score18 + $score19 + $score20 + $score21  + $score22 + $score23 + $score24  + $score25;
{

echo<<<EOT
<p> <br><table  width = "75%"  border="0" align ="default">
		<tr>
			<td>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td><table border="0" align ="default">
				<tr>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td><font face = "georgia" size ="4" color= "blue"><u><b>QUESTION</b></u></font></td>
					<td width = "230"><font face = "georgia" size ="4" color= "blue"><b><u>Your answers are: </u></b></font></td>
					<td><font face = "georgia" size ="4" color= "blue"><b><u>Results</u></b></font></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td><font face ="georgia" size ="3">$question</font> </td>
					<td><b>$name</b> </td>
					<td align ="center"> <font face ="georgia" size ="6" color= "green"><b>$ans</b></font></td>
				</tr>
				<tr>
					<td><font face ="georgia" size ="3">$question1</font> </td>
					<td><b>$q1 </b></td>
					<td align ="center">  <font face ="georgia" size ="6" color= "green"><b>$ans1</b></font></td>
				</tr>
				<tr>
					<td><font face ="georgia" size ="3">$question2</font> </td>
					<td><b>$q2 </b> </td>
					<td align ="center">     <font face ="georgia" size ="6" color= "green"><b>$ans2</b></font></td>
				</tr>
				<tr>
					<td><font face ="georgia" size ="3">$question3</font> </td>
					<td><b>$q3 </b> </td>
					<td align ="center">  <font face ="georgia" size ="6" color= "green"><b>$ans3</b></font></td>
				</tr>
				<tr>
					<td><font face ="georgia" size ="3">$question4</font> </td>
					<td><b>$q4 </b> </td>
					<td align ="center">   <font face ="georgia" size ="6" color= "green"><b>$ans4</b></font></td>
				</tr>
				<tr>
					<td><font face ="georgia" size ="3">$question5</font> </td>
					<td><b>$q5 </b> </td>
					<td align ="center">   <font face ="georgia" size ="6" color= "green"><b>$ans5</b></font></td>
				</tr>
				<tr>
					<td> <font face ="georgia" size ="3">$question6</font> </td>
					<td><b>$q6 </b> </td>
					<td align ="center">   <font face ="georgia" size ="6" color= "green"><b>$ans6</b></font></td>
				</tr>
				<tr>
					<td> <font face ="georgia" size ="3">$question7</font> </td>
					<td><b>$q7 </b> </td>
					<td align ="center">   <font face ="georgia" size ="6" color= "green"><b>$ans7</b></font></td>
				</tr>
				<tr>
					<td> <font face ="georgia">$question8</font> </td>
					<td><b>$q8 </b> </td>
					<td align ="center">   <font face ="georgia" size ="6" color= "green"><b>$ans8</b></font></td>
				</tr>
				<tr>
					<td> <font face ="georgia" size ="3">$question9</font> </td>
					<td><b>$q9 </b> </td>
					<td align ="center">   <font face ="georgia" size ="6" color= "green"><b>$ans9</b></font></td>
				</tr>
				<tr>
					<td> <font face ="georgia">$question10</font> </td>
					<td><b>$q10 </b> </td>
					<td align ="center">   <font face ="georgia" size ="6" color= "green"><b>$ans10</b></font></td>
				</tr>
				<tr>
					<td> <font face ="georgia">$question11</font> </td>
					<td><b>$name11 </b> </td>
					<td align ="center">   <font face ="georgia" size ="6" color= "green"><b>$ans11</b></font></td>
				</tr>
				<tr>
					<td> <font face ="georgia">$question12</font> </td>
					<td><b>$name12 </b> </td>
					<td align ="center">   <font face ="georgia" size ="6" color= "green"><b>$ans12</b></font></td>
				</tr>
				
				<tr>
					<td><font face ="georgia" size ="3">$question13</font> </td>
					<td><b>$q13 </b></td>
					<td align ="center">  <font face ="georgia" size ="6" color= "green"><b>$ans13</b></font></td>
				</tr>
				<tr>
					<td><font face ="georgia" size ="3">$question14</font> </td>
					<td><b>$q14 </b> </td>
					<td align ="center">     <font face ="georgia" size ="6" color= "green"><b>$ans14</b></font></td>
				</tr>
				<tr>
					<td><font face ="georgia" size ="3">$question15</font> </td>
					<td><b>$q15 </b> </td>
					<td align ="center">  <font face ="georgia" size ="6" color= "green"><b>$ans15</b></font></td>
				</tr>
				<tr>
					<td><font face ="georgia" size ="3">$question16</font> </td>
					<td><b>$q16 </b> </td>
					<td align ="center">   <font face ="georgia" size ="6" color= "green"><b>$ans16</b></font></td>
				</tr>
				<tr>
					<td><font face ="georgia" size ="3">$question17</font> </td>
					<td><b>$q17</b> </td>
					<td align ="center">   <font face ="georgia" size ="6" color= "green"><b>$ans17</b></font></td>
				</tr>
				<tr>
					<td> <font face ="georgia" size ="3">$question18</font> </td>
					<td><b>$q18</b> </td>
					<td align ="center">   <font face ="georgia" size ="6" color= "green"><b>$ans18</b></font></td>
				</tr>
				<tr>
					<td> <font face ="georgia" size ="3">$question19</font> </td>
					<td><b>$q19</b> </td>
					<td align ="center">   <font face ="georgia" size ="6" color= "green"><b>$ans19</b></font></td>
				</tr>
				<tr>
					<td> <font face ="georgia">$question20</font> </td>
					<td><b>$q20</b> </td>
					<td align ="center">   <font face ="georgia" size ="6" color= "green"><b>$ans20</b></font></td>
				</tr>
				<tr>
					<td> <font face ="georgia" size ="3">$question21</font> </td>
					<td><b>$q21 </b> </td>
					<td align ="center">   <font face ="georgia" size ="6" color= "green"><b>$ans21</b></font></td>
				</tr>
				<tr>
					<td> <font face ="georgia">$question22</font> </td>
					<td><b>$q22 </b> </td>
					<td align ="center">   <font face ="georgia" size ="6" color= "green"><b>$ans22</b></font></td>
				</tr>
				<tr>
					<td> <font face ="georgia">$question23</font> </td>
					<td><b>$q23 </b> </td>
					<td align ="center">   <font face ="georgia" size ="6" color= "green"><b>$ans23</b></font></td>
				</tr>
				<tr>
					<td> <font face ="georgia">$question24</font> </td>
					<td><b>$q24 </b> </td>
					<td align ="center">   <font face ="georgia" size ="6" color= "green"><b>$ans24</b></font></td>
				</tr>
				<tr>
					<td> <font face ="georgia">$question25</font> </td>
					<td><b>$name25 </b> </td>
					<td align ="center">   <font face ="georgia" size ="6" color= "green"><b>$ans25</b></font></td>
				</tr>
				<tr><td>&nbsp;&nbsp;&nbsp;</td></tr>
				<tr><td>&nbsp;&nbsp;&nbsp;</td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr  ><td  colspan ="3" align ="center" ><font face = "georgia" size ="4" color= "blue"><b>Your score is:  $total</b></font></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
			</table>
		</td>
	</tr>
</table>
<li><a href="hardware_quiz.php">Next</a></li>
EOT;
$_SESSION['python'] = $total;
}

?>
</body>
</html>
