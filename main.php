<?php
  

   if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'connection.php';
     
      if(empty($_POST['tAsk'])){
        echo "Task is required";
      }else{
      $task = $_POST['tAsk'];
      
      $sql = "INSERT INTO `tdlist` (`Task`) VALUES ('$task');";
      $result = mysqli_query($conn, $sql);
      if($result){
        echo "Success";
      }else{
        echo "Error";
      }
    }
}
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class = "container">
        <h1>Put Your Task </h1>
    </div>

    <div class = "container">
          <form method = "post">
            <input type = "text" name = "tAsk">
            <input type = "submit" name = "sUbmit">
        </form>
    </div>
</body>
</html>