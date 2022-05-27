<?php 
require_once("./config.php");
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("./includes/scripts.php"); ?>
</head>
<body>
    <?php include("./includes/navbar.php"); ?>

<h1>Welcome you have successfully logged in</h1>

<h1><?php echo $row["username"]?></h1>

<?php include("./includes/footer.php") ?>
</body>
</html>