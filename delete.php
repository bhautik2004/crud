<?php

$conn = mysqli_connect("localhost","root","","elearning");

$id = $_POST['id'];


$sql = "DELETE FROM user WHERE id = '$id'";
$result = mysqli_query($conn, $sql);


if ($result) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}


mysqli_close($conn);
