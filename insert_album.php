<?php
require_once 'config/db.php';
$query = "SELECT * FROM category";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

$query2 = "SELECT * FROM tag"; 
$result2 = mysqli_query($conn, $query2);
$row2 = mysqli_fetch_assoc($result2);{

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Insert Album</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <form action="index.php">
                <button class="float-right btn btn-danger" type="submit">Go back</button>
            </form>
            <h3 class="mt-4">Album</h3>
            <hr>
            <form action="insert_album_db.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="filename" class="form-label">File Name</label>
                <input type="text" class="form-control" name="filename" aria-describedby="filename">
            </div>
            <div class="mb-3 custom-file">
                <label for="upfile" class="form-label">Upload File</label>
                <input type="file" class="form-control" name="upfile" aria-describedby="upfile">
            </div>
            
            <label for="choosecate" class="form-label">Category</label>
            <select name="choosecate" id="choosecate" class="custom-select customselect-sm">
            <?php do { ?>
                <option value="<?php echo $row['category_name']; ?>"><?php echo $row['category_name']; ?></option>
                <?php } while ($row = mysqli_fetch_assoc($result)); ?>
            </select>
          
    
            <div class="form-check">
            <?php do { ?>
                <label for="tag" class="tag">
                <input type="checkbox" class="form-checkbox-input" name="tag" id="tag" value="checkedValue" checked>
                <?php echo $row2['tag_name']; ?> </label>
                <?php } while ($row2 = mysqli_fetch_assoc($result2)); ?>
            </div> 
            <button type="submit" class="btn btn-primary" name="submit">Add</button>
            </form>
        </div>
    <?php
}
    ?>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

    </html>