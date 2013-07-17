<? session_start();?>
 <html>
<link rel="stylesheet" href="my_layout.css"  type="text/css" />
<title>Phone Book Project</title>
<body class="my_body">
        <div id="my_divition">  
	
 <?php
 include('Control.php');
      echo " <br><b><u> Fill the following information to add new contact:</b>  </u><br> <form action='After_Add_contact.php' method='post' >
    
 
   <br />
     <b>First name : </b> <br />
	 <input type='text' name='fname' size=10 /><br /><br />
	 <b>Last name : </b><br />
	 <input type='text' name='lname' size=10 /><br /><br />
	 <b>Phone : </b><br />
	 <input type='text' name='phone' size=15 /><br /><br />
	 <input type=submit value='Submit'  />
	  </form>   ";
	  
	  
	  ?>
  </div>
 </body>
 </html>