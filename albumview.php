<?php
require_once 'config/db.php';
$query = "SELECT * FROM albums";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

{


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Albums</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <form action="insert_album.php">
                <button class="float-right btn btn-primary" type="submit">Add</button>
            </form>
            <h3 class="mt-4">Album</h3>
            <hr>
            <table class="table table-hover col-12">
                <thead>
                    <tr class="text-center">
                        <th>Album ID</th>
                        <th>Album Name</th>
                        <th>Image</th>
                        <th>Category ID</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php do { ?>
                        <tr>
                            <td class="col-2"> <?php echo $row['album_id']; ?> </td>
                            <td class="col-2"> <?php echo $row['album_name']; ?> </td>
                            <td class="col-2"> <img src="<?php echo $row['album_img']; ?>"></td>
                            <td class="col-2"> <?php echo $row['category_id']; ?> </td>
                            <td class="col-2"><a href="albumedit.php" class="btn btn-warning">Edit</a></td>
                            <td class="col-2"><a href="albumdelete.php" class="btn btn-danger">Delete</a></td>
                            
                        </tr>
                    <?php } while ($row = mysqli_fetch_assoc($result)); ?>
                </tbody>

            </table>
        </div>
    <?php
}
    ?>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

    </html>