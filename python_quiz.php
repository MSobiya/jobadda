<html>
<body>
<head><center><h1> PYTHON QUIZ RESULT</h1></center></head>
<form action="python_result.php" method="post">
<?php
if (isset($_POST['cmdSubmit'])) {

}
$n = 20; // this is the declaration of the total item on your quiz and array is used as a sttorage of 	          //the question in order to display it in random
$links=array('Which of these in not a core data type?<br><br> &nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q1" value="Lists"> Lists<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q1" value="Class"> Class<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q1" value="Tuples"> Tuples</p>', 
               
			    'Following set of commands are executed in shell, what will be the output? 1.	>>>str="hello" 2.	>>>str[:2]  <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q2" value="he">he<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q2" value="C) int myList [] [] = {4,9,7,0};">lo<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q2" value="D) int myList [] = {4, 3, 7};">hello</p>',
               
			    'Carefully observe the code and give the answer. 1.	def example(a): 2.	    a = a + 2 3.	     a = a*2 4.	    return a 5.	>>>example("hello") <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q3" value="A) Method"> cannot perform mathematical operation on strings<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q3" value="indentation Error">indentation Error<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q3" value="C) subclasses">  hello2<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q3" value="D) reference"> D)  hello2hello2</p>', 
              
			    'What data type is the object below L = [1, 23, ‘hello’, 1]. <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q4" value="A) Interface"> A) array<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q4" value="B) string">B) tuple<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q4" value="C) Float"> C) dictionary<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q4" value="list"> list</p>',
			
				'A continous and additive process and simplifies quantitative changes<br><br>
						&nbsp;&nbsp;&nbsp;&nbsp; answer: &nbsp;&nbsp;&nbsp;&nbsp;  
						<input type="text" name="answer" ></p>',
						
				'What is the return value of trunc() ?<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q5" value="boolwrong;"> bool<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q5" value="int"> int<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q5" value="floatwrong"> float</p>',
						
				'What is the output of the following? x = [ab, cd] for i in x:    i.upper() print(x) <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q6" value="[‘ab’, ‘cd’]."> A) [‘ab’, ‘cd’].<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q6" value="[‘AB’, ‘CD’].WORNG"> [‘AB’, ‘CD’].<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q6" value="[None, None].worng"> [None, None].</p>',
						
				'What is the output of the following? i = 1 while True:     if i%3 == 0:         break     print(i)     i + = 1 <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q7" value="1 2w"> 1 2<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q7" value="error"> error<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q7" value="nonew"> none</p>',
						
				'What is the output of the following? i = 1 while True:     if i%7 == 0:       break    print(i)     i += 1 <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q8" value="(1, 2, 3)"> (1, 2, 3)<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q8" value="(1, 2, 3)w">(1, 2, 3)<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q8" value="{}w"> {}</p>',
						
				'What will be the output? 1.	>>>t=(1,2,4,3) 2.	>>>t[1:3] <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q9" value="(1, 2)w"> A) (1, 2)<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q9" value="(2, 4)"> (2, 4)<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q9" value="w(2, 4, 3)"> (2, 4, 3)</p>',
						
				'What will be the output? 1.	>>>t=(1,2,4,3) 2.	>>>t[1:-1] <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q10" value="(2, 4)"> (2, 4)<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q10" value="(2, 4, 3)w"> (2, 4, 3)<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q10" value="1, 2w"> C) 1, 2</p>',
						
				'It visually displays primary-output of computer.<br><br>
						&nbsp;&nbsp;&nbsp;&nbsp; answer: &nbsp;&nbsp;&nbsp;&nbsp;  
						<input type="text" name="answer2" ></p>',
				
				'What does TCP stands for?<br><br>
						&nbsp;&nbsp;&nbsp;&nbsp; answer: &nbsp;&nbsp;&nbsp;&nbsp;  
						<input type="text" name="answer3" ></p>',
						
						
						
						
				'What is the output when following statement is executed ? 1.	>>>"a"+"bc"  <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q13" value="abc">abc<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q13" value="bcawrong">bca<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q13" value="a"> a</p>',
						
				'What arithmetic operators cannot be used with strings ? <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q14" value="+"> +<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q14" value="*"> *<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q14" value="_"> _</p>',
						
				'Suppose list1 is [1, 3, 2], What is list1 * 2 ? &nbsp;&nbsp;&nbsp; <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q15" value="[2, 6, 4].w"> [2, 6, 4].<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q15" value="[1, 3, 2, 1, 3, 2]"> [1, 3, 2, 1, 3, 2] <br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q15" value="[1, 3, 2, 3, 2, 1]w."> [1, 3, 2, 3, 2, 1].</p>',
						
				'What is the output when following code is executed ? 1.	>>>list1 = [11, 2, 23] 2.	>>>list2 = [11, 2, 2] 3.	>>>list1 < list2 is <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q16" value="False"> A) False<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q16" value="Truew"> B) True<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q16" value="Errorw"> C) Error</p>',
						
				'You want a class to have access to members of another class in the same package. Which is the most restrictive access that accomplishes this objective? <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q17" value="B) private">B) private<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q17" value="C) protected"> C) protected<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q17" value="D) default access"> D) default access</p>',
					
				
				'To insert 5 to the third position in list1, we use which command ?<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q18" value="list1.insert(2, 5)w"> list1.insert(2, 5)<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q18" value="list1.insert(3, 5)"> list1.insert(3, 5)<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q18" value=") list1.append(3, 5)w"> list1.append(3, 5).</p>',
						
				'Which are the advantages of functions in python? <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q19" value="Reducing duplication of code w"> Reducing duplication of code<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q19" value="Decomposing complex problems into simpler pieces w"> Decomposing complex problems into simpler pieces  <br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q19" value="All of the mentioned">All of the mentioned</p>',
						
				'What are the two main types of functions?<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q20" value="Custom function w">Custom function<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q20" value="Built-in function & User defined function"> Built-in function & User defined function<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q20" value="User function w"> User function<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q20" value="sys w"> System user</p>',							
						
			    'Where is function defined?<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q21" value="Module w"> Module<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q21" value="Class w">Class<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q21" value="Another function w"> Another function<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q21" value="All of the mentioned"> All of the mentioned</p>',
						
				'Smallest unit of data in a computer system.<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q22" value="BYTE"> BYTE<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q22" value="KILOBYTE">KILOBYTE<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q22" value="MEGABYTE"> MEGABYTE<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q22" value="BIT"> BIT</p>',
						
				'Part of main memory where it stores data temporarirly.<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q23" value="ROM"> ROM<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q23" value="FLOPPY DISK">FLOPPY DISK<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q23" value="RAM"> RAM<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q23" value="HARD DISK"> HARD DISK</p>',
						
				'Software designed for hardware related task.<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q24" value="Hardware"> Hardware<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q24" value="Application Software">Application Software<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q24" value="System Software"> System Software<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q24" value="RAM"> RAM</p>',
						
				'What do you call the group of microchips controlling data flow?<br><br>
						&nbsp;&nbsp;&nbsp;&nbsp; answer: &nbsp;&nbsp;&nbsp;&nbsp;  
						<input type="text" name="answer4" ></p>'
            ); 

