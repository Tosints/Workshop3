<?php
    session_start();
    require_once 'config/db.php';

    if(count($_POST)>0) {
        mysqli_query($conn, "UPDATE category set category_name = '%s'");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit_cate</title>
</head>
<body>
    <div class="container">
        <form name="f1" method="POST">
        <div class="mb-3">
                <label for="category_name" class="form-label">กรอกชื่อ Category</label>
                <input type="text" name="category_name" id="category_name" class="form-control" aria-describedby="category_name">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Add</button>
        </form>
    </div>
</body>
</html>