<?php
    $text = $_GET['message'];
    $censura = $_GET['censura'];
    $textarea = $text;
    $censuratext = str_replace($censura,"***",$textarea);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Il testo riportato è: <?php echo $textarea; ?></h1>
    <p>La lunghezza del testo scritto è: <?php echo strlen($textarea); ?></p>
    <h1>Il testo riportato con censura è: <?php echo $censuratext; ?></h1>
    <p>La lunghezza del testo scritto è: <?php echo strlen($censuratext); ?></p>
</body>

</html>