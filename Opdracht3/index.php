<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Forms</title>
</head>
<style> 
  span{
    color: red;
    font-weight: 900;
}
</style>
<body>
<?php
$nameError = $emailError = "";
$name = $email = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["Naam"])) {
      $nameError = "Naam is verplicht";
    } else {
      $name = dataClean($_POST["Naam"]);
    }
    if(empty($_POST["Email"])){
      $emailError = "Email is verplicht";
    } else {
      $email = dataClean($_POST["Email"]);
    }
  
  }
  function dataClean($Data){
    $data = trim($Data);
    $data = stripslashes($Data);
    $data = htmlspecialchars($Data);
    return $data;
  }
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        <label for="Name">Naam <span>*</span></label>
        <span> <?= $nameError ?></span>
        <input type="text" id="Name" name="Naam">
        <label for="Email">Email <span>*</span></label>
        <span> <?= $emailError ?> </span>
        <input type="email" id="Email" name="Email">
        <input type="submit" value="Submit">
  </form>
<p><?=$name;?> </p>
<p><?=$email;?> </p>
</body>
</html>



