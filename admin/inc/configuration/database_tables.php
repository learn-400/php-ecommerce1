<?php
include "define.php";
include "database.php";


// sql to category table
$sql = "CREATE TABLE category (
category_id INT(6) AUTO_INCREMENT PRIMARY KEY, 
category_name VARCHAR(30) NOT NULL,
category_parent VARCHAR(30) NOT NULL,
category_images VARCHAR(30) NOT NULL
)";

if (mysqli_query($connection, $sql)) {
    //echo "Table MyGuests created successfully";

	
} else {
    //echo "Error creating table: " . mysqli_error($connection);
}










// sql to brand table

$sql = "CREATE TABLE brand (
brand_id INT(6) AUTO_INCREMENT PRIMARY KEY, 
brand_name VARCHAR(30) NOT NULL,
brand_parent VARCHAR(30) NOT NULL,
brand_images VARCHAR(30) NOT NULL
)";

if (mysqli_query($connection, $sql)) {
    //echo "Table MyGuests created successfully";
	
} else {
    //echo "Error creating table: " . mysqli_error($connection);
}











	header('Location:'.$base_admin_url);
	exit;
























mysqli_close($connection);

