<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="assets/css/form1results.css">
</head>
<?php $lievelings_kleur = $_GET["lievelings_kleur"] ?>
<body style="background-color:<?php echo("$lievelings_kleur");?>">
    <div class="container">
       
<?php 
$voornaam = $_GET["voornaam"];
$tussenvoegsel = $_GET["tussenvoegsel"];
$achternaam = $_GET["achternaam"];
$leeftijd = $_GET["leeftijd"];
echo $voornaam;
if (empty($tussenvoegsel)) {
    echo " ";
  }
  
  if (isset($tussenvoegsel)) {
    echo " ".$tussenvoegsel;
  }
echo " ".$achternaam."<br>";
echo $leeftijd * 4;
?>


</div>
</body>
</html>