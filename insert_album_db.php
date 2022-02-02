<?php
    session_start();
    require_once 'config/db.php';
    $query = "SELECT * FROM category";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);


    if(isset($_POST['submit'])) {
        
        $filename = $_POST['filename'];
       $upfile = $_POST['upfile'];
       $choosecate = $_POST['choosecate'];
       $tag = $_POST['tag'];
  
       mysqli_query($conn, "INSERT INTO albums(album_name, album_img) 
                            VALUES('$filename','$upfile')");
        $_SESSION['success'] = " เพิ่มข้อมูลเรียบร้อยแล้ว!";
        header("location:insert_cate.php"); 
    }
?>