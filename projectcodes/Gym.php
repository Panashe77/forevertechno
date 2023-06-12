<?php

/* Attempt MySQL server connection. Assuming you are running MySQL

server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "", "demo");

 

// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

 

// Attempt create table query execution

$sql = "CREATE TABLE persons(

    member_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
	phone_number INT (30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE,
	password VARCHAR (30) NOT NULL,
	fitness_goals VARCHAR(40) NOT NULL,
	workout_schedule VARCHAR(40) NOT NULL,
	fitness_level VARCHAR (40) 

)";

if(mysqli_query($link, $sql)){

    echo "Table created successfully.";

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

 

// Close connection

mysqli_close($link);

?>