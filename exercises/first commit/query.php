

<?php
   include "config.php";

  $query = $_POST['query'];
  $model = mysqli_query($connection, $query);
  if(!$model){
      echo "NULL";
  }
  else{
    
    $res = mysqli_fetch_all($model,MYSQLI_ASSOC);
    $res = json_encode($res);
    echo $res;

  }
  mysqli_close($connection);
?>


<?php
//    include "config.php";

//   $query = $_POST['query'];
//   $model = mysqli_query($connection, $query);
//   if(!$model){
//       echo "NULL";
//   }
//   else{
//     $result[];
//     while ($row = mysqli_fetch_assoc($model)) {
//         $result[] = $row;
//     }

//     $res = json_encode($result);
//     echo $res;

//   }
//   mysqli_close($connection);
?>