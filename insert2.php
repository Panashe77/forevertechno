<?php

	
	

/* Attempt MySQL server connection. Assuming you are running MySQL

server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "", "demo");

 

// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

 

// Attempt create table query execution

$sql = "CREATE TABLE gym(

    member_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,

    f_name VARCHAR(30) NOT NULL,

    l_name VARCHAR(30) NOT NULL,

    email VARCHAR(70) NOT NULL UNIQUE;
	
	phone TEXT(11) NOT NULL;
	
	password VARCHAR(25) NOT NULL UNIQUE;
	
	goals VARCHAR(30) NOT NULL;
	
	schedule VARCHAR(25) NOT NULL
	
	
	
	

)";

if(mysqli_query($link, $sql)){

    echo "Table created successfully.";

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

?>