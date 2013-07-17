<?php
  session_start();
?>
<html>
<link rel="stylesheet" href="my_layout.css"  type="text/css" />
<title>Phone Book Project</title>
<body class="my_body">
        <div id="my_divition">  
 
	  <?php
	   $connect=mysql_connect ("localhost", "root", "");
      			 mysql_select_db ("phonebook"); 
				  
				$username=$_POST['username'];
				$password=$_POST['password'];
			    $sqlQuery="select * from members where username='$username' AND 
				   pass='$password'" ;
				 $result=mysql_query($sqlQuery);  
				 $number=mysql_num_rows($result);
				 
				  if($number>0)
				 {
				 
 
 
                   $id=mysql_result($result,0,"id");			
        	        $_SESSION['id']=$id;
    			 	session_register('id'); 
					
					include('Control.php');
				}
				else 
				 echo"<h1> <br /><br />Sorry : invalid entery <br /><br /></h1><a href=index.php >
				 go	 back </a>";
                  
           ?>
		   
		 
		   </div>
 
</body>
</html>