<? session_start();?>
<html>
<link rel="stylesheet" href="my_layout.css"  type="text/css" />
<title>Phone Book Project</title>
<body class="my_body">
        <div id="my_divition">  
 <?php
 
       include('Control.php');
	   echo "<br> <b><u> Your contacts are :</u> </b><br><br>";
	   $connect=mysql_connect ("localhost", "root", "");
      			 mysql_select_db ("phonebook"); 
		 
				$id=$_SESSION['id'];
				
			    $sqlQuery="Select * from contact where M_id='$id'"; 
                 	 $result=mysql_query($sqlQuery); 
					 $number=mysql_num_rows($result);
					  echo "<table border=1> ";
					  					  echo "<tr><th>First name</th><th>Last name</th>
							
										  <th>Phone number</th></tr>";
										  if($number>1)
				    while($number>0)
				 {
				 
 
 
                   $fname=mysql_result($result,$number-1,"f_name");			
                   $lname=mysql_result($result,$number-1,"l_name");			
				   $phone=mysql_result($result,$number-1,"phone_number");			
                      					  echo "<tr><th>$fname</th><th>$lname</th>
										  <th>$phone</th></tr>";
     
	 
                 $number--;
				}	
					 else
					 {
					  echo "<table>";
					 echo " <br/> The contacts list is empty  !  ";
					 }
					 					 
           ?>
		   
		   				 
 </div>
 </body>
 </html>