// displaying the array in random until $n number is satisfied
$rand_keys = array_rand($links, $n);
echo "<center>". "<br><table><tr><td>";

echo "1.&nbsp;&nbsp;". $links[$rand_keys[0]] . "<br>";
echo "</td></tr><tr><td>";
echo "2.&nbsp;&nbsp;".$links[$rand_keys[1]] . "<br>";
echo "</td></tr><tr><td>";
echo "3.&nbsp;&nbsp;". $links[$rand_keys[2]] . "<br>";
echo "</td></tr><tr><td>";
echo "4.&nbsp;&nbsp;".$links[$rand_keys[3]] . "<br>";
echo "</td></tr><tr><td>";
echo "5.&nbsp;&nbsp;".$links[$rand_keys[4]] . "<br>";
echo "</td></tr><tr><td>";
echo "6.&nbsp;&nbsp;".$links[$rand_keys[5]] . "<br>";
echo "</td></tr><tr><td>";
echo "7.&nbsp;&nbsp;".$links[$rand_keys[6]] . "<br>";
echo "</td></tr><tr><td>";
echo "8.&nbsp;&nbsp;".$links[$rand_keys[7]] . "<br>";
echo "</td></tr><tr><td>";
echo "9.&nbsp;&nbsp;".$links[$rand_keys[8]] . "<br>";
echo "</td></tr><tr><td>";
echo "10.&nbsp;&nbsp;".$links[$rand_keys[9]] . "<br>";
echo "</td></tr><tr><td>";
echo "11.&nbsp;&nbsp;". $links[$rand_keys[10]] . "<br>";
echo "</td></tr><tr><td>";
echo "12.&nbsp;&nbsp;".$links[$rand_keys[11]] . "<br>";
echo "</td></tr><tr><td>";
echo "13.&nbsp;&nbsp;". $links[$rand_keys[12]] . "<br>";
echo "</td></tr><tr><td>";
echo "14.&nbsp;&nbsp;".$links[$rand_keys[13]] . "<br>";
echo "</td></tr><tr><td>";
echo "15.&nbsp;&nbsp;".$links[$rand_keys[14]] . "<br>";
echo "</td></tr><tr><td>";
echo "16.&nbsp;&nbsp;".$links[$rand_keys[15]] . "<br>";
echo "</td></tr><tr><td>";
echo "17.&nbsp;&nbsp;".$links[$rand_keys[16]] . "<br>";
echo "</td></tr><tr><td>";
echo "18.&nbsp;&nbsp;".$links[$rand_keys[17]] . "<br>";
echo "</td></tr><tr><td>";
echo "19.&nbsp;&nbsp;".$links[$rand_keys[18]] . "<br>";
echo "</td></tr><tr><td>";
echo "20.&nbsp;&nbsp;".$links[$rand_keys[19]] . "<br>";
/*
you can add numbers according to your needs */
echo "</td></tr></table>";
echo "<center>". "<br>";



//for($i=0; $i<$n; $i++)
//{
//echo $rand_keys[$i]."<br>";
//}

?>
<input name="cmdSubmit" type="submit" id="cmdSubmit" value="Submit"/>
<input type="hidden" name="quest" value="quiz00.php">
</form>
</body>
</html>