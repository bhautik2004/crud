<?php

$conn = mysqli_connect("localhost","root","","elearning");
if(isset($_POST['id']))
{
    $id = $_POST['id'];
    $result_array = [];

    $query = "SELECT * FROM user WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
        foreach($query_run as $row)
        {
            array_push($result_array, $row);
        }
        header('Content-type: application/json');
        echo json_encode($result_array);
    }
    else
    {
        echo $return = "No Record Found.!";
    }
}

?>