<?php

/* 
PDO -SQlite interaction
*/


//this function gets called in routes.php. Argument is int $user_id why?
function get_user(int $user_id)
{
	//dont need to set up DSN or whatever (user, password, host) as it (sqlite) is just in a file. this line directs to that location
    $db = new PDO('sqlite:'.__DIR__ .'/../data/db.sqlite');
//
// SQL 'AS' https://www.w3schools.com/sql/sql_alias.asp
//
//	SELECTS 
//			column 'us_id' with alias 'id'
//			&
//			column 'us_name' with alias as 'name'
//	FROM
//			table 'users'
//	WHERE
//		???	only select results where us_id equals user_id? (https://www.guru99.com/where-clause.html)
//
//	$stmt = $db->prepare("SELECT us_id AS id, us_name AS name FROM users WHERE us_id = :user_id");
    $stmt = $db->prepare("SELECT us_id AS id, us_name AS name, us_eq AS eq, us_bio AS bio, us_img1 AS img1, us_img2 AS img2, us_img3 AS img3, us_url AS url FROM users WHERE us_id = :user_id");
//	uses 'bindParam' to bind :user_id to $user_id variable
    $stmt->bindParam(':user_id', $user_id);
//???	exectues? so it applys variable binding??
    $stmt->execute();

//???	PDO::FETCH_OBJ: returns an anonymous object with property names that correspond to the column names returned in your result set 
    $result = $stmt->fetch(PDO::FETCH_OBJ);
//closes the db connection
    $db = null;
    return $result;
}



function get_name($user_name)
{
	$db = new PDO('sqlite:'.__DIR__ .'/../data/db.sqlite');

	$stmt = $db->prepare("SELECT us_id AS id, us_name AS name, us_eq AS eq, us_bio AS bio, us_img1 AS img1, us_img2 AS img2, us_img3 AS img3, us_url AS url FROM users WHERE us_name = :user_name");
	$stmt->bindParam(':user_name', $user_name);
	$stmt->execute();
	$result = $stmt->fetch(PDO::FETCH_OBJ);
	$db = null;
    return $result;
}
//stuff from https://phpdelusions.net/pdo_examples/select
// Getting a single row
//If a query is supposed to return just a single row, then you can just call fetch() method of the $stmt variable:
// getting the last registered user
//$stmt = $pdo->query("SELECT * FROM users ORDER BY id DESC LIMIT 1");
//$user = $stmt->fetch();