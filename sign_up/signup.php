<?php
//CONNECTING TO DATABASE
$host = "localhost";
$db = "manan";
$user = "postgres";
$pw = "abacusmas123A*MM";
$conn = pg_connect("host=localhost port=5432 dbname=manan user=postgres password=$pw");

//COLLECTING DATA FROM THE FORM

$first_name = $_POST['name'];
$

if(empty($name)){
    echo "Enter the name";
}else{
    $result = pg_query($conn, "INSERT INTO test (name) VALUES ('$name') ");
    if (!$result) {
      echo "An error occurred.\n";
      exit;
    }   
}


?>
