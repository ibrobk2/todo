<?php
if(isset($_GET['del'])){
    echo "<script>
        alert('Deleted Successful...');
    </script>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <style>
        body{
            margin:0; */
            padding:0;
            font-family: sans-serif;
            width:100%;
              /* max-width: 650px; */
         }

        .container{
            width: 100%;
            /* height: 100vh; */
            /* max-width: 650px; */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items:center;

        }

        table{
            width:100vw;
        }

        table, tr, th, td{
            /* border: 1px solid black; */
            border-collapse: collapse;
            padding: 6px;
            text-align: center;
        }

        tr:nth-of-type(even){
            background-color: #f2f2f2;
        }

        th{
            background-color: gray;
            
        }

        input, h3{
            margin:10px 5px 0 20px;
        }

        button{
            padding: 14px;
            border: none;
            background-color: dodgerblue;
            color: azure;
            font-weight: bold;
            border-radius: 5px;
        }
        button:hover{
            background-color: blue;
            cursor: pointer;
        }

        input{
            padding: 8px;
            border-radius: 6px;
            border: 0.5px solid gray;
            outline: none;
        }

        input:focus{
            background-color: #f2f2f2;
            color: #000;
        }

        #del{
            background-color: brown;
        }

        .las{
            font-size: 20px;
        }

        .btn{
            padding:8px;
        }

        a:link, a:visited{
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="process.php" method="post">
            <h3>Enter A Todo</h3>
            <input type="text" placeholder="Enter A Todo" name="todo"><button name="btn">Add</button>
    <hr>
            <br>
            <table>
                <thead>
                    <tr>
                        <th>Sno.</th>
                        <th>Todo</th>
                        <th colspan="2">Action</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php
                       // $conn = mysqli_connect("localhost", "root", "", "aisha");
                       $sn=1; 
                       include "connection.php";
                        $sql = "SELECT * FROM todo";
                        $res = mysqli_query($conn, $sql);

                        while($row = $res->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $sn++; ?></td>
                        <td><?php echo $row['todo']; ?></td>
                        <td><button class="btn"><i class="las la-edit"><a href="index.php?edit=<?=$row['id'];  ?>"></i>Edit</a></button></td>
                        <td><button class="btn"id="del"><a href="process.php?delete=<?=$row['id'];  ?>"><i class="las la-trash-alt"></i>Delete</a></button></td>
                       
                    </tr>

                    <?php } ?>
                  
                </tbody>
            </table>
        </form>
    </div>
</body>
</html>

