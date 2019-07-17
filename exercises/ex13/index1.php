<?php
include 'db.php';
$query = "SELECT * FROM tbl_test";
$result = mysqli_query($connection,$query);
if(!$result){
    die("DB query failed.");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>page1</title>
    <link href="includes/style.css" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
        <?php
            echo "<ul>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<li><h3 onclick='changeColor()'>" . $row["title"] . "</h3>";
                echo "<p>" . $row["txt"] . "</p></li>";
            }
            echo "</ul>";

            mysqli_free_result($result);
        ?>
    </div>
</body>

</html>
<?php
mysqli_close($connection);
?>