<?php
require_once('connect.php');
$titre=$_GET['titre'];
$sql = "DELETE FROM annonce WHERE titre = '$titre' ";
if (mysqli_query($conn, $sql)) {
    echo "success";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>