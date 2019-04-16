<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Šrouby od Matky</title>
</head>
<body>
<form action="submit.php" method="post">
    <?php
    for ($i=1; $i <= 20 ; $i++) {
        ?>
        <br> <label for="age_<?= $i ?>">Věk: <?= $i  ?></label> 
        <input type="text" name="age_<?= $i ?>">
    <?php
    }
    
    
    ?>
     <br><input type="submit" name="submit" value="odeslat">
    
    
    </form>
</body>
</html>
