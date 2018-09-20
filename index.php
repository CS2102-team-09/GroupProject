<!doctype html>
<html lang="en">
<head>
    <title>UPDATE PostgreSQL data with PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>li {
            list-style: none;
        }</style>
</head>
<body>

<div class="container" style="margin-left: 15% margin-right: 15%">
    <div class="container text-center">
        <p class="h1">Book Query System</p>
    </div>
    <div>
        <form name="display" action="index.php" method="POST">
            <div class="form-group">
                <label for="bookid">Enter Book ID</label>
                <input type="text" class="form-control" id="bookid" name="bookid" placeholder="Enter BookId">
            </div>
            <div class="form-row align-items-left">
                <div class="col-auto">
                    <button type="submit" name="searchById" class="btn btn-primary">Search</button>
                </div>
                <div class="col-auto">
                    <button type="submit" name="insert" class="btn btn-success">Add New</button>
                </div>
            </div>

        </form>
    </div>
</div>


<?php
// Connect to the database. Please change the password in the following line accordingly
$db = pg_connect("host=localhost port=5432 dbname=Project1 user=postgres password=postgres");

if (isset($_POST['insert'])) {
echo "
    <div class=\"container\" style=\"margin-top: 20px\">
        <form name=\"display\" action=\"index.php\" method=\"POST\">
            <div class=\"form-group\">
                <label for=\"new_bookid\">Book ID:</label>
                <input type=\"text\" class=\"form-control\" id=\"new_bookid\" name=\"new_bookid\" value='$row[book_id]'>
            </div>
            <div class=\"form-group\">
                <label for=\"new_book_name\">Book Name:</label>
                <input type=\"text\" class=\"form-control\" id=\"new_book_name\" name=\"new_book_name\" value='$row[name]'>
            </div>
            <div class=\"form-group\">
                <label for=\"new_price\">Price (USD):</label>
                <input type=\"text\" class=\"form-control\" id=\"new_price\" name=\"new_price\" value='$row[price]'>
            </div>
            <div class=\"form-group\">
                <label for=\"new_dop\">Date of publication:</label>
                <input type=\"text\" class=\"form-control\" id=\"new_dop\" name=\"new_dop\" value='$row[date_of_publication]'>
            </div>
    
            <button type=\"submit\" name=\"add\" class=\"btn btn-primary\">Insert to DB</button>
        </form>
    </div>
";
}

if (isset($_POST['add'])) {    // Submit the update SQL command
    $result = pg_query($db, "INSERT INTO book VALUES ('$_POST[new_bookid]', '$_POST[new_book_name]', '$_POST[new_price]', '$_POST[new_dop]')");
    if (!$result) {
        echo "<div class=\"container\" style=\"margin-top: 20px\"><span class=\"h5 text-danger\">Insert fail!</span></div>";
    } else {
        echo "<div class=\"container\" style=\"margin-top: 20px\"><span class=\"h5 text-success\">Insert successful!</span></div>";
    }
}

if (isset($_POST['searchById'])) {
    $result = pg_query($db, "SELECT * FROM book where book_id = '$_POST[bookid]'");        // Query template
    $row = pg_fetch_assoc($result);        // To store the result row
    if (!$row) {
        echo "<div class=\"container\" style=\"margin-top: 20px\"><span class=\"h5 text-danger\">Book not found!</span></div>";
    } else {
        echo "
            <div class=\"container\" style=\"margin-top: 20px\">
                <form name=\"display\" action=\"index.php\" method=\"POST\">
                    <div class=\"form-group\">
                        <label for=\"bookid_updated\">Book ID:</label>
                        <input type=\"text\" class=\"form-control\" id=\"bookid_updated\" name=\"bookid_updated\" value='$row[book_id]' readonly>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"bookid_updated\">Book Name:</label>
                        <input type=\"text\" class=\"form-control\" id=\"book_name_updated\" name=\"book_name_updated\" value='$row[name]'>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"bookid_updated\">Price (USD):</label>
                        <input type=\"text\" class=\"form-control\" id=\"price_updated\" name=\"price_updated\" value='$row[price]'>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"bookid_updated\">Date of publication:</label>
                        <input type=\"text\" class=\"form-control\" id=\"dop_updated\" name=\"dop_updated\" value='$row[date_of_publication]'>
                    </div>
            
                    <button type=\"submit\" name=\"new\" class=\"btn btn-primary\">Update</button>
                </form>
            </div>
    	";
    }
}
if (isset($_POST['new'])) {    // Submit the update SQL command
    $result = pg_query($db, "UPDATE book SET name = '$_POST[book_name_updated]', price = '$_POST[price_updated]', date_of_publication = '$_POST[dop_updated]' WHERE book_id = '$_POST[bookid_updated]'");
    if (!$result) {
        echo "<div class=\"container\" style=\"margin-top: 20px\"><span class=\"h5 text-danger\">Update fail!</span></div>";
    } else {
        echo "<div class=\"container\" style=\"margin-top: 20px\"><span class=\"h5 text-success\">Update successful!</span></div>";
    }
}
?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>
