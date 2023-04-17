<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
    <form method="GET" action="censura.php">

        <div>
            <label for="censura">Paola da censurare: </label>
            <input name="censura" id="censura" type="text" placeholder="Inserisci parola da censurare">
        </div>
        <div>
            <label for="text">Testo: </label>
            <textarea name="message" rows="3" cols="30" id="text" placeholder='Inserisci testo'>
            </textarea>
        </div>
        
        <button type="submit">Invia</button>
    </form>
</body>

</html>