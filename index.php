<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="GET" action="censura.php">
        <label for="censura">Paola da censurare: </label>
        <input name="censura" id="censura" type="text" placeholder="Inserisci parola da censurare">
        <label for="text">Testo: </label>
        <textarea name="message" rows="10" cols="30" id="text" placeholder='Inserisci testo'>
        </textarea>
        <button type="submit">Invia</button>
    </form>
</body>

</html>