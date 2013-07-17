   <?php
	   $connect=mysql_connect ("localhost", "root", "");
      			 mysql_select_db ("phonebook"); 
				  
				$username=$_POST['username'];
				$password=$_POST['password'];
			    $sqlQuery="insert into members  values(null,'$username' ,'$password' )" ;
				 $result=mysql_query($sqlQuery);  
                  
				  include('index.php');
                  
           ?>