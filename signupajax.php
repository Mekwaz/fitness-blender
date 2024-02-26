<?php
    
    $db = mysqli_connect("localhost", "root", "", "fitnessblender");

    if(isset($_POST["username"])){
        $username =  mysqli_real_escape_string($db, $_POST['username']);
        $query = "select * from members where username = '".$username."'";
        $result = mysqli_query($db, $query);
        $num = mysqli_num_rows($result);
        echo $num;
    }
?>