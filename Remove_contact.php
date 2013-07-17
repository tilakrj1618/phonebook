<? session_start();?>
<html>
<link rel="stylesheet" href="my_layout.css"  type="text/css" />
<title>Phone Book Project</title>
<body class="my_body">
        <div id="my_divition">  
	
 <?php
 include('Control.php');
      echo "  <form action='After_remove.php' method='post' >
    
 
   <br />
    <b><u>Please enter the following information a bout the contact you want to remove :</u><br></b><br/>
     <b>First name : </b> <br />
	 <input type='text' name='fname' size=10 /><br /><br />
	 <b>Last name : </b><br />
	 <input type='text' name='lname' size=10 /><br /><br />
 
	 <input type=submit value='Remove this contact'  />
	  </form>   ";
	  
	  
	  ?>
  </div>
 </body>
 </html>