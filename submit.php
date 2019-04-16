<?php require_once("functions.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Šrouby od Matky</title>
</head>
<body>
<?php


?>
<form>
    <?php
    for ($i=1; $i <= 20 ; $i++) {
        $age=filter_input(INPUT_POST, 'age_' . $i);
        $belt=getBelt($age);
        echo "Zadali jste číslo:  " . $age ; ?>
        <div style="display:block; width:100px; height:100px; border:2px black solid; background-color:<?php echo $belt ?>;"></div> <br>
    <?php
    }
    

    ?>
    
    </form>
</body>
</html>
