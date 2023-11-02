<?php
$conn = mysqli_connect("localhost:3308","root","","wad_project3");

$result = mysqli_query($conn,"select * FROM student");

//$data = mysqli_fetch_object($result);

//var_dump($data->Name);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <style>
    th, td {
    border-style:solid;
    border-color: #96D4D4;
    }
    </style>
</head>
<body>
    <h4> Latihan </h4>
    <br>
    
    <table style="width:auto">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Nim</th>
            <th>Address</th>
        <?php while ($data = mysqli_fetch_object($result)) {
        ?>
            <tr>
            <td><?php echo $data->Id ?></td>
            <td><?php echo $data->Name ?></td>
            <td><?php echo $data->Nim ?></td>
            <td><?php echo $data->Address ?></td>
            </tr>
        </tr>
        <?php
        }   
        ?>
    </table>
</body>
</html>