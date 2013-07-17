<? session_start();?>
<html>
<link rel="stylesheet" href="my_layout.css"  type="text/css" />
<title>Phone Book Project</title>
<body class="my_body">
        <div id="my_divition">  
	
 <?php
 include('Control.php');
      echo "  <form action='After_search.php' method='post' >
    
 
   <br />
    <b><u>Please enter the following information a bout the contact you want to find :</u><br></b><br/>
     <b>First name : </b> <br />
	 <input type='text' name='fname' size=10 /><br /><br />
	 <b>Last name : </b><br />
	 <input type='text' name='lname' size=10 /><br /><br />
 
	 <input type=submit value='Search'  />
	  </form>   ";
	  
	  
	  ?>
  </div>
 </body>
 </html>