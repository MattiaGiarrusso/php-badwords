<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <form action="data.php" method="POST">
        <div>
            <label>Paragrafo</label>
            <div>
                <textarea name="paragraph" type="text" require></textarea>
            </div>
        </div>

        <div>
            <label>Parola nascosta</label>
            <input name="hidden-text" type="text" require/>
        </div>

        <div>
            <button type="submit">Invia</button>
        </div>
    </form>
</body>

</html>