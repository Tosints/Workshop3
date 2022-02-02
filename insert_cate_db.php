<?php
    session_start();
    require_once 'config/db.php';

    if(isset($_POST['submit'])) {
        $category_name = $_POST['category_name'];
  
       mysqli_query($conn, "INSERT INTO category(category_name)VALUES('$category_name')");
        $_SESSION['success'] = " เพิ่มข้อมูลเรียบร้อยแล้ว!";
        header("location:insert_cate.php"); 
    }
?>