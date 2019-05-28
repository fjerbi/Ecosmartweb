<?php
require_once('connect.php');

$return_arr = array();

$sql = "SELECT * FROM annonce";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $row_array['id'] = $row['id'];
       $row_array['titre'] = $row['titre'];
       $row_array['description'] = $row['description'];
       $row_array['photo'] = $row['photo'];
       $row_array['adresse'] = $row['adresse'];
	
    array_push($return_arr,$row_array);
    }
} 


echo json_encode($return_arr);

?>