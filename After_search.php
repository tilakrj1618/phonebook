<? session_start();?>
<html>
<link rel="stylesheet" href="my_layout.css"  type="text/css" />
<title>Phone Book Project</title>
<body class="my_body">
        <div id="my_divition">  
 <?php
 
       include('Control.php');
	   $connect=mysql_connect ("localhost", "root", "");
      			 mysql_select_db ("phonebook"); 
				  
				$fname=$_POST['fname'];
				$lname=$_POST['lname'];
			 
				$id=$_SESSION['id'];
				
			    $sqlQuery="select * from contact where f_name='$fname' AND l_name='$lname' AND                   M_id='$id'"; 
                 	 $result=mysql_query($sqlQuery); 
					 	 $number=mysql_num_rows($result);
						 
						 echo "<b><u><br>The search result is : </u></b><br><br>";
					  echo "<table border=1> ";
					  					  echo "<tr><th>First name</th><th>Last name</th>
										  <th>Phone number</th></tr>";
				    if($number>0)
				 {
				 
 
 
                   $fname=mysql_result($result,$number-1,"f_name");			
                   $lname=mysql_result($result,$number-1,"l_name");			
				   $phone=mysql_result($result,$number-1,"phone_number");			
                      					  echo "<center><tr><th>$fname</th><th>$lname</th>
										  <th>$phone</th></tr></center>";
     
	 
                 $number--;
				}	
				    else
					{
					
					 echo "</table> <br/> Sorry :no contact found with Name=$fname $lname  !  ";
					 }
           ?>
		   
		   				 
 </div>
 </body>
 </html>