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
				$phone=$_POST['phone'];
				$id=$_SESSION['id'];
				
			    $sqlQuery="Insert into contact values(null,'$fname','$lname'
				,'$phone','$id')"; 
                 	 $result=mysql_query($sqlQuery); 
					 
					 echo " <br/> The contact added successfully  !  ";
           ?>
		   
		   				 
 </div>
 </body>
 </html>