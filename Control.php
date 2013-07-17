<?php

 				
				 if(session_is_registered('id'))
				 {
				  echo "<br>	<h2> Control panel :</h2>";
				 echo "<table border=1>
				 <form action=Add_contact.php method=post>
				  <input type=submit value='Add contact'  />
				 </form>
				 <form action=Show_Contact.php method=post>
				   <input type=submit value='Show contacts'  />
				 </form>
				 <form action=Search_for_contact.php method=post>
				 <input type=submit value='Search contacts'  />
				 </form>
				 <form action=Remove_contact.php method=post>
				 <input type=submit value='Remove contact'  />
				 </form>   
				 <form action=logout.php method=post>
				 <input type=submit value='logout'  />
				 </form>  </table>";
				 
				 }
				 
				 ?>
