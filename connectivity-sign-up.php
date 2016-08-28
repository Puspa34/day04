<?php
 define('DB_HOST', 'localhost'); 
 define('DB_NAME', 'persons'); 
 define('DB_USER','root');
  define('DB_PASSWORD','');
   $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
   $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

    function NewUser() { $username = $_POST['name'];
	 $password = md5($_POST['pass']);
       $query = "INSERT INTO members (username, password) VALUES ('$username','$password')";
        $data = mysql_query ($query)or die(mysql_error()); 
        if($data) 
        	{ echo "YOUR REGISTRATION IS COMPLETED...";
        	 }
        	 }
    NewUser();
    