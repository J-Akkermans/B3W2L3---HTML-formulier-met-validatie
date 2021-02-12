<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Forms</title>
</head>

<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        <label for="Name">Naam</label>
        <input type="text" id="Name" name="Naam">
        <span> <?php echo $nameErr ?> </span>
        <label for="Email">Email</label>
        <input type="email" id="Email" name="Email">
        <input type="submit" value="Submit">
  </form>
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["Naam"];
  $email = $_POST["Email"];
  }
?>
<p><?=$name;?> </p>
<p><?=$email;?> </p>
</body>
</html>
<?php


