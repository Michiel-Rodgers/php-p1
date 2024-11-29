<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contact</h1>
    <?php
        include 'navbar.php';
    ?>
        <form></form>
    <label for="Voornaam">Naam</label >
    <input type="text" name="Naam" pattern="[A-Za-z]" id="naam"><br><br>
    
    <label>E-mail:</label>
    <input type="email" name="email" id="email" required><br><br>

    <label for="Bericht">Bericht</label>
    <input type="text" name="Bericht" id="bericht"><br><br>

    <input type="submit" value="Submit">
    <?php
        include 'footer.php';
    ?>
</body>
</html>