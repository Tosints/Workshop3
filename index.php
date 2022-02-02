<?php
require_once 'config/db.php';
$query = "SELECT * FROM category";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result); {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Workshop 3</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <form action="insert_cate.php">
                <button class="float-right btn btn-primary" type="submit">Add Category</button>
            </form>
            <form action="insert_tag.php">
            <button class="float-right btn btn-primary mr-2" type="submit">Add Tag</button>
            </form>
            <h3 class="mt-4">Home</h3>
            <hr>
            <table class="table table-hover col-12">
                <thead>
                    <tr>
                        <th>Category ID</th>
                        <th>Category Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php do { ?>
                        <tr>
                            <form action="albumview.php" method="$row['category_name']">
                            <td> <?php echo $row['category_id']; ?> </td>
                            <td> <?php echo $row['category_name']; ?> </td>
                            <td><a href="edit_cate.php" class="float-right btn btn-warning" type="submit">Edit</a></td>
                            <td><button class="float-right btn btn-primary" type="submit">Go</button></td>
                            </form>
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