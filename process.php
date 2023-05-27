<?php
include "connection.php";

//ADD TODO SECTION
if(isset($_POST['btn'])){
    $todo = $_POST['todo'];

    // $sql = "INSERT INTO `todo` (todo) VALUES ('$todo')";
    $sql = "INSERT INTO `todo` VALUES (null, '$todo')";
    $res = mysqli_query($conn, $sql);

    if($res){
        header("Location:index.php");
    }
}

//DELETE SECTION

if(isset($_GET['delete'])){
    echo $id = $_GET['delete'];

    $sql = "DELETE FROM todo WHERE id=$id";
    // $result = mysqli_query($conn, $sql);
    $result = $conn->query($sql);

    if($result){
        header("Location: index.php?del=successful");
    }
    

}

?>