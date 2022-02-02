<?php
    session_start();
    require_once 'config/db.php';

    if(isset($_POST['submit'])) {
        $tag_name = $_POST['tag_name'];
  
        mysqli_query($conn, "INSERT INTO tag(tag_name)VALUES('$tag_name')");
        $_SESSION['success'] = " เพิ่มข้อมูลเรียบร้อยแล้ว!";
        header("location:insert_tag.php"); 
    }
?>