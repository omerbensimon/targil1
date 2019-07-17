<?php
    $dbhost = "182.50.133.168";
    $dbuser = "studDB19a";
    $dbpass = "stud19DB1!";
    $dbname = "studDB19a";

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if(mysqli_connect_errno()){
        die("DB connection failed: ". mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"
        );
    }

    echo "success!";
// mysqli_close($connection);
?>
<?php
$query = "SELECT * FROM tbl_test";
$result = mysqli_query($connection, $query);
if(!$retult){
    die("DB query failed.");
}
?>