<? session_start();

       session_unregister('id');
	   session_destroy();
	   include('index.php');
	   
?>