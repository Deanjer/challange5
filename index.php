<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/form1results.css">
</head>
<body>
    <div class="container">
        <h2>Form1</h2>
        <form action="form1results.php" method="get">
            <input type="text" id="voornaam" name="voornaam" value="" placeholder="voornaam" required><br>
            <input type="text" name="tussenvoegsel" value="" placeholder="tussenvoegsel"><br>
            <input type="text" name="achternaam" value="" placeholder="achternaam" required><br>
            <input type="number" name="leeftijd" value="" placeholder="leeftijd" required><br>
            <select name="lievelings_kleur" id="kleur" placeholder="lievelingskleur" required><br>
                <option value="">None</option>
                <option value="blue">blauw</option>
                <option value="green">groen</option>
                <option value="yellow">geel</option>
                <option value="red">rood</option>
                <option value="orange">oranje</option>
                <option value="purple">paars</option>
            </select>
            <input type="submit">
        </form>
        <h2>Form2</h2>
        <form action="form2results.php" method="post">
            <input type="email" id="email" name="email"><br>
            <input type="password" id="wachtwoord" name="wachtwoord"><br>
            <input type="submit">
        </form>
        
    </div>
</body>
</html>