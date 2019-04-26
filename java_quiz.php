<html>
<body>
<head><center><h1> JAVA QUESTIONS</h1></center></head>
<form action="java_result.php" method="post">
<?php
if (isset($_POST['cmdSubmit'])) {

}
$n = 20; // this is the declaration of the total item on your quiz and array is used as a sttorage of 	          //the question in order to display it in random
$links=array('Which 1 of these lists contains only Java programming language keywords?<br><br> &nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q1" value="A) class, if, void, long, Int, continue"> A) class, if, void, long, Int, continue<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q1" value="B) goto, instanceof, native, finally, default, throws"> B) goto, instanceof, native, finally, default, throws<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q1" value="C) try, virtual, throw, final, volatile, transien"> C) try, virtual, throw, final, volatile, transien</p>', 
               
			    'Which will legally declare, construct, and initialize an array?<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q2" value="B) int [] myList = (5, 8, 2);"> B) int [] myList = (5, 8, 2);<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q2" value="C) int myList [] [] = {4,9,7,0};"> C) int myList [] [] = {4,9,7,0};<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q2" value="D) int myList [] = {4, 3, 7};"> D) int myList [] = {4, 3, 7};</p>',
               
			    'which is a reserved word in the Java programming language?<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q3" value="A) Method"> A) Method<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q3" value="B) native"> B) native<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q3" value="C) subclasses"> C) subclasses<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q3" value="D) reference"> D) reference</p>', 
              
			    'Which is a valid keyword in java?<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q4" value="A) Interface"> A) Interface<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q4" value="B) string">B) string<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q4" value="C) Float"> C) Float<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q4" value="D) unsigned"> D) unsigned</p>',
			
				'A continous and additive process and simplifies quantitative changes<br><br>
						&nbsp;&nbsp;&nbsp;&nbsp; answer: &nbsp;&nbsp;&nbsp;&nbsp;  
						<input type="text" name="answer" ></p>',
						
				'Which one of the following will declare an array and initialize it with five numbers?<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q5" value="A) Array a = new Array(5);"> A) Array a = new Array(5);<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q5" value="B) int [] a = {23,22,21,20,19};"> B) int [] a = {23,22,21,20,19};<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q5" value="C) int a [] = new int[5];"> C) int a [] = new int[5];</p>',
						
				'Which is the valid declarations within an interface definition?<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q6" value="A) public double methoda();"> A) public double methoda();<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q6" value="B) public final double methoda();"> B) public final double methoda();<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q6" value="C) static void methoda(double d1);"> C) static void methoda(double d1);</p>',
						
				'Which one is a valid declaration of a boolean?<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q7" value="A) boolean b1 = 0;"> A) boolean b1 = 0;<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q7" value="B) boolean b2 = "false";"> B) boolean b2 = "false";<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q7" value="C) boolean b3 = false;"> C) boolean b3 = false;</p>',
						
				'Which is a valid declarations of a String?<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q8" value="A) String s1 = null;"> A) String s1 = null;<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q8" value="B) String s2 = "null";"> B) String s2 = "null";<br>&nbsp;&nbsp;&nbsp;&nbsp;

						<input type="radio" name="q8" value="C) String s3 = (String) "abc";"> C) String s3 = (String) "abc";</p>',
						
				'What is the numerical range of a char? <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q9" value="A) -128 to 127"> A) -128 to 127<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q9" value="C) 0 to 32767"> C) 0 to 32767<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q9" value="D) 0 to 65535"> D) 0 to 65535</p>',
						
				'What is the name of the method used to start a thread execution?<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q10" value="A) Init();"> A) Init();<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q10" value="B) start();"> B) start();<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q10" value="C) run();"> C) run();</p>',
						
				'It visually displays primary-output of computer.<br><br>
						&nbsp;&nbsp;&nbsp;&nbsp; answer: &nbsp;&nbsp;&nbsp;&nbsp;  
						<input type="text" name="answer2" ></p>',
				
				'What does TCP stands for?<br><br>
						&nbsp;&nbsp;&nbsp;&nbsp; answer: &nbsp;&nbsp;&nbsp;&nbsp;  
						<input type="text" name="answer3" ></p>',
						
						
						
						
				'class X implements Runnable {    public static void main(String args[])    {        /* Missing code? */    }    public void run() {} } Which of the following line of code is suitable to start a thread ? <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q13" value="A) Thread t = new Thread(X);"> A) Thread t = new Thread(X);<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q13" value="B) Thread t = new Thread(X); t.start();"> B) Thread t = new Thread(X); t.start();<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q13" value="C) X run = new X(); Thread t = new Thread(run); t.start();"> C) X run = new X(); Thread t = new Thread(run); t.start();</p>',
						
				'Which cannot directly cause a thread to stop executing? <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q14" value="B) Calling the wait() method on an object."> B) Calling the wait() method on an object.<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q14" value="C) Calling notify() method on an object."> C) Calling notify() method on an object.<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q14" value="D) Calling notify() method on an object."> D) Calling notify() method on an object.</p>',
						
				'What will be the output of the program? public class Foo {    public static void main(String[] args)    {        try
        {             return;         }         finally        {            System.out.println(  );        }    } } &nbsp;&nbsp;&nbsp; <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q15" value="A) Finally"> A) Finally<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q15" value="B) Compilation fails."> B) Compilation fails.<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q15" value="C) The code runs with no output."> C) The code runs with no output.</p>',
						
				'You want subclasses in any package to have access to members of a superclass. Which is the most restrictive access that accomplishes this objective?<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q16" value="A) Public"> A) Public<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q16" value="B) private"> B) private<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q16" value="C) protected"> C) protected</p>',
						
				'You want a class to have access to members of another class in the same package. Which is the most restrictive access that accomplishes this objective? <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q17" value="B) private">B) private<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q17" value="C) protected"> C) protected<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q17" value="D) default access"> D) default access</p>',
					
				
				'Which is true about an anonymous inner class?<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q18" value="A) It can extend exactly one class and implement exactly one interface."> A) It can extend exactly one class and implement exactly one interface.<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q18" value="B) It can extend exactly one class and can implement multiple interfaces."> B) It can extend exactly one class and can implement multiple interfaces.<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q18" value="C) It can extend exactly one class or implement exactly one interface."> C) It can extend exactly one class or implement exactly one interface.</p>',
						
				'Which declaration of the main method below would allow a class to be started as a standalone program. <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q19" value="A) public static int main(char args[])"> A) public static int main(char args[])<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q19" value="B) public static void main(String args[])"> B) public static void main(String args[]) <br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q19" value="D) public static void main(String args)"> D) public static void main(String args)</p>',
						
				'Which of the following are Java keywords?<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q20" value="A)throw">A)throw<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q20" value="B)void"> B)void<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q20" value="C)private"> D)private<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q20" value="D) All of the above."> D) All of the above.</p>',							
						
			    'Java Interpreter is used for which purpose?<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q21" value="A) Compile Java program"> A) Compile Java program<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q21" value="B) Execute class file">B) Execute class file<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q21" value="C) Both 1 and 2"> C) Both 1 and 2<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q21" value="D) None of these"> D) None of these.</p>',
						
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