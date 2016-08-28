<?php
	function db_connect(){
		$servername="localhost";
        $username="root";
        $database="members";
        $password="";
        $connection = mysqli_connect($servername,$username,$password,$database) ;
		if (mysqli_connect_errno()) 
		{
			die("databse connection failed");
		}
		else{
			// echo "connection successfully done!";
			return($connection);
	    }        
	}
