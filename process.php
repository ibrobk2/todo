<?php
$conn = mysqli_connect("localhost", "root", "", "aisha");

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



?>