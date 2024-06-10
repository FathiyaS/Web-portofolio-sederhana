<?php
if(isset($_POST['post_comment'])) {
    $username= $_POST['username'];
    $isikomen = $_POST['isikomen'];
   
    // include database connection file
    include_once("config.php");

    // Insert user data into table
    $result = mysqli_query($mysqli, "INSERT INTO isi(username,isikomen) VALUES('$username','$isikomen')");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="komencss.css">
</head>
<body>
<div class="navigasi">
    <div class="logo">
    <h1>COMMENTS HERE</h1>
    </div>
    <div class="menu">
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="index1.html">About me</a></li>
    </ul>
    </div>
</div>
    <div class="wrapper">
    <img src="images/14261142_2003.i203.006.virtual_relationships_online_dating_cartoon-removebg-preview.png" alt="">
    <div class="box">
        <form action="" method="post" class="form">
            <p>username</p><br>
            <input type="text" class="name" name="username">
            <br>
            <p>komentar</p><br>
            <textarea name="isikomen" id="" cols="30" rows="10" class="massage"></textarea>
            <br>
            <button type="submit" class="btn" name="post_comment" >post komen</button>
        </form>
    </div>
    <div class="content">
        <?php

        include_once("config.php");
        $result = mysqli_query($mysqli, "SELECT * FROM isi ORDER BY nomor DESC");

        if ($result->num_rows > 0){
            while($row=$result->fetch_assoc()){
        ?>
        
        <h5><?php echo $row['username'];?></h5>
        <p><?php echo $row['isikomen'];?></p>

        <?php } }?>

    </div>
    </div>
</body>
</html>