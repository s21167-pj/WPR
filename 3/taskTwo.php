<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>
    My First Write to file in PHP!
  </title>
</head>

<body>
  <form method="post">
    Name:<br>
    <input type="text" name="name"><br>
    Surname:<br>
    <input type="text" name="surname"><br>
    Favourite programming language:<br>
    <input type="text" name="language"><br>
    <input type="submit" name="submit" value="Save to file!">
    
  </form>
</body>
</html>
<?php
              
$name=$_POST['name'];
$surname=$_POST['surname'];
$language=$_POST['language'];
$inputToWrite = fopen('veryImportantData.txt', 'a');
fwrite($inputToWrite, $name);
fwrite($inputToWrite, " ");
fwrite($inputToWrite, $surname);
fwrite($inputToWrite, " ");
fwrite($inputToWrite, $language);
fwrite($inputToWrite, "\n");
fclose($inputToWrite);

?>